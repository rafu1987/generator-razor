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
    name: 'razorkickstart:install',
    description: 'Installs Razor and all required dependencies'
)]
final class InstallCommand extends Command
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

        $io->writeln('Installing razor dependencies...');

        $extension = $this->extensionManagementService->getExtension(
            'razorbootstrap'
        );

        $result = $this->extensionManagementService->installExtension(
            $extension
        );

        if ($result === false) {
            $errors = $this->extensionManagementService
                ->getDependencyErrors();

            $io->error([
                'razor dependencies could not be resolved.',
                print_r($errors, true),
            ]);

            return Command::FAILURE;
        }

        $io->success(
            'razor and all dependencies installed successfully.'
        );

        return Command::SUCCESS;
    }
}
