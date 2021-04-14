<?php
// Show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// database hostname, you don't usually need to change this
define('db_host','localhost');
// database username
define('db_user','bsbanalytics');
// database password
define('db_pass','ZTihbWAebAMt');
// database name
define('db_name','bsbanalytics');
// database charset, change this only if utf8 is not supported by your language
define('db_charset','utf8');
// Email activation variables
// account activation required?
define('account_activation',true);
// Change "Your Company Name" and "yourdomain.com", do not remove the < and >
define('mail_from','Blood Sugar Blaster Analytics <admin@pconversions.com>');

// Add-ons config
define('csrf_protection',false);
define('brute_force_protection',false);

// MVC Config below
// Enable/disable cache, only enable the cache in production mode
define('cache_enabled',false);
define('cache_path', BASE_PATH . '/cache/');
?>
