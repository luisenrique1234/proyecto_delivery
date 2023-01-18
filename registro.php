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
          </div>
        <div class="col-md-3 header-col-3"> <span  class="pull-right openmenu-nav" onclick="openNav()"><i class="fa  fa-bars "></i></span></div>
	  </div>
	  <h3 class="header-tagline wow zoomIn">REGISTRO</h3>
    </div>
    
  </header>
  

<div class="panel-dafault" style="background-image:url(img/rg.jpeg);" > <!--panel de crear -->
 
  	   <div class="panel-heading">  
  	   </div>
  	     <div class="panel-body wow bounceInLeft">
		   <form action="php/cliente_registro.php?accion=INS" method="POST">
  	     	 	<div class="row">
  	     	 		<div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-3 col-lg-offset-2 col-xs-11 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
  	     	 		 		<label class="control-label">Nombres<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="nombre" required="" placeholder="Nombres" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Apellidos<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="apellidos" required="" placeholder="Apellidos" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	<!-- tercera parte--> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-phone"></i>
  	     	 		 		<label class="control-label">Telefono<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="tel" required="" placeholder="Telefono" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-1 col-lg-2 col-lg-offset-1 col-xs-10 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="far fa-calendar-alt"></i>
  	     	 		 		<label class="control-label">Fecha de Nacimiento<span style="color: Red">*</span></label>
  	     	 		 		<input type="date" name="fecha" required="" placeholder="Apellidos" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>


                   	<!-- mas partes debajo --> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-envelope"></i>
  	     	 		 		<label class="control-label">Correo<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="correo" required="" placeholder="Correo" class="form-control">
  	     	 		 	</div>
						 </div>
						 <!-- mas partes debajo --> 
						 <div class="row">

  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-1 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-envelope"></i>
  	     	 		 		<label class="control-label">Password<span style="color: Red">*</span></label>
  	     	 		 		<input type="password" name="pass" required="" placeholder="Password" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="fas fa-map-pin"></i>
  	     	 		 		<label class="control-label">Domicilio<span style="color: Red">*</span></label>
  	     	 		 		<input type="domiciolio" name="dom" required="" placeholder="domicilio" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	
						 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-1 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="fas fa-pager"></i>
  	     	 		 		<label class="control-label">Forma de Pago<span style="color: Red">*</span></label>
  	     	 		 		<input type="pago" name="pago" required="" placeholder="Forma de pago" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
						
  	     	 				<a href="index.php" class="btn btn-danger">Atras</a>
  	     	 				<input type="submit" value="Guardar" class="btn btn-success">

								
  	     	 			</div>
  	     	 		</div>
  	     	 	</div>

  	     	 </form>
  	     </div>
  </div>

  
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