<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
<title>Auto Juara</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">
<link href="<?php echo base_url();?>style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/color/forest.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/font/Monsterrat.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/font/Karla-italic.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/type/icons.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
 

  
  <div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper">
        <div class="navbar-brand"> <a href="http://localhost/uas/"><img src="#" srcset="<?php echo base_url();?>assets/images/logo.png 1x, <?php echo base_url();?>assets/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="<?php echo base_url();?>assets/images/logo-dark.png 1x, <?php echo base_url();?>assets/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a> </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> </div>
      <!-- /.basic-wrapper --> 
    </div>
    <!-- /.navbar-header -->
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">#auto</a></li>
        <li><a href="#">#juara</a></li>
        <li><a href="#">#car</a></li>
        <li><a href="#">#kamisukaturbo</a></li>
      </ul>
      
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->

    <!-- /.social-wrapper --> 
  </div>
  <div class="post-parallax parallax inverse-wrapper parallax1" style="">
    <div class="container inner text-center">
      <div class="headline text-center">
        <img src="<?php echo base_url();?>assets/images/loginlogo.png">
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 

  <section id="contact">
  <div class="dark-wrapper">
    <div class="container inner2">
        <?php echo $contents ?>
      <!-- /.blog --> 
    </div>
    <!--/.container -->
  </div>
  <!--/.dark-wrapper -->
  </section>
  
  <?php $this->load->view('footer');?>
  <!-- /footer --> 
  
</main>
<!--/.body-wrapper --> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/plugins.js"></script> 
<script src="<?php echo base_url();?>assets/js/classie.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
</html>