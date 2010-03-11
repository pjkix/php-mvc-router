<?php
// set inc path
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . dirname(__FILE__) );
chdir (dirname(__FILE__));

require_once('helpers/utility.php');
require_once('helpers/router.php');
require_once('config/config.php');
require_once('controllers/controller.php');
require_once('config/routes.php');



mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

session_start();
