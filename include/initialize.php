<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'e-learningsystem_0');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/config.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/function.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/session.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/accounts.php"); 
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/lessons.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/exercises.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/quizzes.php"); 
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/correction.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/prof.php");
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/autonumbers.php"); 
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/students.php"); 
//load the database connection
require_once("C:/xampp/htdocs/e-learningsystem_0/e-learningsystem/include/database.php");
?>
