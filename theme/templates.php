<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Espace élève</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/color/cyan.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-57-precomposed.png">


</head>
<style>
.logo{
  margin-top:-20px;
  margin-left:0px;
  }

</style>



<body>

  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div >
            <!-- logo -->
            <div class="logo">
              <img src="logo.png">
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                
                  <li >
                    <a href="index.php"><i class="icon-home"></i> Accueil </a>
                  </li>
                  <li  >
                    <a href="<?php echo web_root; ?>index.php?q=lesson"><i class="icon-list-alt"></i> Cours</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=exercises"><i class="icon-list-alt"></i> Exercices</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=corrigés"><i class="icon-list-alt"></i> Corrigés des Exercices</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=quizz"><i class="icon-list-alt"></i> Quizz</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=note"><i class="icon-list-alt"></i> Notes</a>
                  </li>
                  <li>
                    <a href="<?php echo web_root; ?>index.php?q=download"><i class="icon-download"></i> Téléchargements</a>
                  </li> 
                  <li>
                    <a href="logout.php"><i class="icon-logout"></i> Se déconnecter</a>
                  </li>
                  
                </ul>
                
              </nav>
              
            </div>
            <!-- end menu -->
            <br><br><br><br>
            <section id="maincontent">
              <div class="container"> 
              <?php check_message(); ?>  
            <?php require_once $content; ?> 
            </div>   
            </section>
          </div>
        </div>
      </div>
      
    </header>


 <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/raphael-min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/bootstrap.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.elastislide.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery-hover-effect.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/animate.js"></script>
  <script type="text/javascript">
$(document).ready(function () {
        var url = window.location;
    // Will only work if string in href matches with location
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');
    });
</script>
  <!-- Template Custom JavaScript File -->
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/custom.js"></script>

</body>
</html>