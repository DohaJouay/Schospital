<?php 
require_once("include/initialize.php");  
if (!isset($_SESSION['StudentID'])) {
  # code...
  redirect('login.php');
}
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
  case 'lesson':
    $title = "Leçons";
    $content = 'lesson.php';
   # code...
   break; 
  case 'exercises':
    $title = "Exercises";
    $content = 'exercises.php';
   # code...
   break; 
   case 'corrigés':
    $title = "Exercises";
    $content = 'corrigés.php';
   # code...
   break;
   case 'quizz':
    $title = "Quizz";
    $content = 'quizz.php';
   # code...
   break; 
   case 'listm':
    $title = "Documents Mathématiques";
    $content = 'listm.php';
   # code...
   break; 
   case 'listfr':
    $title = "Documents Français";
    $content = 'listfr.php';
   # code...
   break;
   case 'listeng':
    $title = "Documents Français";
    $content = 'listeng.php';
   # code...
   break;
   case 'listar':
    $title = "Documents Français";
    $content = 'listar.php';
   # code...
   break;
   case 'lists':
    $title = "Documents Français";
    $content = 'lists.php';
   # code...
   break;
   case 'note':
    $title = "Notes";
    $content = 'note.php';
   # code...
   break; 
  case 'download':
    $title = "Téléchargements";
    $content = 'download.php';
   # code...
   break; 
  case 'about':
    $title = "About Us";
    $content = 'about.php';
   # code...
   break; 
  case 'playvideo':
    $title = "Play Video";
    $content = 'playvideo.php';
   # code...
   break; 
  case 'viewpdf':
    $title = "Play Video";
    $content = 'viewpdf.php';
   # code...
   break; 
  case 'viewpdff':
    $title = "Play Video";
    $content = 'viewpdff.php';
    break;
    case 'viewpdfff':
      $title = "Play Video";
      $content = 'viewpdfff.php';
   # code...
   break; 
   case 'uploadfile' :
		$content    = 'uploadfiles.php';		
		break;
    case 'uploadfilesb' :
      $content    = 'uploadfilesb.php';		
      break;
  case 'question':
    $title = "Question";
    $content = 'question.php';
   # code...
   break; 
  case 'quizresult':
    $title = "Result";
    $content = 'quizresult.php';
   # code...
   break; 
  default :
    $title = "Home";
    $content    = 'home.php';
}
require_once("theme/templates.php");
?>