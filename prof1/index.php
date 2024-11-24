<?php 
require_once("../include/initialize.php");
 if (!isset($_SESSION['ProfID']) ){
  redirect(web_root."prof1/login.php");
 } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {  
	default :
	  $content    = 'home.php';
}
require_once("themes/templates.php");
?>