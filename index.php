<!doctype html>
<html>
<head>
<!-- Necesidades básicas de página
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Delivery</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">


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
  

<!--contenedor de arriba del navegador-->

<div id="main-block"> 
  
  <!-- Sección de encabezado para centrar los elementos de encabezado agregar id "top-header-centre" -->
  <header id="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 header-col-1"><a href="index.php" class="company-logo"> <img src="img/logo-b.png" class="pull-left logo"></a></div>
        <div class="col-md-6  header-col-2 ">  <a href="#" class="company-logo"> <img src="img/logo-b.png" class="pull-left logo"></a>
          <div class="clearfix"></div>
          <span class="company-name">Delivery</span>
          <h3 class="head-content  wow fadeInDown text-info" >Ni los chismes llegan tan rápido como nosotros</h3>
          <span class="header-tagline wow zoomIn">- RESTAURANTES</span> </div>
        <div class="col-md-3 header-col-3"> <span  class="pull-right openmenu-nav" onclick="openNav()"><i class="fa  fa-bars "></i></span></div>
      </div>
    </div>
    
  </header>
  <!-- /Sección de encabezado --> 
  
  <!-- página de banner
    ==========================================-->
  <Section id="home-banner" >
    <div class=" wow fdeInUp"  data-wow-duration="1s"> 
      
      <!--fila de imagen con contenido-->
      <div class="col-md-7 row-with-content">
        <div class="content-row">
          <h1 class="wow fadeInUp">Delivery  Project</h1>
          <span class="wow fadeInUp">Rapidez y Calidad</span><a href="registro.php" class="wow fadeInUp col-md-4 btn btn-danger">Regístrate</a></div>
      </div>
      <!--/ fila de imagen con contenido--> 
      
      <!--fila de imágenes sin contenido-->
      <div class="col-md-5 row-without-content wow fadeInLeft" style="background-image:url(img/bg-1.jpg);"> </div>
      <!--fila de imágenes sin contenido--> 
      
    </div>
  </Section>
  
  <!-- Sección de Galeria de restaurante
    ==========================================-->
  <section id="portfolio-type-a">
    <div class="container"> <!-- Contenerdor -->
      
      <div class="categories">
        <ul class="cat">
          <li >
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Todos</a></li>
              <li><a href="#" data-filter=".web">Caldos</a></li>
              <li><a href="#" data-filter=".photography">Pescados y mariscos</a></li>
              <li><a href="#" data-filter=".app" >Verduras y ensaladas</a></li>
              <li><a href="#" data-filter=".branding" >Postres</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div id="lightbox" class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="el-narajo.php">
              <div class="hover-text"> <p>El naranjo</p>
                <h2>Calidad y servicio</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses </span> </div>
              <img src="img/portfolio/01.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 photography app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="macaogrill.php">
              <div class="hover-text"> <small>Macao Grill</small>
                <h2>El placer de la variedad en su plato</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/02.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="elzaguan.php">
              <div class="hover-text"> <small>El Zaguan</small>
                <h2>Donde la comida habla con el paladar</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/03.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="etsukosushi.php">
              <div class="hover-text"> <small>Etsuko Sushi</small>
                <h2>Mil sabores en un solo lugar</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="brunchandbistro.php">
              <div class="hover-text"> <small> Brunch and Bistro</small>
                <h2>El futuro de la tradición</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/05.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="shiarestaurant.php">
              <div class="hover-text"> <small>Shia Restaurant</small>
                <h2>Elige y saborea tu gusto</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 photography web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="carritomoshe.php">
              <div class="hover-text"> <small>El Carrito De Moshe</small>
                <h2>Los sabores de la naturaleza</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/07.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="laesquinard.php">
              <div class="hover-text"> <small>La esquina RD</small>
                <h2>Buena comida rápida</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/09.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 col-lg-4 col-xs-12 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="cafecolao.php">
              <div class="hover-text"> <small>Cafe Colao</small>
                <h2>El lado bueno de la comida</h2>
                <div class="clearfix"></div>
                <span>Bebidas y Entremeses</span> </div>
              <img src="img/portfolio/08.jpg" class="img-responsive" alt="..."> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-bottom">
    <div class="container">
      <div class="row text-center"> 
        
<!--Pie de pagina-->
<?php
include('php/ppie.php');
?>
        
        
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
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/classie.js"></script> 



<!-- top menu
    ================================================== --> 

<script>
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
