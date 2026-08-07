<?php

declare(strict_types=1);

namespace RZ\Razorkickstart\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
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
         * All TER dependencies have already been downloaded by
         * razorkickstart:prepare.
         *
         * Resolve the complete installation queue again now that
         * every extension is physically available.
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
         * IMPORTANT:
         *
         * Do NOT use InstallUtility or PackageActivationService here.
         *
         * activatePackage() only updates PackageStates.php and does
         * not immediately rebuild TCA. The actual TYPO3 setup happens
         * in a fresh process afterwards.
         */
        foreach (array_keys($installQueue) as $extensionKey) {
            $io->writeln(
                sprintf('Activating package %s...', $extensionKey)
            );

            $this->packageManager->activatePackage(
                $extensionKey
            );
        }

        $io->success(
            'Razor package states successfully prepared.'
        );

        return Command::SUCCESS;
    }
}