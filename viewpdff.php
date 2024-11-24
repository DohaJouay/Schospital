<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}

  $quizz = New Quizz();
  $res = $quizz->single_quizz($id);

?> 
<h2>View PDF File</h2>
<p style="font-size: 18px;font-weight: bold;">Chapter : <?php echo $res->LessonChapter;?> | Title : <?php echo $res->LessonTitle;?></p>
<div class="container">
	<embed src="<?php echo web_root.'prof1/modules/quizz/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div> 
