<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?> 
  

<style type="text/css">
  body {
    background-color: #0000;
  }
  .retour{
  background-color: blue;
  color: white;
  border: 2px solid white;
  margin-top:-100px;
  margin-left:-325px;
}
</style>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
 
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
<!--===============================================================================================-->
</head>
<style>
body{
  background-image: url('bac.jpg');
  
  background-size:auto;
}
.brand1{
  margin-left:80px;
  width: 200px;
}
.brand2{
  margin-left:530px;
}
.center {
  margin-left:230px;
  margin-top:-435px;
}
.gh{
  display: flex;
  justify-content: center;
  align-items: center;
  
}
.cont{
  margin-top:-120px;
}


</style>

<body>

  <div >
    
  <div class='gh'>
    
    <div class="cont">
          <?php check_message(); ?>
          
      <div class="wrap-login100">
        
        <div class="login100-pic js-tilt" data-tilte>
          
          <br/> <br/> <br/>  <br/> <br/> <br/>  <br/> <br/> <br/> 
          
        <a class="brand1" href="index.html"><img src="enfant1.jpeg"></a>
        <a class="brand2" href="index.html"><img src="enfant2.jpeg"></a>
        
        </div>
        <a class="j" href="index.html"><img src="soleil.png" width="200" 
     height="150" /></a>
     
        <div class="center">
        <a href="accueil.php"> 
            <button type="button" class="retour" name="btnretour">
               <== Retour 
            </button></a> 
        <form class="login100-form validate-form" action="" method="POST"> 
        
        


          <span class="login100-form-title">
            <img src="logo.png">
          </span>
          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="user_email" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>
          <br>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Se connecter
            </button>
          </div>
 
          
        </form>
       
        
        </div>
      </div>
    </div>
  </div>
  
  

  <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."login.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
              redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
        }else{
          message("Account does not exist! Please contact Administrator.", "error");
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  </div>

</html>