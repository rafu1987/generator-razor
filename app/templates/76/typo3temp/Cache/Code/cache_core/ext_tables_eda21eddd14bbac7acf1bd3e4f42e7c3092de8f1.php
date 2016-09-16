<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES;
global $_EXTKEY;

/**
 * Extension: core
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can set the icon and especially you can define which tables are
 * allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = [
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_LINK => [],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SHORTCUT => [],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => [
        'type' => 'web',
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_MOUNTPOINT => [],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SPACER => [
        'type' => 'sys'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => [
        //  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
        // In CMS context it's NOT a viewable page. Can contain any element.
        'type' => 'sys',
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => [
        // Doktype 255 is a recycle-bin.
        'type' => 'sys',
        'allowedTables' => '*'
    ],
    'default' => [
        'type' => 'web',
        'allowedTables' => 'pages',
        'onlyAllowedTables' => '0'
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_category,sys_file_reference,sys_file_collection');

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = [
    'web' => 'list',
    'file' => '',
    'user' => '',
    'tools' => '',
    'system' => '',
    'help' => '',
    '_configuration' => [
        'web' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web.xlf'
            ],
            'name' => 'web',
            'iconIdentifier' => 'module-web'
        ],
        'file' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_file.xlf'
            ],
            'navigationFrameModule' => 'file_navframe',
            'name' => 'file',
            'workspaces' => 'online,custom',
            'iconIdentifier' => 'module-file'
        ],
        'user' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_usertools.xlf'
            ],
            'name' => 'user',
            'iconIdentifier' => 'status-user-backend'
        ],
        'tools' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_admintools.xlf'
            ],
            'name' => 'tools',
            'iconIdentifier' => 'module-tools'
        ],
        'system' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_system.xlf'
            ],
            'name' => 'system',
            'iconIdentifier' => 'module-system'
        ],
        'help' => [
            'labels' => [
                'll_ref' => 'LLL:EXT:lang/locallang_mod_help.xlf'
            ],
            'name' => 'help',
            'iconIdentifier' => 'module-help'
        ]
    ]
];

// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'typo3-pagetree');

/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = [
    'skinImg' => []
];

/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:lang/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:lang/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:lang/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:lang/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:lang/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:lang/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:lang/locallang_csh_corebe.xlf');
// Web > Info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:lang/locallang_csh_web_info.xlf');
// Web > Func
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:lang/locallang_csh_web_func.xlf');

/**
 * Backend sprite icon-names
 */
