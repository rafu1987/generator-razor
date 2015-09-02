<?php

// Config
$confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['razor']);

if ($_SERVER['SERVER_NAME'] == trim($confArr['basedomain_local']) || getenv('APP_ENV') == 'local') {
	$GLOBALS['TYPO3_CONF_VARS'] = array(
		'MAIL' => array(
			'transport' => '###TRANSPORT###',
			'transport_smtp_password' => '###SMTP_PASS###',
			'transport_smtp_server' => '###SMTP_SERVER###',
			'transport_smtp_username' => '###SMTP_USER###'
		)
	);
}