<?php 
if(!isset($_SESSION['ProfID'])){
  redirect(web_root."prof1/index.php");
} 
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 
<h2>Aperçu</h2>
<p style="font-size: 18px;font-weight: bold;">Matière : <?php echo $res->LessonChapter;?> | Titre : <?php echo $res->LessonTitle;?></p>
<div class="container">
	<embed src="<?php echo web_root.'prof1/modules/lesson/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div> 