$GLOBALS['TBE_STYLES']['spriteIconApi']['coreSpriteImageNames'] = [
    'actions-document-close',
    'actions-document-duplicates-select',
    'actions-document-edit-access',
    'actions-document-export-csv',
    'actions-document-export-t3d',
    'actions-document-history-open',
    'actions-document-import-t3d',
    'actions-document-info',
    'actions-document-localize',
    'actions-document-move',
    'actions-document-new',
    'actions-document-open',
    'actions-document-open-read-only',
    'actions-document-paste-after',
    'actions-document-paste-into',
    'actions-document-save',
    'actions-document-save-cleartranslationcache',
    'actions-document-save-close',
    'actions-document-save-new',
    'actions-document-save-translation',
    'actions-document-save-view',
    'actions-document-select',
    'actions-document-synchronize',
    'actions-document-view',
    'actions-edit-add',
    'actions-edit-copy',
    'actions-edit-copy-release',
    'actions-edit-cut',
    'actions-edit-cut-release',
    'actions-edit-delete',
    'actions-edit-download',
    'actions-edit-hide',
    'actions-edit-insert-default',
    'actions-edit-localize-status-high',
    'actions-edit-localize-status-low',
    'actions-edit-merge-localization',
    'actions-edit-pick-date',
    'actions-edit-rename',
    'actions-edit-replace',
    'actions-edit-restore',
    'actions-edit-undelete-edit',
    'actions-edit-undo',
    'actions-edit-unhide',
    'actions-edit-upload',
    'actions-input-clear',
    'actions-insert-record',
    'actions-insert-reference',
    'actions-markstate',
    'actions-message-error-close',
    'actions-message-information-close',
    'actions-message-notice-close',
    'actions-message-ok-close',
    'actions-message-warning-close',
    'actions-move-down',
    'actions-move-left',
    'actions-move-move',
    'actions-move-right',
    'actions-move-to-bottom',
    'actions-move-to-top',
    'actions-move-up',
    'actions-page-move',
    'actions-page-new',
    'actions-page-open',
    'actions-selection-delete',
    'actions-system-backend-user-emulate',
    'actions-system-backend-user-switch',
    'actions-system-cache-clear',
    'actions-system-cache-clear-impact-high',
    'actions-system-cache-clear-impact-low',
    'actions-system-cache-clear-impact-medium',
    'actions-system-cache-clear-rte',
    'actions-system-extension-configure',
    'actions-system-extension-documentation',
    'actions-system-extension-download',
    'actions-system-extension-import',
    'actions-system-extension-install',
    'actions-system-extension-sqldump',
    'actions-system-extension-uninstall',
    'actions-system-extension-update',
    'actions-system-extension-update-disabled',
    'actions-system-help-open',
    'actions-system-list-open',
    'actions-system-options-view',
    'actions-system-pagemodule-open',
    'actions-system-refresh',
    'actions-system-shortcut-new',
    'actions-system-tree-search-open',
    'actions-system-typoscript-documentation',
    'actions-system-typoscript-documentation-open',
    'actions-template-new',
    'actions-unmarkstate',
    'actions-version-document-remove',
    'actions-version-page-open',
    'actions-version-swap-version',
    'actions-version-swap-workspace',
    'actions-version-workspace-preview',
    'actions-version-workspace-sendtostage',
    'actions-view-go-back',
    'actions-view-go-down',
    'actions-view-go-forward',
    'actions-view-go-up',
    'actions-view-list-collapse',
    'actions-view-list-expand',
    'actions-view-paging-first',
    'actions-view-paging-first-disabled',
    'actions-view-paging-last',
    'actions-view-paging-last-disabled',
    'actions-view-paging-next',
    'actions-view-paging-next-disabled',
    'actions-view-paging-previous',
    'actions-view-paging-previous-disabled',
    'actions-view-table-collapse',
    'actions-view-table-expand',
    'actions-window-open',
    'apps-clipboard-images',
    'apps-clipboard-list',
    'apps-filetree-folder-add',
    'apps-filetree-folder-default',
    'apps-filetree-folder-list',
    'apps-filetree-folder-locked',
    'apps-filetree-folder-media',
    'apps-filetree-folder-news',
    'apps-filetree-folder-opened',
    'apps-filetree-folder-recycler',
    'apps-filetree-folder-temp',
    'apps-filetree-folder-user',
    'apps-filetree-mount',
    'apps-filetree-root',
    'apps-irre-collapsed',
    'apps-irre-expanded',
    'apps-pagetree-backend-user',
    'apps-pagetree-backend-user-hideinmenu',
    'apps-pagetree-collapse',
    'apps-pagetree-drag-copy-above',
    'apps-pagetree-drag-copy-below',
    'apps-pagetree-drag-move-above',
    'apps-pagetree-drag-move-below',
    'apps-pagetree-drag-move-between',
    'apps-pagetree-drag-move-into',
    'apps-pagetree-drag-new-between',
    'apps-pagetree-drag-new-inside',
    'apps-pagetree-drag-place-denied',
    'apps-pagetree-expand',
    'apps-pagetree-folder-contains-approve',
    'apps-pagetree-folder-contains-board',
    'apps-pagetree-folder-contains-fe_users',
    'apps-pagetree-folder-contains-news',
    'apps-pagetree-folder-contains-shop',
    'apps-pagetree-folder-default',
    'apps-pagetree-page-advanced',
    'apps-pagetree-page-advanced-hideinmenu',
    'apps-pagetree-page-advanced-root',
    'apps-pagetree-page-backend-users',
    'apps-pagetree-page-backend-users-hideinmenu',
    'apps-pagetree-page-backend-users-root',
    'apps-pagetree-page-content-from-page',
    'apps-pagetree-page-content-from-page-root',
    'apps-pagetree-page-content-from-page-hideinmenu',
    'apps-pagetree-page-default',
    'apps-pagetree-page-domain',
    'apps-pagetree-page-frontend-user',
    'apps-pagetree-page-frontend-user-hideinmenu',
    'apps-pagetree-page-frontend-user-root',
    'apps-pagetree-page-frontend-users',
    'apps-pagetree-page-frontend-users-hideinmenu',
    'apps-pagetree-page-frontend-users-root',
    'apps-pagetree-page-mountpoint',
    'apps-pagetree-page-mountpoint-hideinmenu',
    'apps-pagetree-page-mountpoint-root',
    'apps-pagetree-page-no-icon-found',
    'apps-pagetree-page-no-icon-found-hideinmenu',
    'apps-pagetree-page-no-icon-found-root',
    'apps-pagetree-page-not-in-menu',
    'apps-pagetree-page-recycler',
    'apps-pagetree-page-shortcut',
    'apps-pagetree-page-shortcut-external',
    'apps-pagetree-page-shortcut-external-hideinmenu',
    'apps-pagetree-page-shortcut-external-root',
    'apps-pagetree-page-shortcut-hideinmenu',
    'apps-pagetree-page-shortcut-root',
    'apps-pagetree-root',
    'apps-pagetree-spacer',
    'apps-tcatree-select-recursive',
    'apps-toolbar-menu-actions',
    'apps-toolbar-menu-cache',
    'apps-toolbar-menu-opendocs',
    'apps-toolbar-menu-search',
    'apps-toolbar-menu-shortcut',
    'apps-toolbar-menu-workspace',
    'mimetypes-compressed',
    'mimetypes-excel',
    'mimetypes-media-audio',
    'mimetypes-media-flash',
    'mimetypes-media-image',
    'mimetypes-media-video',
    'mimetypes-other-other',
    'mimetypes-pdf',
    'mimetypes-powerpoint',
    'mimetypes-text-css',
    'mimetypes-text-csv',
    'mimetypes-text-html',
    'mimetypes-text-js',
    'mimetypes-text-php',
    'mimetypes-text-text',
    'mimetypes-word',
    'mimetypes-x-content-divider',
    'mimetypes-x-content-domain',
    'mimetypes-x-content-form',
    'mimetypes-x-content-form-search',
    'mimetypes-x-content-header',
    'mimetypes-x-content-html',
    'mimetypes-x-content-image',
    'mimetypes-x-content-link',
    'mimetypes-x-content-list-bullets',
    'mimetypes-x-content-list-files',
    'mimetypes-x-content-login',
    'mimetypes-x-content-menu',
    'mimetypes-x-content-multimedia',
    'mimetypes-x-content-page-language-overlay',
    'mimetypes-x-content-plugin',
    'mimetypes-x-content-script',
    'mimetypes-x-content-table',
    'mimetypes-x-content-template',
    'mimetypes-x-content-template-extension',
    'mimetypes-x-content-template-static',
    'mimetypes-x-content-text',
    'mimetypes-x-content-text-picture',
    'mimetypes-x-content-text-media',
    'mimetypes-x-sys_action',
    'mimetypes-x-sys_category',
    'mimetypes-x-sys_language',
    'mimetypes-x-sys_news',
    'mimetypes-x-sys_workspace',
    'mimetypes-x_belayout',
    'status-dialog-error',
    'status-dialog-information',
    'status-dialog-notification',
    'status-dialog-ok',
    'status-dialog-warning',
    'status-overlay-access-restricted',
    'status-overlay-deleted',
    'status-overlay-hidden',
    'status-overlay-icon-missing',
    'status-overlay-includes-subpages',
    'status-overlay-locked',
    'status-overlay-scheduled',
    'status-overlay-scheduled-future-end',
    'status-overlay-translated',
    'status-status-checked',
    'status-status-current',
    'status-status-edit-read-only',
    'status-status-icon-missing',
    'status-status-locked',
    'status-status-permission-denied',
    'status-status-permission-granted',
    'status-status-readonly',
    'status-status-reference-hard',
    'status-status-reference-soft',
    'status-status-sorting-asc',
    'status-status-sorting-desc',
    'status-status-sorting-light-asc',
    'status-status-sorting-light-desc',
    'status-status-workspace-draft',
    'status-system-extension-required',
    'status-user-admin',
    'status-user-backend',
    'status-user-frontend',
    'status-user-group-backend',
    'status-user-group-frontend',
    'status-warning-in-use',
    'status-warning-lock',
    'module-web',
    'module-file',
    'module-system',
    'module-tools',
    'module-user',
    'module-help'
];

