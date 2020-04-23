<?php
/**
 * Compiled ext_tables.php cache file
 */

/**
 * Extension: core
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/core/ext_tables.php
 */



defined('TYPO3_MODE') or die();

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can define which tables are allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = [
    (string)\TYPO3\CMS\Core\Domain\Repository\PageRepository::DOKTYPE_BE_USER_SECTION => [
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Core\Domain\Repository\PageRepository::DOKTYPE_SYSFOLDER => [
        //  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
        // In CMS context it's NOT a viewable page. Can contain any element.
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Core\Domain\Repository\PageRepository::DOKTYPE_RECYCLER => [
        // Doktype 255 is a recycle-bin.
        'allowedTables' => '*'
    ],
    'default' => [
        'allowedTables' => 'pages,sys_category,sys_file_reference,sys_file_collection',
        'onlyAllowedTables' => false
    ],
];

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web.xlf',
        'name' => 'web',
        'iconIdentifier' => 'modulegroup-web'
    ]
);
// workaround to add web->list by default
$GLOBALS['TBE_MODULES']['web'] = 'list';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'site',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_site.xlf',
        'name' => 'site',
        'workspaces' => 'online',
        'iconIdentifier' => 'modulegroup-site',
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'file',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_file.xlf',
        'navigationFrameModule' => 'file_navframe',
        'name' => 'file',
        'workspaces' => 'online,custom',
        'iconIdentifier' => 'modulegroup-file'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'user',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_usertools.xlf',
        'name' => 'user',
        'iconIdentifier' => 'modulegroup-user'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_admintools.xlf',
        'name' => 'tools',
        'iconIdentifier' => 'modulegroup-tools'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'system',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_system.xlf',
        'name' => 'system',
        'iconIdentifier' => 'modulegroup-system'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    '',
    '',
    null,
    [
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_help.xlf',
        'name' => 'help',
        'iconIdentifier' => 'modulegroup-help'
    ]
);

// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'TYPO3/CMS/Backend/PageTree/PageTreeElement');

/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = [];

/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:core/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:core/Resources/Private/Language/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:core/Resources/Private/Language/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_reference', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilereference.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:core/Resources/Private/Language/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:core/Resources/Private/Language/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:core/Resources/Private/Language/locallang_csh_corebe.xlf');

/**
 * Extension: frontend
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/frontend/ext_tables.php
 */



defined('TYPO3_MODE') or die();

// Add allowed records to pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tt_content,sys_template,backend_layout');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:frontend/Resources/Private/Language/locallang_csh_weblayout.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:frontend/Resources/Private/Language/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:frontend/Resources/Private/Language/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:frontend/Resources/Private/Language/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:frontend/Resources/Private/Language/locallang_csh_ttcontent.xlf');

/**
 * Extension: filelist
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/filelist/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Filelist',
    'file',
    'list',
    '',
    [
        \TYPO3\CMS\Filelist\Controller\FileListController::class => 'index, search',
    ],
    [
        'access' => 'user,group',
        'workspaces' => 'online,custom',
        'icon' => 'EXT:filelist/Resources/Public/Icons/module-filelist.svg',
        'labels' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf'
    ]
);

/**
 * Extension: impexp
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/impexp/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/Resources/Private/Language/locallang_csh.xlf');

/**
 * Extension: form
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/form/ext_tables.php
 */



defined('TYPO3_MODE') or die();

// Register the backend module Web->Forms
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Form',
    'web',
    'formbuilder',
    '',
    [
        \TYPO3\CMS\Form\Controller\FormManagerController::class => 'index, show, create, duplicate, references, delete',
        \TYPO3\CMS\Form\Controller\FormEditorController::class => 'index, saveForm, renderFormPage, renderRenderableOptions',
    ],
    [
        'access' => 'user,group',
        'icon' => 'EXT:form/Resources/Public/Icons/module-form.svg',
        'labels' => 'LLL:EXT:form/Resources/Private/Language/locallang_module.xlf',
        'navigationComponentId' => '',
        'inheritNavigationComponentFromMainModule' => false
    ]
);

