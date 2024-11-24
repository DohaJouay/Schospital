                      <?php 
                         // if (!isset($_SESSION['TYPE'])=='Administrator'){
                         //      redirect(web_root."index.php");
                         //     }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Nouveau professeur</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-8"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "nom">Nom:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="nom" name="nom" placeholder=
                            "Nom" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfUsername">Nom d'utilisateur:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="ProfUsername" name="ProfUsername" placeholder=
                            "Nom d'utilisateur" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Adresse Mail:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Adresse Mail" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "password">Mot de passe:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="password" name="password" placeholder=
                            "Mot de passe" type="Password" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "password">Vérifier le mot de passe:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="password" name="password" placeholder=
                            "Vérifier mot de passe" type="Password" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Matière">Matière:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="Matière" name="Matière" placeholder=
                            "Matière" type="text" value="" required>
                      </div>
                    </div>
                  </div>

            
               <!--    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_type">Type:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="user_type" id="user_type">
                          <option value="Administrator">Administrator</option>
                          <option value="Staff">Staff</option> 
                          <option value="Customer">Customer</option>
                          <option value="Encoder">Encoder</option>
                        </select> 
                      </div>
                    </div>
                  </div> -->

            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn_kcctc" id="usersave" name="save" type="submit" ><strong>Ajouter</strong></button> 
                          <a href="index.php" class="btn btn_kcctc"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Liste des professeurs</strong></a>
                       </div>
                    </div>
                  </div>

          
          
        </form>
       