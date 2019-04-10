<?php
return array (
  'typo3/cms-backend/site-resolver' => 'TYPO3\\CMS\\Backend\\Middleware\\SiteResolver',
  'typo3/cms-backend/response-headers' => 'TYPO3\\CMS\\Backend\\Middleware\\AdditionalResponseHeaders',
  'typo3/cms-backend/output-compression' => 'TYPO3\\CMS\\Backend\\Middleware\\OutputCompression',
  'typo3/cms-backend/legacy-document-template' => 'TYPO3\\CMS\\Backend\\Middleware\\LegacyBackendTemplateInitialization',
  'typo3/cms-backend/authentication' => 'TYPO3\\CMS\\Backend\\Middleware\\BackendUserAuthenticator',
  'typo3/cms-backend/backend-routing' => 'TYPO3\\CMS\\Backend\\Middleware\\BackendRouteInitialization',
  'typo3/cms-backend/https-redirector' => 'TYPO3\\CMS\\Backend\\Middleware\\ForcedHttpsBackendRedirector',
  'typo3/cms-backend/locked-backend' => 'TYPO3\\CMS\\Backend\\Middleware\\LockedBackendGuard',
  'typo3/cms-core/normalized-params-attribute' => 'TYPO3\\CMS\\Core\\Middleware\\NormalizedParamsAttribute',
);
#