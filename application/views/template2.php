<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
<title>Ilman 30</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">
<link href="<?php echo base_url();?>style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/color/blue.css" rel="stylesheet">
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
  <div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper">
        <div class="navbar-brand"> <a href="home"><img src="#" srcset="<?php echo base_url();?>assets/images/logo.png 1x, <?php echo base_url();?>assets/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="<?php echo base_url();?>assets/images/logo-dark.png 1x, <?php echo base_url();?>assets/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a> </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> </div>
      <!-- /.basic-wrapper --> 
    </div>
    <!-- /.navbar-header -->
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="current"><?php echo anchor('dashboard','Home');?></li>
        <li><?php echo anchor('kategori','Car Region');?></li>
        <li><?php echo anchor('barang','Car List');?></li>
        <li><?php echo anchor('operator','Admin');?></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Transaksi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor('transaksi','Form Transaksi');?></li>
            <li><?php echo anchor('transaksi/laporan','Laporan Transaksi');?></li>
            <li><?php echo anchor('transaksi/excel','Laporan Excel');?></li>
            <li><?php echo anchor('transaksi/pdf','Laporan PDF');?></li>
          </ul>
        </li>
      </ul>
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->
    
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
        <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
        <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </div>
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
            <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">The most essential quality in the game</div>
            <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">is passion</div>
          </li>
          <li data-transition="fade"> <img src="<?php echo base_url();?>assets/images/art/slider3.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut">You can't change your</div>
            <div class="tp-caption large text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut">favorite football team</div>
          </li>
          <li data-transition="fade"> <img src="<?php echo base_url();?>assets/video/video.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-endspeed="100" data-easing="Sine.easeOut" assets="z-index: 2;">If you hate football</div>
          <div class="tp-caption large text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" assets="z-index: 2;">maybe you need a doctor</div>
          <div class="tp-caption tp-fade fadeout fullscreenvideo"
      data-x="0"
      data-y="0"
      data-speed="1000"
      data-start="1100"
      data-easing="Power4.easeOut"
      data-elementdelay="0.01"
      data-endelementdelay="0.1"
      data-endspeed="1500"
      data-endeasing="Power4.easeIn"
      data-autoplay="true"
      data-autoplayonlyfirsttime="false"
      data-nextslideatend="true"
        data-dottedoverlay="twoxtwo"
        data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 1;">
            <video class="" preload="none" width="100%" height="100%" 
