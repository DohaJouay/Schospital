<?php
require_once ("../../../include/initialize.php");

	if(!isset($_SESSION['ProfID'])){
	redirect(web_root."prof1/index.php");
}

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

	case 'updatefiles' :
	dochangefile();
	break;

	case 'noote' :
		submitnote();
		break;
	}
   
	function doInsert(){ 
		if(isset($_POST['save'])){ 

			$chapter = $_SESSION['Matière'];
			$title  = $_POST['LessonTitle'];
			$category = $_POST['Category'];
			$niveau = $_POST['Niveau'];
			$classe = $_POST['Classe'];
			$profid = $_SESSION['ProfID'];
			$filename = UploadImage();
			$location = "files/". $filename ;

			$quizz = new Quizz();
			$quizz->LessonChapter = $chapter;
			$quizz->LessonTitle   = $title;
			$quizz->FileLocation  = $location;
			$quizz->Category  = $category;
			$quizz->Niveau  = $niveau;
			$quizz->Classe  = $classe;
			$quizz->ProfID  = $profid;
			$sql = "SELECT `QuizzID` from `tblquizz` where (`LessonChapter` = '$chapter' and `Classe` ='$classe' and `Niveau` = '$niveau' and `ProfID`='$profid' and StudentID = 0)  ";
			global $mydb;
			$mydb->setQuery($sql);
			$cur = $mydb->loadSingleResult();
			if(is_null($cur)){
			$quizz->create(); 
			message("Quizz has been saved in the database.", "success");
			}
			else { message("Quizz already exists.", "Modify the file.");}
			redirect("index.php");
		}  
	}

	function doEdit(){ 
		if(isset($_POST['save'])){  
			$chapter = $_POST['LessonChapter'];
			$title  = $_POST['LessonTitle'];
			$category = $_POST['Category'];
			$niveau = $_POST['Niveau'];

			//$filename = UploadImage();
			//$location = "files/". $filename ;

			$quizz = new Quizz();
			$quizz->LessonChapter = $chapter;
			$quizz->LessonTitle   = $title;
			//$quizz->FileLocation  = $location;
			$quizz->Category  = $category;
			$quizz->Niveau  = $niveau;
			$quizz->Classe  = $_POST['Classe'];
			$quizz->ProfID  = $_SESSION['ProfID'];
				// $quizz->FileLocation  = $location;
				//$quizz->update($id); 

				message("Quizz has been saved in the database.", "success");
				redirect("index.php");
			 		
		}
	}


	function doDelete(){
		 
			$id = 	$_GET['id'];

			$quizz = New Quizz();
			$quizz->delete($id);
 
			message("Quizz has been removed!","info");
			redirect('index.php');
		 
		
	}


	function dochangefile(){
		if(isset($_POST['save'])){   
			$id = $_POST['QuizzID']; 

 
				$filename = UploadImage();
				$location = "files/". $filename ;

				$quizz = new Quizz(); 
				$quizz->FileLocation  = $location;
				$quizz->update($id); 

				message("File has been updated in the database.", "success");
				redirect("index.php");
		 

			
	 		
		}
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

	function submitnote(){
		if(isset($_POST['save'])){  
				@$id=$_SESSION['qid'];
			
 
				// $filename = UploadImage();
				// $location = "files/". $filename ;

				$quizz = new Quizz();
				$quizz->Note = $_POST['Note'];
				
				// $quizz->FileLocation  = $location;
				$quizz->update($id); 

				message("Lesson has been saved in the database.", "success");
				redirect("index.php");
		 

			
	 		
		}
	}
	 
 
?>