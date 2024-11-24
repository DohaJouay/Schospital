 <!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Learning System</title>
        <link type="text/css" href="<?php echo web_root; ?>e_admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo web_root; ?>e_admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo web_root; ?>e_admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo web_root; ?>e_admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    </head>
    <style>
        .logo{
            margin-left:-0px;
            
        }
        </style>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="logo"><img src="logo.png"></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                         
                        <ul class="nav pull-right">
                            <style>
                                .dropdown{
                                    margin-top:-60px;
                                    margin-bottom: 0px;
                                    
                                }
                                </style>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajouter
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo web_root;?>prof1/modules/exercises/index.php?view=add">Exercices</a></li>
                                    <li><a href="<?php echo web_root;?>prof1/modules/lesson/index.php?view=add">Cours</a></li> 
                                    <li><a href="<?php echo web_root;?>prof1/modules/quizz/index.php?view=add">Quizz</a></li> 
                                </ul>
                            </li> 
                            
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div >
            <div >
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo web_root; ?>/prof1"><i class="menu-icon icon-dashboard"></i> Accueil
                                </a></li>
                                <li><a href="<?php echo web_root; ?>prof1/modules/lesson/index.php"><i class="menu-icon icon-bullhorn"></i>Cours</a>
                                </li>
                                <li><a href="<?php echo web_root; ?>prof1/modules/exercises/index.php"><i class="menu-icon icon-inbox"></i>Exercices <b class="label green pull-right">
                                    </b> </a></li> 
                                    <li><a href="<?php echo web_root; ?>prof1/modules/quizz/index.php"><i class="menu-icon icon-bullhorn"></i>Quizz</a>
                                </li>
                           
                                <li><a href="<?php echo web_root; ?>prof1/modules/modstudent/index.php"><i class="menu-icon icon-bold"></i> Liste des élèves </a></li>
                            
                                <li><a href="<?php echo web_root;?>prof1/logout.php"><i class="menu-icon icon-signout"></i>Se déconnecter <br><br><br><br><br><br><br><br><br><br>
                                <br><br><br><br><br><br> </a>  </li>
                                
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <div class="span9">
                        <div class="content">  
                            <div class="module">
                            <?php  check_message(); ?> 
                            <?php  require_once $content;?>   
                        </div>
                        </div>
                    </div>

           </div>
           </div>
          </div>
 

         
        <script src="<?php echo web_root; ?>e_admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo web_root; ?>e_admin/scripts/common.js" type="text/javascript"></script> 
        <script src="<?php echo web_root; ?>e_admin/scripts/datatables/jquery.dataTables.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script> 
    </body> 
</html>
 

 <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } ); 
    </script>