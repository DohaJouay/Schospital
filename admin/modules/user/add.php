<style>
.col-md-11 {
  margin-left : 0px;
}
.col-md-11 {
  margin-left : 0px;
}
</style>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Nouvel administrateur</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                    <!-- <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-11"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                  
                 
                    <div class="col-md-10">
                      <label class="col-md-11 control-label" for=
                      "user_name">Nom:</label>

                      
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_name" name="user_name" placeholder=
                            "Nom" type="text" value="">
                      
                    
                  </div>

                  
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "user_email">Nom d'utilisateur:</label>

                      
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_email" name="user_email" placeholder=
                            "Nom d'utilisateur" type="text" value="">
                      
                    </div>
                  

                  
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "user_pass">Mot de passe:</label>

                      
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass" placeholder=
                            "Mot de passe" type="Password" value="">
                      
                    </div>
                  

                  
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "user_pass">Vérifer le mot de passe:</label>

                      
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder=
                            "Vérifer le mot de passe" type="Password" value="">
                      
                    
                  </div>
                 
               <!--    <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "user_type">Type:</label>

                      <div class="col-md-11">
                       <select class="form-control input-sm" name="user_type" id="user_type">
                          <option value="Administrator">Administrator</option>
                          <option value="Staff">Staff</option> 
                          <option value="Customer">Customer</option>
                          <option value="Encoder">Encoder</option>
                        </select> 
                      </div>
                    </div>
                  </div> -->

            
             
                    <div class="col-md-11">
                      <label class="col-md-11 control-label" for=
                      "idno"></label>

                      
                       <button class="btn btn_kcctc" id="usersave" name="save" type="submit" ><strong>Ajouter</strong></button> 
                          <a href="index.php" class="btn btn_kcctc"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Liste des administrateurs</strong></a>
                    
                  </div>

          
          
        </form>
       