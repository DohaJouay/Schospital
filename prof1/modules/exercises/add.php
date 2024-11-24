<?php 
if(!isset($_SESSION['ProfID'])){
  redirect(web_root."prof1/index.php");
}


                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
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
  .col-md-10{
  margin-left:200px
 }
 .col-md-2{
  margin-left:0px;
 }
 .col-md-3{
  margin-left:-160px;
 }
  </style>
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Ajouter un nouvel exercice</h1>
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
                            "Titre" type="text" value="">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Classe">Classe:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                        <select class="form-control input-sm" id="Classe" name="Classe"  >
                            <option>CE1</option>
                            <option>CE2</option>
                            <option>CE3</option>
                            <option>CE4</option>
                            <option>CE5</option>
                            <option>CE6</option>
                         </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Niveau">Trimestre:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <select class="form-control input-sm" id="Niveau" name="Niveau" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                         </select>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Category"></label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <select class="form-control input-sm" id="Category" name="Category" >
                            <option>Docs</option>
                            
                         </select>
                      </div>
                    </div>
                  </div>
<br>
                   <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2" align = "right"for=
                      "file"></label>

                      <div class="col">
                      <input type="file" name="file"/>
                      </div>
                    </div>
                  </div>
 <br>
             <div class="form-group">
                    <div class="coll">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>

                      <div class="save">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Enregistrer</button> 
                         </div>
                    </div>
                  </div> 
        </form> 