/**
 * Extension: install
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/install/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsmaintenance',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::maintenanceAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsmaintenance',
        'iconIdentifier' => 'module-install-maintenance',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallMaintenance.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolssettings',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::settingsAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolssettings',
        'iconIdentifier' => 'module-install-settings',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallSettings.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsupgrade',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::upgradeAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsupgrade',
        'iconIdentifier' => 'module-install-upgrade',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallUpgrade.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsenvironment',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::environmentAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsenvironment',
        'iconIdentifier' => 'module-install-environment',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallEnvironment.xlf'
    ]
);

/**
 * Extension: recordlist
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/recordlist/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'list',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Recordlist\Controller\RecordListController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_list',
        'icon' => 'EXT:recordlist/Resources/Public/Icons/module-list.svg',
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf'
    ]
);

/**
 * Extension: backend
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/backend/ext_tables.php
 */



defined('TYPO3_MODE') or die();

// Register as a skin
$GLOBALS['TBE_STYLES']['skins']['backend'] = [
    'name' => 'backend',
    'stylesheetDirectories' => [
        'css' => 'EXT:backend/Resources/Public/Css/'
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'layout',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\PageLayoutController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_layout',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'site',
    'configuration',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\SiteConfigurationController::class . '::handleRequest',
        'access' => 'admin',
        'name' => 'site_configuration',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-sites.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_module.xlf'
    ]
);

// "Sort sub pages" csh
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'pages_sort',
    'EXT:backend/Resources/Private/Language/locallang_pages_sort_csh.xlf'
);
// "Create multiple pages" csh
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'pages_new',
    'EXT:backend/Resources/Private/Language/locallang_pages_new_csh.xlf'
);

// Csh manual
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    'cshmanual',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\HelpController::class . '::handleRequest',
        'name' => 'help_cshmanual',
        'access' => 'user,group',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-cshmanual.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod_help_cshmanual.xlf',
    ]
);

/**
 * Extension: reports
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/reports/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'system',
    'reports',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Reports\Controller\ReportController::class . '::handleRequest',
        'access' => 'admin',
        'name' => 'system_reports',
        'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
        'labels' => 'LLL:EXT:reports/Resources/Private/Language/locallang.xlf'
    ]
);

/**
 * Extension: redirects
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/redirects/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'site',
    'redirects',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Redirects\Controller\ManagementController::class . '::handleRequest',
        'access' => 'group,user',
        'name' => 'site_redirects',
        'icon' => 'EXT:redirects/Resources/Public/Icons/Extension.svg',
        'labels' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf'
    ]
);

/**
 * Extension: setup
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/setup/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'user',
    'setup',
    'after:task',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '::mainAction',
        'access' => 'group,user',
        'name' => 'user_setup',
        'icon' => 'EXT:setup/Resources/Public/Icons/module-setup.svg',
        'labels' => 'LLL:EXT:setup/Resources/Private/Language/locallang_mod.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '_MOD_user_setup',
    'EXT:setup/Resources/Private/Language/locallang_csh_mod.xlf'
);

$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [
        'realName' => [
            'type' => 'text',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
            'table' => 'be_users',
            'csh' => 'beUser_realName',
            'max' => 80
        ],
        'email' => [
            'type' => 'email',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
            'table' => 'be_users',
            'csh' => 'beUser_email',
            'max' => 80
        ],
        'emailMeAtLogin' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
            'csh' => 'emailMeAtLogin'
        ],
        'password' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
            'table' => 'be_users',
            'csh' => 'newPassword',
        ],
        'password2' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
            'table' => 'be_users',
            'csh' => 'newPasswordAgain',
        ],
        'passwordCurrent' => [
            'type' => 'password',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordCurrent',
            'table' => 'be_users',
            'csh' => 'passwordCurrent',
        ],
        'avatar' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
            'type' => 'avatar',
            'table' => 'be_users',
            'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ],
        'lang' => [
            'type' => 'select',
            'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderLanguageSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
            'csh' => 'language'
        ],
        'startModule' => [
            'type' => 'select',
            'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderStartModuleSelect',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
            'csh' => 'startModule'
        ],
        'thumbnailsByDefault' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showThumbs',
            'csh' => 'showThumbs'
        ],
        'titleLen' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
            'csh' => 'maxTitleLen'
        ],
        'edit_RTE' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_RTE',
            'csh' => 'edit_RTE'
        ],
        'edit_docModuleUpload' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
            'csh' => 'edit_docModuleUpload'
        ],
        'showHiddenFilesAndFolders' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
            'csh' => 'showHiddenFilesAndFolders'
        ],
        'copyLevels' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
            'csh' => 'copyLevels'
        ],
        'recursiveDelete' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:recursiveDelete',
            'csh' => 'recursiveDelete'
        ],
        'resetConfiguration' => [
            'type' => 'button',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
            'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
            'csh' => 'reset',
            'confirm' => true,
            'confirmData' => [
                'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                'jsCodeAfterOk' => 'document.getElementById(\'setValuesToDefault\').value = 1; document.getElementById(\'SetupModuleController\').submit();'
            ]
        ],
        'resizeTextareas_Flexible' => [
            'type' => 'check',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resizeTextareas_Flexible',
            'csh' => 'resizeTextareas_Flexible'
        ],
        'resizeTextareas_MaxHeight' => [
            'type' => 'number',
            'class' => 'form-control-adapt',
            'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:flexibleTextareas_MaxHeight',
            'csh' => 'flexibleTextareas_MaxHeight'
        ],
    ],
    'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordHeader,passwordCurrent,password,password2,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,
            --div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,edit_RTE,resizeTextareas_Flexible,resizeTextareas_MaxHeight,titleLen,thumbnailsByDefault,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,recursiveDelete,resetConfiguration'
];

/**
 * Extension: about
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/about/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    'AboutAbout',
    'top',
    null,
    [
        'routeTarget' => \TYPO3\CMS\About\Controller\AboutController::class . '::indexAction',
        'access' => 'user,group',
        'name' => 'help_AboutAbout',
        'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
        'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf'
    ]
);

/**
 * Extension: belog
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/belog/ext_tables.php
 */