$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayPriorities'] = [
    'deleted',
    'hidden',
    'starttime',
    'endtime',
    'futureendtime',
    'fe_group',
    'protectedSection'
];

$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayNames'] = [
    'hidden' => 'status-overlay-hidden',
    'fe_group' => 'status-overlay-access-restricted',
    'starttime' => 'status-overlay-scheduled',
    'endtime' => 'status-overlay-scheduled',
    'futureendtime' => 'status-overlay-scheduled-future-end',
    'readonly' => 'status-overlay-locked',
    'deleted' => 'status-overlay-deleted',
    'missing' => 'status-overlay-missing',
    'translated' => 'status-overlay-translated',
    'protectedSection' => 'status-overlay-includes-subpages'
];

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extbase
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['extbase'][] = \TYPO3\CMS\Extbase\Utility\ExtbaseRequirementsCheckUtility::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extbase\Scheduler\Task::class] = [
    'extension' => 'extbase',
    'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.name',
    'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.description',
    'additionalFields' => \TYPO3\CMS\Extbase\Scheduler\FieldProvider::class
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = \TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue::class;

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: fluid
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/fluid/ext_tables.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid: (Optional) default ajax configuration');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extensionmanager
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Extensionmanager',
        'tools',
        'extensionmanager', '', [
            'List' => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
            'Action' => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,downloadExtensionData',
            'Configuration' => 'showConfigurationForm,save,saveAndClose',
            'Download' => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
            'UpdateScript' => 'show',
            'UpdateFromTer' => 'updateExtensionListFromTer',
            'UploadExtensionFile' => 'form,extract',
            'Distribution' => 'show'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:extensionmanager/Resources/Public/Icons/module-extensionmanager.svg',
            'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
        ]
    );

    // Register extension status report system
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
        \TYPO3\CMS\Extensionmanager\Report\ExtensionStatus::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lang
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

    // Register the backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Lang',
        'tools',
        'language',
        'after:extensionmanager',
        [
            'Language' => 'listLanguages, listTranslations, getTranslations, updateLanguage, updateTranslation, activateLanguage, deactivateLanguage',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:lang/Resources/Public/Icons/module-lang.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: saltedpasswords
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/saltedpasswords/ext_tables.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add context sensitive help (csh) for scheduler task
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_txsaltedpasswords', 'EXT:saltedpasswords/Resources/Private/Language/locallang_csh_saltedpasswords.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: backend
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/backend/ext_tables.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'layout',
        'top',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Backend\Controller\PageLayoutController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_layout',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
                ],
                'll_ref' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf',
            ],
        ]
    );

    // Register BackendLayoutDataProvider for PageTs
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = \TYPO3\CMS\Backend\Provider\PageTsBackendLayoutDataProvider::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: filelist
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Filelist',
        'file',
        'list',
        '',
        [
            'FileList' => 'index, search',
        ],
        [
            'access' => 'user,group',
            'workspaces' => 'online,custom',
            'icon' => 'EXT:filelist/Resources/Public/Icons/module-filelist.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_file_list.xlf'
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: frontend
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/frontend/ext_tables.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add allowed records to pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:frontend/Resources/Private/Language/locallang_csh_weblayout.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:frontend/Resources/Private/Language/locallang_csh_webinfo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\PageInformationController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_page'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\TranslationStatusController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_lang'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: install
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register report module additions
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Install\Report\InstallStatusReport::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Install\Report\SecurityStatusReport::class;

    // Only add the environment status report if not in CLI mode
    if (!defined('TYPO3_cliMode') || !TYPO3_cliMode) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Install\Report\EnvironmentStatusReport::class;
    }

    // Register backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Install',
        'system',
        'install', '', [
            'BackendModule' => 'index, showEnableInstallToolButton, enableInstallTool',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:install/Resources/Public/Icons/module-install.svg',
            'labels' => 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf',
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: recordlist
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'list',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Recordlist\RecordList::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_list',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:recordlist/Resources/Public/Icons/module-list.svg',
                ],
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_list.xlf',
            ],
        ]
    );

    // register element browsers
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['db'] =  \TYPO3\CMS\Recordlist\Browser\DatabaseBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file'] =  \TYPO3\CMS\Recordlist\Browser\FileBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['folder'] =  \TYPO3\CMS\Recordlist\Browser\FolderBrowser::class;

    // register default link handlers
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
		TCEMAIN.linkHandler {
			page {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:page
			}
			file {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:file
				displayAfter = page
				scanAfter = page
			}
			folder {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:folder
				displayAfter = file
				scanAfter = file
			}
			url {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:extUrl
				displayAfter = folder
				scanAfter = mail
			}
			mail {
				handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
				label = LLL:EXT:lang/locallang_browse_links.xlf:email
				displayAfter = url
			}
		}
	');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sv
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = [
        'title' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_title',
        'description' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_description',
        'icon' => 'EXT:sv/Resources/Public/Images/service-reports.png',
        'report' => \TYPO3\CMS\Sv\Report\ServicesListReport::class
    ];
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3skin
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/t3skin/ext_tables.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' || TYPO3_MODE === 'FE' && isset($GLOBALS['BE_USER'])) {

    // Register as a skin
    $GLOBALS['TBE_STYLES']['skins']['t3skin'] = [
        'name' => 't3skin',
        'stylesheetDirectories' => [
            'sprites' => 'EXT:t3skin/stylesheets/sprites/',
            'css' => 'EXT:t3skin/Resources/Public/Css/'
        ]
    ];

    // Setting up auto detection of alternative icons:
    $GLOBALS['TBE_STYLES']['skinImgAutoCfg'] = [
        'absDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('t3skin') . 'icons/',
        'relDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3skin') . 'icons/',
        'forceFileExtension' => 'gif',
        // Force to look for PNG alternatives...
        'iconSizeWidth' => 16,
        'iconSizeHeight' => 16
    ];

    // Changing icon for filemounts, needs to be done here as overwriting the original icon would also change the filelist tree's root icon
    $GLOBALS['TCA']['sys_filemounts']['ctrl']['iconfile'] = 'apps-filetree-mount';

    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][1][2] = 'status-user-frontend';

    // extJS theme
    $GLOBALS['TBE_STYLES']['extJS']['theme'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3skin') . 'extjs/xtheme-t3skin.css';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: documentation
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/documentation/ext_tables.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Registers a Backend Module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Documentation',
        'help',
        'documentation',
        'top',
        [
            'Document' => 'list, download, fetch',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:documentation/Resources/Public/Icons/module-documentation.svg',
            'labels' => 'LLL:EXT:documentation/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/info/ext_tables.php
 */

$_EXTKEY = 'info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'info',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Info\Controller\InfoModuleController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_info',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:info/Resources/Public/Icons/module-info.svg',
                ],
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_info.xlf',
            ],
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info_pagetsconfig
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\InfoPagetsconfig\Controller\InfoPageTyposcriptConfigController::class,
        null,
        'LLL:EXT:info_pagetsconfig/Resources/Private/Language/locallang.xlf:mod_pagetsconfig'
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/Resources/Private/Language/locallang_csh_webinfo.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: setup
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'user',
        'setup',
        'after:task',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '::mainAction',
            'access' => 'group,user',
            'name' => 'user_setup',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:setup/Resources/Public/Icons/module-setup.svg',
                ],
                'll_ref' => 'LLL:EXT:setup/Resources/Private/Language/locallang_mod.xlf',
            ],
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
                'csh' => 'beUser_realName'
            ],
            'email' => [
                'type' => 'email',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
                'table' => 'be_users',
                'csh' => 'beUser_email'
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
                'label' => 'LLL:EXT:lang/locallang_tca.xlf:be_users.avatar',
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
                'type' => 'text',
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
                'type' => 'text',
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
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:flexibleTextareas_MaxHeight',
                'csh' => 'flexibleTextareas_MaxHeight'
            ],
            'debugInWindow' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:debugInWindow',
                'access' => 'admin'
            ]
        ],
        'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xml:passwordHeader,passwordCurrent,password,password2,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,edit_RTE,resizeTextareas_Flexible,resizeTextareas_MaxHeight,titleLen,thumbnailsByDefault,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,recursiveDelete,resetConfiguration,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:adminFunctions,debugInWindow'
    ];
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: rtehtmlarea
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/rtehtmlarea/ext_tables.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add static template for Click-enlarge rendering
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('rtehtmlarea', 'static/clickenlarge/', 'Clickenlarge Rendering');

