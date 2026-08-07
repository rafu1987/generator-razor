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
use TYPO3\CMS\Core\Attribute\AsNonSchedulableCommand;
use TYPO3\CMS\Extensionmanager\Exception\ExtensionManagerException;
use TYPO3\CMS\Extensionmanager\Remote\RemoteRegistry;

#[AsCommand(
    name: 'razorkickstart:ter:update',
    description: 'Updates the TYPO3 Extension Repository extension list'
)]
#[AsNonSchedulableCommand]
final class UpdateTerCommand extends Command
{
    public function __construct(
        private readonly RemoteRegistry $remoteRegistry
    ) {
        parent::__construct();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $io = new SymfonyStyle($input, $output);

        $io->text('Updating TER extension list...');

        try {
            foreach ($this->remoteRegistry->getListableRemotes() as $remote) {
                $remote->getAvailablePackages(true);
            }
        } catch (ExtensionManagerException $exception) {
            $io->error($exception->getMessage());

            return Command::FAILURE;
        }

        $io->success('TER extension list successfully updated.');

        return Command::SUCCESS;
    }
}
