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
 <style>
  .col-lg-12{
    margin-left:150px;
    margin-top:50px
  }
  .form-group{
    margin-left:100px;
  }
  .save{
    margin-left:400px;
  }
</style>
 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST" enctype="multipart/form-data">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Modifier Leçon</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

            
                      
                   <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "LessonTitle">Titre:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="LessonTitle" name="LessonTitle" placeholder=
                            "Titre" type="text" value="<?php echo $res->LessonTitle; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Classe">Classe:</label>

                      <div class="col-md-10">
                        <input name="LessonID" type="hidden" value="<?php echo $res->LessonID; ?>">
                         <input class="form-control input-sm" id="Classe" name="Classe" placeholder=
                            "Classe" type="text" value="<?php echo $res->Classe; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Trimestre">Trimestre:</label>

                      <div class="col-md-10">
                        <input name="LessonID" type="hidden" value="<?php echo $res->LessonID; ?>">
                         <input class="form-control input-sm" id="Trimestre" name="Trimestre" placeholder=
                            "Trimestre" type="text" value="<?php echo $res->Trimestre; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Category">Type du fichier:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <select class="form-control input-sm" id="Category" name="Category" >
                            <option <?php echo ($res->Category == "Docs") ? "Selected" : ""?>>Docs</option>
                            <option <?php echo ($res->Category == "Video") ? "Selected" : ""?>>Video</option>
                         </select>
                      </div>
                    </div>
                  </div>

      <!--              <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2" align = "right"for=
                      "file">Upload File:</label>

                      <div class="col-md-10">
                      <input type="file" name="file" value="<?php echo $res->FileLocation; ?>" />
                      </div>
                    </div>
                  </div> -->
 
             <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>
                      <br>

                      <div class="save">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>Enregistrer</button> 
                         </div>
                    </div>
                  </div> 
        </form> 