// Add Abbreviation records (as of 7.0 not working in Configuration/TCA/Overrides)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rtehtmlarea_acronym');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rtehtmlarea_acronym', 'EXT:rtehtmlarea/Resources/Private/Language/locallang_csh_abbreviation.xlf');

// Add contextual help files
$htmlAreaRteContextHelpFiles = [
    'General' => 'EXT:rtehtmlarea/Resources/Private/Language/locallang_csh.xlf',
    'Abbreviation' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/Abbreviation/locallang_csh.xlf',
    'EditElement' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/EditElement/locallang_csh.xlf',
    'Language' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/Language/locallang_csh.xlf',
    'MicrodataSchema' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/MicrodataSchema/locallang_csh.xlf',
    'PlainText' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_csh.xlf',
    'RemoveFormat' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/RemoveFormat/locallang_csh.xlf',
    'TableOperations' => 'EXT:rtehtmlarea/Resources/Private/Language/Plugins/TableOperations/locallang_csh.xlf'
];
foreach ($htmlAreaRteContextHelpFiles as $key => $file) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xEXT_rtehtmlarea_' . $key, $file);
}
unset($htmlAreaRteContextHelpFiles);

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['RteImageSelector']['hooks']['editImageHandler'] = [
        'handler' => \TYPO3\CMS\Rtehtmlarea\ImageHandler\EditImageHandler::class
    ];
}

