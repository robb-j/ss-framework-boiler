<?php

define('SS_DATABASE_SERVER', '10.168.1.84');
define('SS_DATABASE_USERNAME', 'connecte11_silve');
define('SS_DATABASE_PASSWORD', 'VZAA44nlteQptyYO');
define('SS_DATABASE_NAME', 'connecte11_silver');
define('SS_DATABASE_CHOOSE_NAME', 2);

define('SS_ENVIRONMENT_TYPE', 'live');
define('SS_ERROR_LOG', '/silverstripe.log');

//define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
//define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

ini_set('display_errors', 1);

//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']))."/public_html/silverstripe-cache/session");

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/var/www/'] = 'http://connected.thalesapp.com';

if (defined('SS_ENVIRONMENT_TYPE') && SS_ENVIRONMENT_TYPE != 'live') {
    // turn on display_errors if we are in dev
    // NOTE: no need for setting error_reporting, this is done by SilverStripe
    ini_set('display_errors', 1);
}