<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Numero-Pixfly</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">
<link href="css/animate.css" rel="stylesheet" media="screen">

<!-- lightbox Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/lity.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="style.css">
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--contenedor de submenu de arriba del navegador-->
<?php
include('php/submenu.php');
?>
<!--Top Nav content-->

<div id="main-block"> 
  
  <!-- Header section -->
  <header id="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 header-col-1"><a href="#" class="company-logo"> <img src="img/logo-b.png" class="pull-left logo"></a></div>
        <div class="col-md-6  header-col-2"> <a href="#" class="company-logo"> <img src="img/logo-b.png" class="pull-left logo"></a>
          <div class="clearfix"></div>
          <span class="company-name">pixfly</span>
          <p class="head-content wow fadeInDown" >Our best work, which became successful 
            with the help of professional team</p>
          <span class="header-tagline">- CREATIVE TEAM</span> </div>
        <div class="col-md-3 header-col-3"> <span  class="pull-right openmenu-nav" onclick="openNav()"><i class="fa  fa-bars "></i></span></div>
      </div>
    </div>
  </header>
  <!-- /Header section --> 
  
  <!-- banner Page
    ==========================================-->
  <Section id="home-banner" >
    <div class=" wow fdeInUp"  data-wow-duration="1s"> 
      
      <!--image row with content-->
      <div class="col-md-6 row-with-content" >
        <div class="content-row">
          <h1>Pixfly Studio</h1>
          <span>Creative Artist</span> <a href="#">See our Works</a> </div>
      </div>
      <!--/image row with content--> 
      
      <!--image row  without content-->
      <div class="col-md-6 row-without-content" style="background-image:url(img/bg-1.jpg);"> </div>
      <!--image row without content--> 
      
    </div>
  </Section>
  
  <!-- Portfolio Section
    ==========================================-->
  <section id="portfolio-type-a">
    <div class="full-section container-fluid no-padding infinite-container waypoint"> <!-- Container -->
      
      <div class="categories">
        <ul class="cat">
          <li >
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">All</a></li>
              <li><a href="#" data-filter=".web">Web Design</a></li>
              <li><a href="#" data-filter=".photography">Photography</a></li>
              <li><a href="#" data-filter=".app" >Mobile App</a></li>
              <li><a href="#" data-filter=".branding" >Branding</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div id="lightbox"  >
        <div class=" col-md-12 col-lg-12 col-xs-12 branding loader-g infinite-item">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="portfolio-inner.html">
              <div class="hover-text"> <small>APP</small>
                <h2>Donec facilisis cool tortor ut</h2>
                <div class="clearfix"></div>
                <p class="read-well">Bebidas y Entremeses</p> </div>
              <img src="img/metro/01.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 photography app loader-g infinite-item">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="portfolio-inner.html">
              <div class="hover-text"> <small>APP</small>
                <h2>Donec facilisis cool tortor ut</h2>
                <div class="clearfix"></div>
                <p class="read-well">Bebidas y Entremeses</p> </div>
              <img src="img/metro/02.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 branding loader-g infinite-item">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="portfolio-inner.html">
              <div class="hover-text"> <small>APP</small>
                <h2>Donec facilisis cool tortor ut</h2>
                <div class="clearfix"></div>
                <p class="read-well">Bebidas y Entremeses</p> </div>
              <img src="img/metro/03.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 branding loader-g infinite-item">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="portfolio-inner.html">
              <div class="hover-text"> <small>APP</small>
                <h2>Donec facilisis cool tortor ut</h2>
                <div class="clearfix"></div>
                <p class="read-well">Bebidas y Entremeses</p> </div>
              <img src="img/metro/04.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 web loader-g infinite-item">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="portfolio-inner.html">
              <div class="hover-text"> <small>APP</small>
                <h2>Donec facilisis cool tortor ut</h2>
                <div class="clearfix"></div>
                <p class="read-well">Bebidas y Entremeses</p> </div>
              <img src="img/metro/05.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>            
      </div>
      
       <!--page nav-->
    <nav class="navigation posts-navigation  wow fdeInUp" role="navigation" >
      <ul>
        <li class="pull-left">
          <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="pull-right">
          <div class="nav-next"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-right"></i></a></div>
        </li>
      </ul>
    </nav>
    <!--page nav--> 
      
    </div>
  </section>
  
  

  
  <footer class="footer-bottom">
    <div class="container">
      <div class="row text-center"> 
        
        <!--footer logos-->
        <div class="col-md-12 footer-logos"> <a href="#" class="company-logo"> <img src="img/logo-b.png" class="logo"></a> <span class="company-name">Pixfly</span> </div>
        <!--/footer logos--> 
        
        <!--footer nav-->
        <div class="col-md-12 footer-nav">
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <!--/footer nav--> 
        
        <!--footer social-->
        <div class="col-md-12 footer-social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <!--/footer social--> 
        
        <!--footer copyright-->
        <div class="col-md-12 footer-copyright">
          <p>© Copyright 2018. All rights reserved. Designed by <a href="https://dcrazed.com/">Dcrazed</a></p>
        </div>
        <!--/footer copyright--> 
        
      </div>
    </div>
  </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/lity.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script src="js/infinite-scroll.pkgd.min.js"></script>
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/classie.js"></script> 

<!-- top menu
    ================================================== --> 



<style>
.page-load-status {
  display: none; /* hidden by default */
  padding-top: 20px;
  border-top: 1px solid #DDD;
  text-align: center;
  color: #777;
}
</style>


<script>




$('.full-section').infiniteScroll({
  path: '.pagination__next',
  append: '.loader-g',
  status: '.scroller-status',
  hideNav: '.pagination',
});




function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main-block").style.marginRight = "320px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main-block").style.marginRight= "0";
}

</script> 
<script>


/*====================================
wow
======================================*/
			 new WOW().init();
</script> 
<script>
  // Bind as an event handler
$(document).on('click', '[data-lightbox]', lity);;
</script> 
<script>
new WOW().init();

</script> 
<script>
// Bind as an event handler
$(document).on('click', '[data-lightbox]', lity);
</script>
</body>
</html>
