<?php 
require_once '../include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

// 2. Unset all the session variables
unset( $_SESSION['ProfID'] );
unset( $_SESSION['name'] );
unset( $_SESSION['ProfUsername'] );
unset( $_SESSION['password'] );
unset( $_SESSION['email'] );
// unset($_SESSION['fixnmix_cart']);
// unset($_SESSION['fixnmix_carttwo']);
// unset($_SESSION['FIRSTNAME']);
// unset($_SESSION['LASTNAME']);
// unset($_SESSION['ADDRESS']);
// unset($_SESSION['CONTACTNUMBER']);
 	
// 4. Destroy the session
// session_destroy();
redirect(web_root."prof1/login.php?logout=1");
?>