<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace RZ\Razorkickstart\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use TYPO3\CMS\Core\Core\ClassLoadingInformation;
use TYPO3\CMS\Core\Package\PackageManager;
use TYPO3\CMS\Extensionmanager\Domain\Model\DownloadQueue;
use TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService;

#[AsCommand(
    name: 'razorkickstart:install',
    description: 'Activates the complete Razor framework'
)]
final class InstallCommand extends Command
{
    public function __construct(
        private readonly ExtensionManagementService $extensionManagementService,
        private readonly DownloadQueue $downloadQueue,
        private readonly PackageManager $packageManager
    ) {
        parent::__construct();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $io = new SymfonyStyle($input, $output);

        $io->writeln('Preparing Razor package states...');

        /*
         * Resolve the complete installation queue again.
         *
         * All TER dependencies have already been downloaded by
         * razorkickstart:prepare.
         */
        $this->extensionManagementService->markExtensionForInstallation(
            'razorbootstrap'
        );

        $dependencyErrors = $this->extensionManagementService
            ->getDependencyErrors();

        if ($dependencyErrors !== []) {
            $io->error([
                'Razor dependencies could not be resolved.',
                print_r($dependencyErrors, true),
            ]);

            return Command::FAILURE;
        }

        /*
         * Nothing should need downloading anymore.
         */
        if (
            !$this->downloadQueue->isQueueEmpty('download')
            || !$this->downloadQueue->isQueueEmpty('update')
        ) {
            $io->error(
                'Razor dependencies are not completely prepared.'
            );

            return Command::FAILURE;
        }

        $installQueue = $this->downloadQueue
            ->resetExtensionInstallStorage();

        if ($installQueue === []) {
            $io->error(
                'No Razor extensions were found in the installation queue.'
            );

            return Command::FAILURE;
        }

        /*
         * Only update PackageStates.php.
         *
         * Do not use PackageActivationService here because it would
         * immediately rebuild DI/TCA in the current process.
         */
        foreach (array_keys($installQueue) as $extensionKey) {
            $io->writeln(
                sprintf(
                    'Activating package %s...',
                    $extensionKey
                )
            );

            $this->packageManager->activatePackage(
                $extensionKey
            );
        }

        /*
         * Important for TYPO3 Classic mode:
         *
         * activatePackage() registers class-loading information only
         * transiently for this process. Persist the complete class map
         * and PSR-4 configuration so the next TYPO3 process knows all
         * newly activated extensions.
         */
        $io->writeln(
            'Rebuilding TYPO3 class loading information...'
        );

        ClassLoadingInformation::dumpClassLoadingInformation();

        $io->success(
            'Razor package states successfully prepared.'
        );

        return Command::SUCCESS;
    }
}
