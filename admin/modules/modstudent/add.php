 <style>
.col-md-1{
  margin-left:-50px;
}
  </style>
 
 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

             <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Nouvel élève</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "STUDUSERNAME">Nom d'utilisateur:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="STUDUSERNAME" name="STUDUSERNAME" placeholder=
                            "Nom d'utilisateur" type="Text" value="" required>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">Prénom:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "Prénom" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                   

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Nom:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Nom" type="text" value=""  required>
                      </div>
                    </div>
                  </div>
                  


                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "STUDPASS">Mot de passe:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="STUDPASS" name="STUDPASS" placeholder=
                            "Mot de passe" type="password" value="" required>
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Numéro de téléphone:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Numéro de téléphone" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAILADD">Adresse mail:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder=
                            "Exemple@gmail.com" type="email" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Classe">Classe:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" id="Classe" name="Classe" placeholder= "Classe" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Trimestre">Trimestre:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="Trimestre" id="Trimestre" placeholder= "Trimestre" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfMaths">Prof Maths:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="ProfMaths" id="ProfMaths" placeholder= "Prof Maths" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfFrançais">Prof Français:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="ProfFrançais" id="ProfFrançais" placeholder= "Prof Français" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfArabe">Prof Arabe:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="ProfArabe" id="ProfArabe" placeholder= "Prof Arabe" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfAnglais">Prof Anglais:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="ProfAnglais" id="ProfAnglais" placeholder= "Prof Anglais" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ProfSciences">Prof Sciences:</label>

                      <div class="col-md-4">
                         <input class="form-control input-sm" name="ProfSciences" id="ProfSciences" placeholder= "Prof Sciences" 
                         type="text" value=""  required>
                      
                    
                      </div>
                    </div>
                  </div>
 
               <!--    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image:</label>

                      <div class="col-md-8">
                      <input type="file" name="image" value="" id="image"/>
                      </div>
                    </div>
                  </div>
             -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn_kcctc" name="studsave" type="submit" ><strong>Ajouter</strong></button>
                           <a href="index.php" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Liste des élèves</a>
                     </div>
                    </div>
                  </div> 
        

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
       