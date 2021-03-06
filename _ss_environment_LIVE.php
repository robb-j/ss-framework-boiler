<?php

define('SS_DATABASE_SERVER', 'w.x.y.z');
define('SS_DATABASE_USERNAME', 'USERNAME');
define('SS_DATABASE_PASSWORD', 'PASSWORD');
define('SS_DATABASE_NAME', 'DB_NAME');
define('SS_DATABASE_CHOOSE_NAME', 2);

define('SS_ENVIRONMENT_TYPE', 'live');
define('SS_ERROR_LOG', '/silverstripe.log');

//define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
//define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

ini_set('display_errors', 1);

//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']))."/public_html/silverstripe-cache/session");

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/var/www/'] = 'http://myfancysite.com';

if (defined('SS_ENVIRONMENT_TYPE') && SS_ENVIRONMENT_TYPE != 'live') {
    // turn on display_errors if we are in dev
    // NOTE: no need for setting error_reporting, this is done by SilverStripe
    ini_set('display_errors', 1);
}
