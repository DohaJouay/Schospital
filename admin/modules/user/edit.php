<?php  
   // if (!isset($_SESSION['TYPE'])=='Administrator'){
   //    redirect(web_root."index.php");
   //   }

  @$user_id = $_GET['id'];
    if($user_id==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($user_id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

               <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Modifier l'administrateur</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singleuser->USERID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_name">Nom:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_name" name="user_name" placeholder=
                            "Nom" type="text" value="<?php echo $singleuser->NAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_email">Nom d'utilisateur:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_email" name="user_email" placeholder=
                            "Nom d'utilisateur" type="text" value="<?php echo $singleuser->UEMAIL; ?>">
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
                     
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn_kcctc" id="usersave" name="save" type="submit" >Enregistrer</button>
                          <a href="index.php" class="btn btn_kcctc"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Liste des administrateurs</strong></a>
                      </div>
                    </div>
                  </div>

              
 
        </form>
      
 