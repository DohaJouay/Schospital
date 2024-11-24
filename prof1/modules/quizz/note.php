<?php  
    if(!isset($_SESSION['ProfID'])){
  redirect(web_root."prof1/index.php");
}
  @$_SESSION['qid']=$_GET['id'];
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
  .save{
    margin-left:400px;
  }
</style>
 <form class="form-horizontal span6" action="controller.php?action=noote" method="POST" enctype="multipart/form-data">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Soumettre Note</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 

            <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "Note">Note:</label>

                      <div class="col-md-10">
                        <input name="QuizzID" type="hidden" value="<?php echo $res->QuizzID; ?>">
                         <input class="form-control input-sm" id="Note" name="Note" placeholder=
                            "Note" type="text" value="">
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