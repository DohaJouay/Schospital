<?php  
    if(!isset($_SESSION['ProfID'])){
  redirect(web_root."prof1/index.php");
}

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $quizz = New Quizz();
  $res = $quizz->single_quizz($id);

?> 
  <style>
  .col-lg-12{
    margin-left:150px;
    margin-top:50px
  }
  .form-group{
    margin-left:100px;
  }
  .col{
    margin-left:100px;
  }
  .save{
    margin-left:400px;
  }
</style>
 <form class="form-horizontal span6" action="controller.php?action=updatefiles" method="POST" enctype="multipart/form-data">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Modifier fichier</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

        <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "LessonChapter">Chapitre:</label>

                      <div class="col-md-10">
                        <input name="QuizzID" type="hidden" value="<?php echo $res->QuizzID; ?>">
                        <label class="control-label"><?php echo $res->LessonChapter; ?></label>
                      </div>
                    </div>
                  </div>
                      
                   <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "LessonTitle">Titre:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                        <label class="control-label"><?php echo $res->LessonTitle; ?></label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Category">Type du fichier:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <label class="control-label"><?php echo $res->Category ?></label>
                      </div>
                    </div>
                  </div>
 

             <div class="form-group">
              <div class="col-md-11">
                <label class="col-md-2" align = "right"for=
                "file"></label>

                <div class="col"> 
                <input type="file" name="file" value="<?php echo $res->FileLocation; ?>" />
                </div>
              </div>
            </div>
 
             <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>

                      <div class="save">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>Enregistrer</button> 
                         </div>
                    </div>
                  </div> 
        </form> 
 