<?php
require_once("../../../include/initialize.php");
if(!isset($_SESSION['USERID'])&& $_SESSION['type'] == "PROF"){
	redirect(web_root."prof1/index.php");
}
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$header=$view;
$title="Autonumber";
switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;

	default :
		$content    = 'list.php';		
}
require_once("../../navigation/navigations.php");
?>
  
