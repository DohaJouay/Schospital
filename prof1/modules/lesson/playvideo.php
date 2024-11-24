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
<style type="text/css">
  .row iframe {
    width: 100%;
    height: 70%;
  }
</style>
 <h1><?php echo $title;?></h1> 
 <div class="container" >
 	<video width="50%"  controls>
		  <source src="<?php echo web_root.'prof1/modules/lesson/'.$res->FileLocation; ?>" type="video/mp4">
		  <source src="<?php echo web_root.'prof1/modules/lesson/'.$res->FileLocation; ?>" type="video/ogg"> 
		</video>
      
        <div class="col-lg-12">Description</div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Matière :</label>
           <label class="col-md-10" class="control-label"><?php echo $res->LessonChapter; ?></label>
         </div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Titre : </label>
           <label class="col-md-10" class="control-label"><?php echo $res->LessonTitle; ?></label>
         </div> 
 </div> 
		