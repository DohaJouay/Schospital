<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['ProfID'])){
	redirect(web_root."prof1/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) { 
	default :
		$content    = 'list.php';		
}
require_once("../../themes/templates.php");
?>
  
