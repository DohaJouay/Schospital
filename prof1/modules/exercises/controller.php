<?php
require_once ("../../../include/initialize.php");
	 if (!isset($_SESSION['ProfID'])){
      redirect(web_root."prof1/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'add1' :
		doInsert1();
		break;
	

	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break; 

	case 'updatefiles' :
	doInsert();
	break;

	}
   
	function doInsert(){

		global $mydb;

		if(isset($_POST['save'])){
 
			$chapter = $_SESSION['Matière'];
			$title  = $_POST['LessonTitle'];
			$category = $_POST['Category'];
			$niveau = $_POST['Niveau'];
			$classe = $_POST['Classe'];
			$profid = $_SESSION['ProfID'];
			$filename = UploadImage();
			$location = "files/". $filename ;

			$exercise = new Exercise();
			$exercise->LessonChapter = $chapter;
			$exercise->LessonTitle   = $title;
			$exercise->FileLocation  = $location;
			$exercise->Category  = $category;
			$exercise->Niveau  = $niveau;
			$exercise->Classe  = $classe;
			$exercise->ProfID  = $profid;
			$exercise->create(); 

			}


			message("New Exercise created successfully!", "success");
			redirect("index.php");
		 
		}

		function doInsert1(){

			global $mydb;
	
			if(isset($_POST['save'])){
	 
				$chapter = $_SESSION['Matière'];
				$title  = $_POST['LessonTitle'];
				$category = $_POST['Category'];
				$niveau = $_POST['Niveau'];
				$classe = $_POST['Classe'];
				$profid = $_SESSION['ProfID'];
				$filename = UploadImage();
				$location = "files/". $filename ;
			
				$exercise = new Correction();
				$IDNO = $_SESSION['ProfID'];
				
				$exercise->LessonChapter = $chapter;
				$exercise->LessonTitle   = $title;
				$exercise->FileLocation  = $location;
				$exercise->Category  = $category;
				$exercise->Niveau  = $niveau;
				$exercise->Classe  = $classe;
				$exercise->ProfID  = $profid;
				$sql="SELECT * from tblexercise where ProfID ='$IDNO' and StudentID != 0";
				$mydb->setQuery($sql);
				$cur=$mydb->loadResultList();
				foreach($cur as $res){
				$exercise->StudentID  = $res->StudentID;} 
				$exercise->create();
				}
				message("Correction déposée avec succès!");
				redirect("index.php");
			 
			}

	

	function doEdit(){
		global $mydb;
	if(isset($_POST['save'])){
			$id = $_POST['ExerciseID'];


			$exercise = New Exercise();   
			$exercise->LessonID 			= $_POST['Lesson']; 
			$exercise->Question				= $_POST['Question']; 
			$exercise->Answer				= $_POST['Answer'];
			$exercise->ChoiceA 				= $_POST['ChoiceA'];
			$exercise->ChoiceB				= $_POST['ChoiceB']; 
			$exercise->ChoiceC				= $_POST['ChoiceC']; 
			$exercise->ChoiceD				= $_POST['ChoiceD']; 
			$exercise->update($id); 

			$sql = "UPDATE tblstudentquestion SET   `LessonID`='".$_POST['LESSON']."', `Question`='".$_POST['Question']."', `CA`='".$_POST['ChoiceA']."', `CB`='".$_POST['ChoiceB']."', `CC`='".$_POST['ChoiceC']."', `CD`='".$_POST['ChoiceD']."', `QA`='".$_POST['Answer']." WHERE ExerciseID='{$id}'";
			$mydb->setQuery($sql);
			$mydb->executeQuery();


			message("Exercise has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		global $mydb;
		
				$id = 	$_GET['id'];

				$exercise = New Exercise();
	 		 	$exercise->delete($id);

				$sql = "DELETE FROM tblstudentquestion  WHERE ExerciseID='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();
			 
			message("Exercise already Deleted!","info");
			redirect('index.php');
	 
		
	}
	function UploadImage(){
		$target_dir = "files/";
		$target_file = $target_dir  . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		
		if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
			|| $imageFileType != "gif" || $imageFileType != "docs" || $imageFileType != "mp4") {
			 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				return   basename($_FILES["file"]["name"]);
			}else{
				echo "Error Uploading File";
				exit;
			}
		}else{
				echo "File Not Supported";
				exit;
 }
}
?>