defined('TYPO3_MODE') or die();

// Module Web->Info->Log
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_info',
    \TYPO3\CMS\Belog\Module\BackendLogModuleBootstrap::class,
    null,
    'Log'
);

// Module Tools->Log
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Belog',
    'system',
    'log',
    '',
    [
        \TYPO3\CMS\Belog\Controller\BackendLogController::class => 'list,deleteMessage',
    ],
    [
        'access' => 'admin',
        'icon' => 'EXT:belog/Resources/Public/Icons/module-belog.svg',
        'labels' => 'LLL:EXT:belog/Resources/Private/Language/locallang_mod.xlf',
    ]
);

/**
 * Extension: beuser
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/beuser/ext_tables.php
 */



defined('TYPO3_MODE') or die();

// Module System > Backend Users
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Beuser',
    'system',
    'tx_Beuser',
    'top',
    [
        \TYPO3\CMS\Beuser\Controller\BackendUserController::class => 'index, show, addToCompareList, removeFromCompareList, removeAllFromCompareList, compare, online, terminateBackendUserSession, initiatePasswordReset',
        \TYPO3\CMS\Beuser\Controller\BackendUserGroupController::class => 'index, addToCompareList, removeFromCompareList, removeAllFromCompareList, compare'
    ],
    [
        'access' => 'admin',
        'icon' => 'EXT:beuser/Resources/Public/Icons/module-beuser.svg',
        'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod.xlf'
    ]
);

// Module System > Access
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Beuser',
    'system',
    'tx_Permission',
    'top',
    [
        \TYPO3\CMS\Beuser\Controller\PermissionController::class => 'index, edit, update'
    ],
    [
        'access' => 'admin',
        'icon' => 'EXT:beuser/Resources/Public/Icons/module-permission.svg',
        'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf',
        'navigationComponentId' => 'TYPO3/CMS/Backend/PageTree/PageTreeElement'
    ]
);

