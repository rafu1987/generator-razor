<?php

declare(strict_types=1);

namespace RZ\Razorbootstrap\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use TYPO3\CMS\Core\Attribute\AsNonSchedulableCommand;
use TYPO3\CMS\Core\Core\Bootstrap;
use TYPO3\CMS\Extensionmanager\Domain\Model\Extension;
use TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService;
use TYPO3\CMS\Extensionmanager\Utility\InstallUtility;

#[AsCommand(
    name: 'razorbootstrap:extension:install',
    description: 'Installs a TYPO3 extension including its dependencies'
)]
#[AsNonSchedulableCommand]
final class InstallExtensionCommand extends Command
{
    public function __construct(
        private readonly InstallUtility $installUtility,
        private readonly ExtensionManagementService $extensionManagementService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument(
            'extensionKey',
            InputArgument::REQUIRED,
            'Extension key to install'
        );
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $io = new SymfonyStyle($input, $output);
        $extensionKey = (string)$input->getArgument('extensionKey');

        Bootstrap::initializeBackendAuthentication();

        $this->installUtility->reloadAvailableExtensions();

        $extension = Extension::createFromExtensionArray(
            $this->installUtility->enrichExtensionWithDetails(
                $extensionKey,
                false
            )
        );

        $result = $this->extensionManagementService
            ->installExtension($extension);

        if ($result === false) {
            $io->error(
                'Could not install extension "' . $extensionKey . '".'
            );

            foreach (
                $this->extensionManagementService->getDependencyErrors() as $errors
            ) {
                foreach ($errors as $error) {
                    $io->writeln(
                        '<error>' . $error['message'] . '</error>'
                    );
                }
            }

            return Command::FAILURE;
        }

        $io->success(
            'Extension "' . $extensionKey . '" successfully installed.'
        );

        return Command::SUCCESS;
    }
}
