<?php
require_once("../include/initialize.php");

 ?>
  <?php
 // login confirmation
  if(isset($_SESSION['ProfID'])){
    redirect(web_root."prof1/index.php");
  }
  
 // login confirmation

  
  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V14</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo web_root;?>plugins/adminlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/main.css">
<!--===============================================================================================-->
</head>

  <style>
body {
  background-image: url('background.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
}
.test {
 
  margin-top: 30px;
  margin-bottom: 50px;
  margin-right: 150px;
  margin-left: 40px;
  width: 50%;
  padding: 10px;
}
.retour{
  background-color: blue;
  color: white;
  border: 2px solid white;
  margin-top:-100px;
  margin-left:-85px;
}
.brand{
  margin-left:65px;

}
</style>
<body>
  
  <div >
    <div class = "test">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
      <a href="../accueil.php"> 
            <button type="button" class="retour" name="btnretour">
               <== Retour 
            </button></a>
        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="login.php">
          <span class="login100-form-title p-b-32">
            <a class="brand" href="index.html"><img src="logo.png"></a>
          </span>

          <span class="txt1 p-b-11">
            Nom d'utilisateur
          </span>
          <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
            <input class="input100" type="text" name="user_email" >
            <span class="focus-input100"></span>
          </div>
          
          <span class="txt1 p-b-11">
            Mot de passe
          </span>
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="user_pass" >
            <span class="focus-input100"></span>
          </div>
          
          

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="btnLogin">
              Se connecter
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/js/main.js"></script>

</body>
</html>
 
<?php

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);

   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");

    } else {
  //it creates a new objects of member
    $prof = new Prof();
    //make use of the static function, and we passed to parameters
    $res = $prof::profAuthentication($email, $h_upass);
    if ($res==true) {
       
       redirect(web_root."prof1/index.php");
       message("Connecté en tant que prof avec succès.");
       echo $_SESSION['ProfID'];
      /*if ($_SESSION['TYPE']=='PROF'){
         redirect(web_root."prof1/index.php");
      }
      if ($_SESSION['TYPE']=='Administrator'){
        redirect(web_root."admin/index.php");
     }
      else{
           redirect(web_root."prof1/login.php");
      }*/
    }else{
      message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."prof1/login.php");
    }
 }
 }
 ?> 