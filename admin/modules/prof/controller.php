<?php
require_once ("../../../include/initialize.php");
	 // if (!isset($_SESSION['TYPE'])=='Administrator'){
  //     redirect(web_root."index.php");
  //    }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'assign':
	doassignsubj();
	break;

	case 'delsubj':
	doDelsubj();
	break;
	case 'grade':
	savegrade();
	break;
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){

			$prof = New Prof();
			
			$prof->name 		      = $_POST['nom'];
			$prof->ProfUsername   = $_POST['ProfUsername'];
			$prof->email		  = $_POST['email'];
			$prof->password		  =sha1($_POST['password']);
			$prof->Matière		  = $_POST['Matière'];
			
			$prof->create();

		}

	}

	function doEdit(){
		global $mydb;
	if(isset($_POST['save'])){

			$prof = New Prof(); 
			$prof->name 		      = $_POST['nom'];
			$prof->ProfUsername   = $_POST['ProfUsername'];
			$prof->email		  = $_POST['email'];
			$prof->password		  =sha1($_POST['password']);
			$prof->Matière		  = $_POST['Matière'];
			$prof->update($_POST['ProfID']);

			 $sql = "SELECT * FROM `tblstudent` WHERE `ProfID`='".$_POST['ProfID']."'";
			 $mydb->setQuery($sql);
			 $mydb->executeQuery();


			  message("[". $_POST['nom'] ."] has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$prof = New prof();
		// 	$prof->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$prof = New Prof();
	 		 	$prof->delete($id);
			 
			message("prof already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}
?>