// Extend TYPO3 User Settings Configuration
if (TYPO3_MODE === 'BE' && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('setup') && is_array($GLOBALS['TYPO3_USER_SETTINGS'])) {
    $GLOBALS['TYPO3_USER_SETTINGS']['columns'] = array_merge($GLOBALS['TYPO3_USER_SETTINGS']['columns'], [
        'rteWidth' => [
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteWidth',
            'csh' => 'xEXT_rtehtmlarea_General:rteWidth'
        ],
        'rteHeight' => [
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteHeight',
            'csh' => 'xEXT_rtehtmlarea_General:rteHeight'
        ],
        'rteResize' => [
            'type' => 'check',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteResize',
            'csh' => 'xEXT_rtehtmlarea_General:rteResize'
        ],
        'rteMaxHeight' => [
            'type' => 'text',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteMaxHeight',
            'csh' => 'xEXT_rtehtmlarea_General:rteMaxHeight'
        ],
        'rteCleanPasteBehaviour' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:rteCleanPasteBehaviour',
            'items' => [
                'plainText' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:plainText',
                'pasteStructure' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:pasteStructure',
                'pasteFormat' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/Plugins/PlainText/locallang_js.xlf:pasteFormat'
            ],
            'csh' => 'xEXT_rtehtmlarea_PlainText:behaviour'
        ]
    ]);
    $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',--div--;LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang.xlf:rteSettings,rteWidth,rteHeight,rteResize,rteMaxHeight,rteCleanPasteBehaviour';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'func',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Func\Controller\PageFunctionsController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_func',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:func/Resources/Public/Icons/module-func.svg',
                ],
                'll_ref' => 'LLL:EXT:lang/locallang_mod_web_func.xlf',
            ],
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_crpages
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardCrpages\Controller\CreatePagesWizardModuleFunctionController::class,
        null,
        'LLL:EXT:wizard_crpages/Resources/Private/Language/locallang.xlf:wiz_crMany'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_crpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_sortpages
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardSortpages\View\SortPagesWizardModuleFunction::class,
        null,
        'LLL:EXT:wizard_sortpages/Resources/Private/Language/locallang.xlf:wiz_sort'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_sortpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: about
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'about',
        'top',
        ['About' => 'index'],
        [
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf'
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: aboutmodules
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/aboutmodules/ext_tables.php
 */

$_EXTKEY = 'aboutmodules';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Aboutmodules',
        'help',
        'aboutmodules',
        'after:about',
        [
            'Modules' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:aboutmodules/Resources/Public/Icons/module-aboutmodules.svg',
            'labels' => 'LLL:EXT:aboutmodules/Resources/Private/Language/locallang_mod.xlf'
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: belog
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->Info->Log
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Belog\Module\BackendLogModuleBootstrap::class,
        null,
        'Log'
    );

    // Module Tools->Log
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Belog',
        'system',
        'log',
        '',
        [
            'Tools' => 'index',
            'WebInfo' => 'index',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:belog/Resources/Public/Icons/module-belog.svg',
            'labels' => 'LLL:EXT:belog/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: beuser
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Module System > Backend Users
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Beuser',
        'top',
        [
            'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession',
            'BackendUserGroup' => 'index'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-beuser.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod.xlf'
        ]
    );

    // Module System > Access
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Permission',
        'top',
        [
            'Permission' => 'index, edit, update'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-permission.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf',
            'navigationComponentId' => 'typo3-pagetree'
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: context_help
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/Resources/Private/Language/locallang_csh_pageslol.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_statictpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/Resources/Private/Language/locallang_csh_ttcontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_reference', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilereference.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cshmanual
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Cshmanual',
        'help',
        'cshmanual',
        'top',
        [
            'Help' => 'index,all,detail',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:cshmanual/Resources/Public/Icons/module-cshmanual.svg',
            'labels' => 'LLL:EXT:lang/locallang_mod_help_cshmanual.xlf',
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['cshmanual'] = \TYPO3\CMS\Cshmanual\Service\JavaScriptService::class . '->addJavaScript';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: form
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register static TypoScript resource
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('form', 'Configuration/TypoScript/', 'Default TS');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: impexp
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = [
        'name' => \TYPO3\CMS\Impexp\Clickmenu::class
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp']['TYPO3\\CMS\\Impexp\\Task\\ImportExportTask'] = [
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.alttitle',
        'description' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.description',
        'icon' => 'EXT:impexp/Resources/Public/Images/export.gif'
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/Resources/Private/Language/locallang_csh.xlf');
    // CSH labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:impexp/Resources/Private/Language/locallang_csh.xml'][] = 'EXT:impexp/Resources/Private/Language/locallang_csh_45.xlf';
    // Special context menu actions for the import/export module
    $importExportActions = '
		9000 = DIVIDER

		9100 = ITEM
		9100 {
			name = exportT3d
			label = LLL:EXT:impexp/Resources/Private/Language/locallang.xlf:export
			iconName = actions-document-export-t3d
			callbackAction = exportT3d
		}

		9200 = ITEM
		9200 {
			name = importT3d
			label = LLL:EXT:impexp/Resources/Private/Language/locallang.xlf:import
			iconName = actions-document-import-t3d
			callbackAction = importT3d
		}
	';
    // Context menu user default configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
		options.contextMenu.table {
			virtual_root.items {
				' . $importExportActions . '
			}

			pages_root.items {
				' . $importExportActions . '
			}

			pages.items.1000 {
				' . $importExportActions . '
			}
		}
	');
    // Hook into page tree context menu to remove "import" items again if user is not admin or module
    // is not enabled for this user / group
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['backend']['contextMenu']['disableItems'][]
        = \TYPO3\CMS\Impexp\Hook\ContextMenuDisableItemsHook::class . '->disableImportForNonAdmin';
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lowlevel
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'dbint',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\DatabaseIntegrityView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_dbint',
            'workspaces' => 'online',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:lowlevel/Resources/Public/Icons/module-dbint.svg',
                ],
                'll_ref' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod.xlf',
            ],
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'config',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\ConfigurationView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_config',
            'workspaces' => 'online',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:lowlevel/Resources/Public/Icons/module-config.svg',
                ],
                'll_ref' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod_configuration.xlf',
            ],
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: reports
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Reports',
        'system',
        'txreportsM1',
        '',
        [
            'Report' => 'index,detail'
        ], [
            'access' => 'admin',
            'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
            'labels' => 'LLL:EXT:reports/Resources/Private/Language/locallang.xlf'
        ]
    );
    $statusReport = [
        'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_title',
        'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
        'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_description',
        'report' => \TYPO3\CMS\Reports\Report\Status\Status::class
    ];
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = [];
    }
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'], $statusReport);
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Reports\Report\Status\Typo3Status::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Reports\Report\Status\SystemStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Reports\Report\Status\SecurityStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = \TYPO3\CMS\Reports\Report\Status\ConfigurationStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['fal'][] = \TYPO3\CMS\Reports\Report\Status\FalStatus::class;
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sys_note
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'ts',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateModuleController::class . '::mainAction',
            'access' => 'admin',
            'name' => 'web_ts',
            'labels' => [
                'tabs_images' => [
                    'tab' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
                ],
                'll_ref' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf',
            ],
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
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: viewpage
 * File: /Applications/AMPPS/www/7_test/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->View
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Viewpage',
        'web',
        'view',
        'after:layout',
        [
            'ViewModule' => 'show'
        ],
        [
            'icon' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.svg',
            'labels' => 'LLL:EXT:viewpage/Resources/Private/Language/locallang_mod.xlf',
            'access' => 'user,group'
        ]
    );
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

#