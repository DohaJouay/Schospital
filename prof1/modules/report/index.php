<?php
require_once("../../../include/initialize.php");
	if(!isset($_SESSION['ProfID'])){
	redirect(web_root."prof1/index.php");
}
 // if (!isset($_SESSION['justadmin_ID'])){
 // 	redirect(WEB_ROOT ."admin/login.php");
 // }
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	case 'search' :
		$content    = 'list.php';		
		break;
	// case 'list' :
	// 	$content    = 'list.php';		
	// 	break;	
			
	default :
		$content    = 'list.php';		
}
  // include '../modal.php';
require_once("../../navigation/navigations.php");
?>


  
