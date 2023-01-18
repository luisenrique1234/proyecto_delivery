<?php
include('consultas.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" >
  <title>Delivery Project</title>

  <!-- CSS de Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Cargar Fuentes -->
  <script defer src="fonts/fontawesome/js/all.js"></script>
  
 

  <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="shortcut icon" href="img/iconos/favicon.ico" type="image/x-icon">
  <!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">

  <!-- ALERTAS DE CONFIRMACION -->
  <link rel="stylesheet" href="css/jquery-confirm.min.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-confirm.min.js"></script>
  <!-- FIN DE ALERTAS -->

</head>

<body>
  <nav class="navbar navbar-info bg-info" style="border-radius: 0">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="navbar-toggler-icon">Toggle navigation</span>
          <span class="ico n-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin-index.php">
          <table align="center" width="100%" style="margin-top: -10px">
            <tr>
              <td>
                <img src="img/logo-b.png" alt="Logo" width="50px" style="margin-right: 10px; border-radius: 80%;" />
              </td>
              <td>
                <span>Delivery Project</span>
              </td>
            </tr>
          </table>

      </div>

      <!-- Agregar componentes de navegacion como link, formularios u otro contenido -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <i class="glyphicon glyphicon-user"></i>
          <li>
          <a class="navbar-brand " href="lista_cliente.php">Clientes</a>
          </li>
        </ul>

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="bi bi-award" ></i>
        </ul>


        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_plato.php">Platos</a>
          </li>
        </ul>

 

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="fas fa-concierge-bell" ></i>
        </ul>

        

        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_pedido.php">Pedidos</a>
          </li>
        </ul>

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="fas fa-concierge-bell" ></i>
        </ul>

        

        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_restaurantes.php">Restaurante</a>
          </li>
        </ul>

        
      
        <ul class="nav navbar-nav navbar-right">
          <li><a class="navbar-brand" target="_blank" href="https://www.instagram.com/treemediard/">Contacto</a></li>
        </ul>

      </div>
      
      <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  </body>