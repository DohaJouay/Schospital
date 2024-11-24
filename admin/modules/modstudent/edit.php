<?php  
  @$IDNO = $_GET['id'];
 
  if($IDNO=='' ){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($IDNO);


  ?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 
        
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  >
  
        
          <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Modifier élève</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                         <input  id="IDNO" name="IDNO"  type="hidden" value="<?php echo $singlestudent->IDNO; ?>">
                        
               
                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="<?php echo $singlestudent->FNAME; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="<?php echo $singlestudent->LNAME; ?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contacat Number" type="text" value="<?php echo $singlestudent->PHONE; ?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAILADD">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder=
                            "Example@gmail.com" type="TEXT" value="<?php echo $singlestudent->EMAILADD; ?>" required>
                      </div>
                    </div>
                  </div>

 
                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn_kcctc" name="save" type="submit" >Enregistrer</button> 
                        <a href="index.php?view=view&id=<?php echo $IDNO; ?>&sy=<?php echo $syid; ?>" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Student Profile</a>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Mot de passe:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass" placeholder=
                            "Mot de passe" type="Password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Vérifier le mot de passe:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder=
                            "Vérifier le mot de passe" type="Password" value="">
                      </div>
                    </div>
                  </div>
 
<!--/.fluid-container-->
 
 </form>