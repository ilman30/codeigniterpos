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
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="onepage">
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  
  <?php $this->load->view('navbar');?>
  <!-- /.navbar -->
  
  <section id="home">
    <div class="tp-fullscreen-container revolution">
      <div class="tp-fullscreen">
        <ul>
          <li data-transition="fade"> <img src="<?php echo base_url();?>assets/images/art/slider1.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Auto Juara</h1>
            <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Importir umum mobil CBU<br />
            </div>
          </li>
          <li data-transition="fade"> <img src="<?php echo base_url();?>assets/images/art/slider2.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Dari mulai mobil Hatchback</div>
            <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">hingga Supercar</div>
          </li>
          <li data-transition="fade"> <img src="<?php echo base_url();?>assets/images/art/slider3.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut">Sulit mencari mobil CBU</div>
            <div class="tp-caption large text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut">maka kami menyediakannya</div>
          </li>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.tp-fullscreen-container --> 
    </div>
    <!-- /.revolution --> 
  </section>
  <!--/#home -->
  

  <!-- /.parallax -->

  <!-- /.inverse-wrapper -->
  
  
  <!--/#gallery -->
  
  <section id="about">
    <div class="light-wrapper">
      <div class="container inner">
        <h3 class="section-title text-center">Don't Continue Driving When Tired!!</h3>
        <div class="divide20"></div>
        <div class="row">
          <div class="col-sm-5">
            <figure><img src="<?php echo base_url();?>assets/images/art/porsche30.jpg" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-sm-7">
            <blockquote>
              <p> The perfect racing car crosses the finish line first and subsequently falls into its component parts. </p>
              <p>- Ferdinand Porsche -</p>
            </blockquote>
            
          </div>
          <!-- /column --> 
          
        </div>
        <!-- /.row -->
        <div class="clearfix"></div>
        <div class="divide50"></div>
        
      </div>
      <!--/.container --> 
    </div>
    <!--/.light-wrapper -->
    
    
  </section>
  <!--/#about -->
  
 
  <!-- /.dark-wrapper -->
  

  <!--/#contact -->
  
	<?php $this->load->view('footer');?>
  <!-- /footer -->
  <div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
</main>
<!--/.body-wrapper -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/plugins.js"></script> 
<script src="<?php echo base_url();?>assets/js/classie.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
</body>
</html>