poster='<?php echo base_url();?>assets/video/video.jpg'>
              <source src='<?php echo base_url();?>assets/video/video.mp4' type='video/mp4' />
              <source src='<?php echo base_url();?>assets/video/video.webm' type='video/webm' />
            </video>
          </div>
        </li>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.tp-fullscreen-container --> 
    </div>
    <!-- /.revolution --> 
  </section>
  <!--/#home -->
  
  
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Latest Blog</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
     <!-- /.post -->
          <div class="item post">
            <figure class="main"><img src="" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat6"><span><a href="blog">Blog</a></span></div>
              <h4 class="post-title"><a href=""></a></h4>
              <div class="meta"><span class="date"></span></div>
              <p></p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
     <!-- LOOP -->

        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
    
  </div>
  <div class="parallax parallax3 inverse-wrapper customers">
    <div class="container inner text-center">
      <h3 class="section-title">Football Quotes</h3>
      <div class="testimonials owl-carousel thin">
        <div class="item">
          <blockquote>
            <p>Whether we have the best individual players doesnt matter, you have to have the best team.<small class="meta">Philipp Lahm</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>Football is one of the world's best means of communication. It is impartial, apolitical and universal. Football unites people around the world every day. Young or old, players or fans, rich or poor, the game makes everyone equal, stirs the imagination, makes people happy and makes them sad.<small class="meta">Franz Beckenbauer</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>You can change your wife, your politics, your religion, but never, never can you change your favourite football team.<small class="meta">Eric Cantona</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>Sometimes in football you have to hold your hand up and say, yeah, they're better than us.<small class="meta">Sir Alex Ferguson</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
        <div class="item">
          <blockquote>
            <p>I always have a football handy at home, and I'll play with it. Sometimes it'll get on my wife's nerves. But the moment I've got a ball at my feet, I'm happy.<small class="meta">Thierry Henry</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
        <div class="item">
          <blockquote>
            <p>If football was a drug, I would have died from overdose.<small class="meta">Fernando Torres</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
      </div>
      <!-- /.testimonials --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.parallax -->

  <!-- /.inverse-wrapper -->
  
  
  <!--/#gallery -->
  
  <section id="about">
    <div class="light-wrapper">
      <div class="container inner">
        <h3 class="section-title text-center">Who am I?</h3>
        <div class="divide20"></div>
        <div class="row">
          <div class="col-sm-5">
            <figure><img src="<?php echo base_url();?>assets/images/art/profile.png" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-sm-7">
            <blockquote>
              <p> Whether we have the best individual players doesnt matter, you have to have the best team. </p>
              <p>- Philipp Lahm -</p>
            </blockquote>
            <p>It's not important who I am, but football is the most important thins in my life. If you hate football, maybe you need a doctor.</p>
            
            <ul class="social">
              <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
              <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
              <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
            </ul>
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
  
  
  
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Instagram Feed</h2>
          <p>Follow my instagram please.</p>
          <div class="divide10"></div>
          <a href="https://instagram.com/ilman_30/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="isotope items" data-limit="5"></div>
              
              <!--/.isotope --> 
            </div>
            <!--/.items-wrapper --> 
          </div>
          <!--/.image-grid --> 
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <section id="contact">
    <div class="light-wrapper">
      <div class="container inner">
        <div class="thin">
          <h3 class="section-title text-center">Contact</h3>
          <ul class="contact-info text-center">
            <p><li><i class="icon-location"></i>Jl. Pakar Barat RT02/RW08 Gg. Mesjid Al-Ukhuwah, Ciburaial, Cimenyan, Kab. Bandung, Jawa Barat. </li></p>
            <li><i class="icon-phone"></i>+6282121606914</li>
            <li><i class="icon-mail"></i>ilmannurhakim@ilman30.com</li>
          </ul>
          <div class="divide50"></div>
          <div class="form-container">
            <form action="aksi_contact.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="nama" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                
                <!--/column -->
                
              </div>
              <!--/.row -->
              <textarea name="konten" placeholder="Type your message here..." required="required"></textarea>
              
              <!--/.radio-set -->
              <input type="submit" class="btn" value="Send" name="post">
              <footer class="notification-box"></footer>
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
        </div>
        <!-- /.thin --> 
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.light-wrapper -->
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&amp;sensor=false&amp;extension=.js"></script> 
    <script> google.maps.event.addDomListener(window, 'load', init);
  var map;
  function init() {
      var mapOptions = {
          center: new google.maps.LatLng(-6.85966,  107.630811),
          zoom: 15,
          zoomControl: true,
          zoomControlOptions: {
              style: google.maps.ZoomControlStyle.DEFAULT,
          },
          disableDoubleClickZoom: false,
          mapTypeControl: true,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          },
          scaleControl: true,
          scrollwheel: false,
          streetViewControl: true,
          draggable : true,
          overviewMapControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
      }
  
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var locations = [
          ['Boudewijn Ostenstraat 2', -6.85966,  107.630811]
      ];
      for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
              icon: '<?php echo base_url();?>assets/images/map-pin.png',
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map
          });
      }
  }
  </script> 
  </section>
  <!--/#contact -->
  
<footer class="footer inverse-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Contact</h4>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <div class="contact-info"> <i class="icon-location"></i> Jl. Pakar Barat RT02/RW08 Gg. Mesjid Al-Ukhuwah, Ciburaial, Cimenyan, Kab. Bandung, Jawa Barat, Indonesia. <br />
              <i class="icon-phone"></i>+6282121606914 <br />
              <i class="icon-mail"></i> ilmannurhakim@ilman30.com </div>
          </div>
          <!-- /.widget --> 
          
        </div>
        <!-- /column -->
        
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Tags</h4>
            <ul class="tag-list">
              <li><a href="#" class="btn">Ilman 30</a></li>
              <li><a href="#" class="btn">Football</a></li>
              <li><a href="#" class="btn">Blog</a></li>
              <li><a href="#" class="btn">Bayernzone</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          
          <div class="widget">
            <h4 class="widget-title">Social</h4>
            <ul class="social">
              <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
              <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
              <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
            </ul>
            <!-- .social --> 
            
          </div>
        </div>
        <!-- /column -->
        
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Search</h4>
            <form name="formcari" action="search" class="searchform" method="post">
              <input type="text" id="s2" name="judul" placeholder="Search Something">
              <button type="submit" class="btn btn-default" name="submit" id="submit">Find</button>
            </form>
          </div>
          <!-- /.widget --> 
          <div class="widget">
            <h4 class="widget-title">Ilman 30</h4>
            <p>It's not important who I am, but football is the most important thins in my life. If you hate football, maybe you need a doctor.</p>
          </div>
          <!-- /.widget --> 
        </div>
        <!-- /column -->
        
      </div>
      <!-- /.row --> 
    </div>
    <!-- .container -->
    
    <div class="sub-footer">
      <div class="container inner">
        <p class="text-center">© 2017 Ilman 30. BETA Version</p>
      </div>
      <!-- .container --> 
    </div>
    <!-- .sub-footer --> 
  </footer>
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