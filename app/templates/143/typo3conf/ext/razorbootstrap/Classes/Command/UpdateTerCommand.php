<?php

declare(strict_types=1);

namespace RZ\Razorbootstrap\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use TYPO3\CMS\Core\Attribute\AsNonSchedulableCommand;
use TYPO3\CMS\Extensionmanager\Exception\ExtensionManagerException;
use TYPO3\CMS\Extensionmanager\Remote\RemoteRegistry;

#[AsCommand(
    name: 'razorbootstrap:ter:update',
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