/**
 * Extension: dashboard
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/dashboard/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'dashboard',
    '',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Dashboard\Controller\DashboardController::class . '::handleRequest',
        'access' => 'user,group',
        'name' => 'dashboard',
        'icon' => 'EXT:dashboard/Resources/Public/Icons/Extension.svg',
        'navigationComponentId' => '',
        'inheritNavigationComponentFromMainModule' => false,
        'labels' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_mod.xlf',
        'standalone' => true
    ]
);

$GLOBALS['TBE_STYLES']['skins']['dashboard']['stylesheetDirectories']['modal'] = 'EXT:dashboard/Resources/Public/Css/Modal/';

/**
 * Extension: extensionmanager
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/extensionmanager/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Extensionmanager',
    'tools',
    'extensionmanager',
    '',
    [
        \TYPO3\CMS\Extensionmanager\Controller\ListController::class => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
        \TYPO3\CMS\Extensionmanager\Controller\ActionController::class => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,reloadExtensionData',
        \TYPO3\CMS\Extensionmanager\Controller\DownloadController::class => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
        \TYPO3\CMS\Extensionmanager\Controller\UpdateScriptController::class => 'show',
        \TYPO3\CMS\Extensionmanager\Controller\UpdateFromTerController::class => 'updateExtensionListFromTer',
        \TYPO3\CMS\Extensionmanager\Controller\UploadExtensionFileController::class => 'form,extract',
        \TYPO3\CMS\Extensionmanager\Controller\DistributionController::class => 'show'
    ],
    [
        'access' => 'systemMaintainer',
        'icon' => 'EXT:extensionmanager/Resources/Public/Icons/module-extensionmanager.svg',
        'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
    ]
);

/**
 * Extension: info
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/info/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'info',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Info\Controller\InfoModuleController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_info',
        'icon' => 'EXT:info/Resources/Public/Icons/module-info.svg',
        'labels' => 'LLL:EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info/Resources/Private/Language/locallang_csh_web_info.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_infotsconfig', 'EXT:info/Resources/Private/Language/locallang_csh_tsconfigInfo.xlf');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_info',
    \TYPO3\CMS\Info\Controller\PageInformationController::class,
    null,
    'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_page'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_info',
    \TYPO3\CMS\Info\Controller\TranslationStatusController::class,
    null,
    'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_lang'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_info',
    \TYPO3\CMS\Info\Controller\InfoPageTyposcriptConfigController::class,
    null,
    'LLL:EXT:info/Resources/Private/Language/InfoPageTsConfig.xlf:mod_pagetsconfig'
);

/**
 * Extension: lowlevel
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/lowlevel/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'system',
    'dbint',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Lowlevel\Controller\DatabaseIntegrityController::class . '::mainAction',
        'access' => 'admin',
        'name' => 'system_dbint',
        'workspaces' => 'online',
        'icon' => 'EXT:lowlevel/Resources/Public/Icons/module-dbint.svg',
        'labels' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'system',
    'config',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Lowlevel\Controller\ConfigurationController::class . '::mainAction',
        'access' => 'admin',
        'name' => 'system_config',
        'workspaces' => 'online',
        'icon' => 'EXT:lowlevel/Resources/Public/Icons/module-config.svg',
        'labels' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod_configuration.xlf'
    ]
);

/**
 * Extension: sys_note
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/sys_note/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');

/**
 * Extension: tstemplate
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/tstemplate/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'ts',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateModuleController::class . '::mainAction',
        'access' => 'admin',
        'name' => 'web_ts',
        'icon' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
        'labels' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateConstantEditorModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:constantEditor'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateInformationModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:infoModify'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateObjectBrowserModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:objectBrowser'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TemplateAnalyzerModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:templateAnalyzer'
);

/**
 * Extension: viewpage
 * File: /Applications/MAMP/htdocs/10test/typo3/sysext/viewpage/ext_tables.php
 */



defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'ViewpageView',
    'after:layout',
    null,
    [
        'routeTarget' => \TYPO3\CMS\Viewpage\Controller\ViewModuleController::class . '::showAction',
        'access' => 'user,group',
        'name' => 'web_ViewpageView',
        'icon' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.svg',
        'labels' => 'LLL:EXT:viewpage/Resources/Private/Language/locallang_mod.xlf',
    ]
);

#