<?php
return array (
  'ajax_core_requirejs' => 
  array (
    'path' => '/ajax/core/requirejs',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\RequireJsController::retrieveConfiguration',
    'ajax' => true,
  ),
  'file_edit' => 
  array (
    'path' => '/file/editcontent',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\EditFileController::mainAction',
  ),
  'file_newfolder' => 
  array (
    'path' => '/file/new',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\CreateFolderController::mainAction',
  ),
  'file_rename' => 
  array (
    'path' => '/file/rename',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\RenameFileController::mainAction',
  ),
  'file_replace' => 
  array (
    'path' => '/file/replace',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\ReplaceFileController::mainAction',
  ),
  'file_upload' => 
  array (
    'path' => '/file/upload',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\FileUploadController::mainAction',
  ),
  'xMOD_tximpexp' => 
  array (
    'path' => '/record/importexport/',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ImportExportController::mainAction',
  ),
  'tx_impexp_export' => 
  array (
    'path' => '/record/importexport/export',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ExportController::mainAction',
  ),
  'tx_impexp_import' => 
  array (
    'path' => '/record/importexport/import',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ImportController::mainAction',
  ),
  'wizard_element_browser' => 
  array (
    'path' => '/wizard/record/browse',
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\ElementBrowserController::mainAction',
  ),
  'ajax_web_list_clearpagecache' => 
  array (
    'path' => '/ajax/web/list/clearpagecache',
    'target' => 'TYPO3\\CMS\\Recordlist\\Controller\\ClearPageCacheController::mainAction',
    'ajax' => true,
  ),
  'login' => 
  array (
    'path' => '/login',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::formAction',
  ),
  'main' => 
  array (
    'path' => '/main',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::mainAction',
  ),
  'logout' => 
  array (
    'path' => '/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LogoutController::logoutAction',
  ),
  'password_forget' => 
  array (
    'path' => '/login/password-reset/forget',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::forgetPasswordFormAction',
  ),
  'password_forget_initiate_reset' => 
  array (
    'path' => '/login/password-reset/initiate-reset',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::initiatePasswordResetAction',
  ),
  'password_reset_validate' => 
  array (
    'path' => '/login/password-reset/validate',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::passwordResetAction',
  ),
  'password_reset_finish' => 
  array (
    'path' => '/login/password-reset/finish',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::passwordResetFinishAction',
  ),
  'login_frameset' => 
  array (
    'path' => '/login/frame',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::refreshAction',
  ),
  'wizard_table' => 
  array (
    'path' => '/wizard/table',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\TableController::mainAction',
  ),
  'wizard_add' => 
  array (
    'path' => '/wizard/add',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AddController::mainAction',
  ),
  'wizard_list' => 
  array (
    'path' => '/wizard/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ListController::mainAction',
  ),
  'wizard_edit' => 
  array (
    'path' => '/wizard/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\EditController::mainAction',
  ),
  'wizard_link' => 
  array (
    'path' => '/wizard/link/browse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::mainAction',
  ),
  'file_navframe' => 
  array (
    'path' => '/folder/tree',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileSystemNavigationFrameController::mainAction',
  ),
  'online_media' => 
  array (
    'path' => '/online-media',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::mainAction',
  ),
  'record_history' => 
  array (
    'path' => '/record/history',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementHistoryController::mainAction',
  ),
  'db_new' => 
  array (
    'path' => '/record/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController::mainAction',
  ),
  'pages_sort' => 
  array (
    'path' => '/pages/sort',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\SortSubPagesController::mainAction',
  ),
  'pages_new' => 
  array (
    'path' => '/pages/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\NewMultiplePagesController::mainAction',
  ),
  'new_content_element' => 
  array (
    'path' => '/record/content/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController::mainAction',
  ),
  'new_content_element_wizard' => 
  array (
    'path' => '/record/content/wizard/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController::wizardAction',
  ),
  'move_element' => 
  array (
    'path' => '/record/move',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\MoveElementController::mainAction',
  ),
  'show_item' => 
  array (
    'path' => '/record/info',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementInformationController::mainAction',
  ),
  'dummy' => 
  array (
    'path' => '/empty',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\DummyController::mainAction',
  ),
  'tce_db' => 
  array (
    'path' => '/record/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::mainAction',
  ),
  'tce_file' => 
  array (
    'path' => '/file/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::mainAction',
  ),
  'record_edit' => 
  array (
    'path' => '/record/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\EditDocumentController::mainAction',
  ),
  'thumbnails' => 
  array (
    'path' => '/thumbnails',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\ThumbnailController::render',
  ),
  'ajax_sc_alt_file_navframe_expandtoggle' => 
  array (
    'path' => '/ajax/folder/tree/expand',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileSystemNavigationFrameController::ajaxExpandCollapse',
    'ajax' => true,
  ),
  'ajax_file_process' => 
  array (
    'path' => '/ajax/file/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_file_exists' => 
  array (
    'path' => '/ajax/file/exists',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::fileExistsInFolderAction',
    'ajax' => true,
  ),
  'ajax_record_inline_details' => 
  array (
    'path' => '/ajax/record/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::detailsAction',
    'ajax' => true,
  ),
  'ajax_record_inline_create' => 
  array (
    'path' => '/ajax/record/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::createAction',
    'ajax' => true,
  ),
  'ajax_record_inline_synchronizelocalize' => 
  array (
    'path' => '/ajax/record/inline/synchronizelocalize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::synchronizeLocalizeAction',
    'ajax' => true,
  ),
  'ajax_record_inline_expandcollapse' => 
  array (
    'path' => '/ajax/record/inline/expandcollapse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::expandOrCollapseAction',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_create' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::newInlineChildAction',
    'ajax' => true,
  ),
  'ajax_record_slug_suggest' => 
  array (
    'path' => '/ajax/record/slug/suggest',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSlugAjaxController::suggestAction',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_details' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::openInlineChildAction',
    'ajax' => true,
  ),
  'ajax_record_flex_container_add' => 
  array (
    'path' => '/ajax/record/flex/containeradd',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFlexAjaxController::containerAdd',
    'ajax' => true,
  ),
  'ajax_record_suggest' => 
  array (
    'path' => '/ajax/wizard/suggest/search',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\SuggestWizardController::searchAction',
    'ajax' => true,
  ),
  'ajax_record_tree_data' => 
  array (
    'path' => '/ajax/record/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSelectTreeAjaxController::fetchDataAction',
    'ajax' => true,
  ),
  'ajax_page_tree_data' => 
  array (
    'path' => '/ajax/page/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchDataAction',
    'ajax' => true,
  ),
  'ajax_page_tree_configuration' => 
  array (
    'path' => '/ajax/page/tree/fetchConfiguration',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchConfigurationAction',
    'ajax' => true,
  ),
  'ajax_page_tree_set_temporary_mount_point' => 
  array (
    'path' => '/ajax/page/tree/setTemporaryMountPoint',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::setTemporaryMountPointAction',
    'ajax' => true,
  ),
  'ajax_shortcut_editform' => 
  array (
    'path' => '/ajax/shortcut/editform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::showEditFormAction',
    'ajax' => true,
  ),
  'ajax_shortcut_saveform' => 
  array (
    'path' => '/ajax/shortcut/saveform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::updateAction',
    'ajax' => true,
  ),
  'ajax_shortcut_list' => 
  array (
    'path' => '/ajax/shortcut/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::menuAction',
    'ajax' => true,
  ),
  'ajax_shortcut_remove' => 
  array (
    'path' => '/ajax/shortcut/remove',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::removeAction',
    'ajax' => true,
  ),
  'ajax_shortcut_create' => 
  array (
    'path' => '/ajax/shortcut/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::addAction',
    'ajax' => true,
  ),
  'ajax_systeminformation_render' => 
  array (
    'path' => '/ajax/system-information/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SystemInformationController::renderMenuAction',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'ajax' => true,
  ),
  'ajax_modulemenu' => 
  array (
    'path' => '/ajax/module-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getModuleMenu',
    'ajax' => true,
  ),
  'ajax_topbar' => 
  array (
    'path' => '/ajax/topbar',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getTopbar',
    'ajax' => true,
  ),
  'ajax_login' => 
  array (
    'path' => '/ajax/login',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::loginAction',
    'access' => 'public',
    'ajax' => true,
  ),
  'ajax_logout' => 
  array (
    'path' => '/ajax/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::logoutAction',
    'access' => 'public',
    'ajax' => true,
  ),
  'ajax_login_refresh' => 
  array (
    'path' => '/ajax/login/refresh',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::refreshAction',
    'ajax' => true,
  ),
  'ajax_login_timedout' => 
  array (
    'path' => '/ajax/login/timedout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::isTimedOutAction',
    'access' => 'public',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'ajax' => true,
  ),
  'ajax_flashmessages_render' => 
  array (
    'path' => '/ajax/flashmessages/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FlashMessageController::getQueuedFlashMessagesAction',
    'ajax' => true,
  ),
  'ajax_contextmenu' => 
  array (
    'path' => '/ajax/context-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::getContextMenuAction',
    'ajax' => true,
  ),
  'ajax_contextmenu_clipboard' => 
  array (
    'path' => '/ajax/context-menu/clipboard',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::clipboardAction',
    'ajax' => true,
  ),
  'ajax_record_process' => 
  array (
    'path' => '/ajax/record/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_usersettings_process' => 
  array (
    'path' => '/ajax/usersettings/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\UserSettingsController::processAjaxRequest',
    'ajax' => true,
  ),
  'ajax_wizard_image_manipulation' => 
  array (
    'path' => '/ajax/wizard/image-manipulation',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ImageManipulationController::getWizardContent',
    'ajax' => true,
  ),
  'ajax_livesearch' => 
  array (
    'path' => '/ajax/livesearch',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LiveSearchController::liveSearchAction',
    'ajax' => true,
  ),
  'ajax_online_media_create' => 
  array (
    'path' => '/ajax/online-media/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::createAction',
    'ajax' => true,
  ),
  'ajax_icons' => 
  array (
    'path' => '/ajax/icons',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getIcon',
    'ajax' => true,
  ),
  'ajax_icons_cache' => 
  array (
    'path' => '/ajax/icons/cache',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getCacheIdentifier',
    'ajax' => true,
  ),
  'ajax_link_browser_encodetypolink' => 
  array (
    'path' => '/ajax/link-browser/encode-typolink',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::encodeTypoLink',
    'ajax' => true,
  ),
  'ajax_page_languages' => 
  array (
    'path' => '/ajax/records/localize/get-languages',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getUsedLanguagesInPage',
    'ajax' => true,
  ),
  'ajax_records_localize_summary' => 
  array (
    'path' => '/ajax/records/localize/summary',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getRecordLocalizeSummary',
    'ajax' => true,
  ),
  'ajax_records_localize' => 
  array (
    'path' => '/ajax/records/localize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::localizeRecords',
    'ajax' => true,
  ),
  'ajax_context_help' => 
  array (
    'path' => '/ajax/context-help',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextHelpAjaxController::getHelpAction',
    'ajax' => true,
  ),
  'ajax_redirects_revert_correlation' => 
  array (
    'path' => '/ajax/redirects/revert/correlation',
    'target' => 'TYPO3\\CMS\\Redirects\\Controller\\RecordHistoryRollbackController::revertCorrelation',
    'ajax' => true,
  ),
  'rteckeditor_wizard_browse_links' => 
  array (
    'path' => '/rte/wizard/browselinks',
    'target' => 'TYPO3\\CMS\\RteCKEditor\\Controller\\BrowseLinksController::mainAction',
  ),
  'ajax_adminPanel_saveForm' => 
  array (
    'path' => '/ajax/adminpanel/form/save',
    'target' => 'TYPO3\\CMS\\Adminpanel\\Controller\\AjaxController::saveDataAction',
    'ajax' => true,
  ),
  'ajax_adminPanel_toggle' => 
  array (
    'path' => '/ajax/adminpanel/toggleActiveState',
    'target' => 'TYPO3\\CMS\\Adminpanel\\Controller\\AjaxController::toggleActiveState',
    'ajax' => true,
  ),
  'ajax_user_access_permissions' => 
  array (
    'path' => '/ajax/users/access/permissions',
    'target' => 'TYPO3\\CMS\\Beuser\\Controller\\PermissionAjaxController::dispatch',
    'ajax' => true,
  ),
  'dashboard' => 
  array (
    'path' => '/dashboard',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\DashboardController::handleRequest',
  ),
  'ajax_dashboard_get_widget_content' => 
  array (
    'path' => '/ajax/dashboard/widget/content',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController::getContent',
    'ajax' => true,
  ),
  'ajax_dashboard_save_widget_positions' => 
  array (
    'path' => '/ajax/dashboard/widget/positions/save',
    'target' => 'TYPO3\\CMS\\Dashboard\\Controller\\WidgetAjaxController::savePositions',
    'ajax' => true,
  ),
  'ajax_t3editor_tsref' => 
  array (
    'path' => '/ajax/t3editor/tsref',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\TypoScriptReferenceController::loadReference',
    'ajax' => true,
  ),
  'ajax_t3editor_codecompletion_loadtemplates' => 
  array (
    'path' => '/ajax/t3editor/codecompletion/load-templates',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\CodeCompletionController::loadCompletions',
    'ajax' => true,
  ),
);
#