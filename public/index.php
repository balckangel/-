<?php
header('Content-type:text/html;charset-utf-8');
ini_set('display_errors',1);
error_reporting(E_ALL);
define('APPLICATION_PATH', dirname(__FILE__).'/../');
$application = new Yaf_Application( APPLICATION_PATH. "/conf/application.ini");
$application->bootstrap()->run();

?>
