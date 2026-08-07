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
use TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService;

#[AsCommand(
    name: 'razorkickstart:prepare',
    description: 'Downloads all required razor dependencies'
)]
final class PrepareCommand extends Command
{
    public function __construct(
        private readonly ExtensionManagementService $extensionManagementService
    ) {
        parent::__construct();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $io = new SymfonyStyle($input, $output);

        $io->writeln('Preparing razor dependencies...');

        $extension = $this->extensionManagementService->getExtension(
            'razorbootstrap'
        );

        /*
         * Resolve and download dependencies, but do NOT activate them.
         *
         * Activation must happen in a fresh TYPO3 process so the
         * newly downloaded extensions are part of the DI container.
         */
        $this->extensionManagementService
            ->setAutomaticInstallationEnabled(false);

        $result = $this->extensionManagementService
            ->installExtension($extension);

        if ($result === false) {
            $io->error([
                'razor dependencies could not be resolved.',
                print_r(
                    $this->extensionManagementService->getDependencyErrors(),
                    true
                ),
            ]);

            return Command::FAILURE;
        }

        $io->success(
            'razor dependencies successfully prepared.'
        );

        return Command::SUCCESS;
    }
}
