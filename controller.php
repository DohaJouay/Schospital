<?php


require_once ("include/initialize.php");
	if(!isset($_SESSION['StudentID'])){
	redirect(web_root."index.php");
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
	
	case 'updatefiles2' :
		doInsert();
		break;

		case 'updatefiles3' :
			doInsert2();
			break;

 
	}
   
	function doInsert(){ 
		if(isset($_POST['save'])){ 

			$filename = UploadImage();
			$location = "files/". $filename ;
			@$id = $_SESSION['wid'];
			@$sid = $_SESSION['StudentID'];
			$quizz = new Quizz();
			$quiz = new Quizz();
			$res = $quiz->single_quizz($id);
			$matière = $res->LessonChapter;
			$classe = $res->Classe;
			$niveau = $res->Niveau;
			$quizz->LessonChapter = $res->LessonChapter;
			$quizz->LessonTitle   = $res->LessonTitle;
			$quizz->FileLocation  = $location;
			$quizz->Category  = $res->Category;
			$quizz->Classe  = $res->Classe;
			$quizz->Niveau  = $res->Niveau;
			$quizz->ProfID  = $res->ProfID;
			$quizz->StudentID  = $_SESSION['StudentID'];

			$sql = "SELECT QuizzID from tblquizz where StudentID ='$sid' and LessonChapter ='$matière' and Classe = '$classe' and Niveau ='$niveau'  " ;
			global $mydb;
			$mydb->setQuery($sql);
			$cur = $mydb->loadSingleResult();
	
			if (is_null($cur)){$quizz->create();}
			else {
			$quizz->update($cur->QuizzID);} 
		
			message("Lesson has been saved in the database.", "success");
			redirect("index.php");
		
		}  
	}

	function doInsert2(){ 
		if(isset($_POST['save'])){ 

			$filename = UploadImage();
			$location = "files/". $filename ;
			@$id = $_SESSION['nid'];
			@$sid = $_SESSION['StudentID'];
			$exercise = new Exercise();
			$exercis = new Exercise();
			$res = $exercis->single_exercise($id);
			$matière = $res->LessonChapter;
			$classe = $res->Classe;
			$niveau = $res->Niveau;
			$exercise->LessonChapter = $res->LessonChapter;
			$exercise->LessonTitle   = $res->LessonTitle;
			$exercise->FileLocation  = $location;
			$exercise->Category  = $res->Category;
			$exercise->Classe  = $res->Classe;
			$exercise->Niveau  = $res->Niveau;
			$exercise->ProfID  = $res->ProfID;
			$exercise->StudentID  = $_SESSION['StudentID'];

			$sql = "SELECT ExerciseID from tblexercise where StudentID ='$sid' and LessonChapter ='$matière' and Classe = '$classe' and Niveau ='$niveau'  " ;
			global $mydb;
			$mydb->setQuery($sql);
			$cur = $mydb->loadSingleResult();
	
			if (is_null($cur)){$exercise->create();}
			else {
			$exercise->update($cur->ExerciseID);} 
		
			message("Exercise has been saved in the database.", "success");
			redirect("index.php");
		
		}  
	}

	function doEdit(){ 
		if(isset($_POST['save'])){  
			$title  = $_POST['LessonTitle'];
			$category = $_POST['Category'];
			$id = $_POST['LessonID'];
			
 
				// $filename = UploadImage();
				// $location = "files/". $filename ;

				$lesson = new Lesson();
				$lesson->LessonChapter = $_SESSION['Matière'];
				$lesson->LessonTitle   = $title;
				$lesson->Category  = $category;
				$lesson->Classe  = $_POST['Classe'];
				$lesson->Trimestre  = $_POST['Trimestre'];
				$lesson->ProfID  = $_SESSION['ProfID'];
				// $lesson->FileLocation  = $location;
				$lesson->update($id); 

				message("Lesson has been saved in the database.", "success");
				redirect("index.php");
		 

			
	 		
		}
	}


	function doDelete(){
		 
			$id = 	$_GET['id'];

			$lesson = New Lesson();
			$lesson->delete($id);
 
			message("Lesson has been removed!","info");
			redirect('index.php');
		 
		
	}


	function dochangefile(){
		if(isset($_POST['save'])){   
			$id = $_POST['LessonID']; 

 
				$filename = UploadImage();
				$location = "files/". $filename ;

				$lesson = new Lesson(); 
				$lesson->FileLocation  = $location;
				$lesson->update($id); 

				message("File has been updated in the database.", "success");
				redirect("index.php");
		 

			
	 		
		}
	}

	function dochangefile2(){
		if(isset($_POST['save'])){   
			$id = $_POST['QuizzID']; 

 
				$filename = UploadImage();
				$location = "files/". $filename ;

				$exercise = new Quizz(); 
				$exercise->FileLocation  = $location;
				$exercise->update($id); 

				message("File has been updated in the database.", "success");
				redirect("index.php");
		 

			
	 		
		}
	}

 
 
  function UploadImage(){
			$target_dir = "prof1/modules/quizz/files/";
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