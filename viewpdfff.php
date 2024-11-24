<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}

  $exercise = New Exercise();
  $res = $exercise->single_exercise($id);

?> 
<h2>View PDF File</h2>
<p style="font-size: 18px;font-weight: bold;">Chapter : <?php echo $res->LessonChapter;?> | Title : <?php echo $res->LessonTitle;?></p>
<div class="container">
	<embed src="<?php echo web_root.'prof1/modules/exercises/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div> 
