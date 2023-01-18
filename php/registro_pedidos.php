<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
 
 
 <?php
    
    include 'conexion.php';
    $i='';
    if (isset($_GET['accion'])){
        $i=$_GET['accion'];
    
    }
    if ($i=="INS"){
        
        $date = (new DateTime())->format('y-m-d');

        
        
       

    
    $sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
    VALUES (

        'Leiny Rodrigue',
        'Sopa de Mariscos',
        '1',
        '$date',
        '300',
        'La vega Villa rosa',
        'Leiny_Rodrigue@gmail.com',
        'A')";
    

   if ($mysqli->query($sql))
    {
        $status='success';
    }
    else{
        $status='error';
        echo "error" .mysqli_error($mysqli);
    }
    header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Pedido Enviado",
		icon: "success",
		
	  })
});


</script>

';

}

if ($i=="INS2"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Luis Enrique',
    'Camarones en Salsa de Tamarindo',
    '1',
    '$date',
    '550',
    'La vega Arenozo',
    'luisenrique234@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}

if ($i=="INS3"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Mario Jose',
    'GAZPACHO DE FRUTAS Y VERDURAS',
    '2',
    '$date',
    '200',
    'La vega,Arenoso',
    'MarioJose@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}

if ($i=="INS4"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Fram Cisco',
    'magret con curry',
    '1',
    '$date',
    '200',
    'La vega',
    'FramCisco@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}

if ($i=="INS5"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Eri Quaresma',
    'Carne a la parrilla ',
    '2',
    '$date',
    '250',
    'Villa Rosa',
    'EriQuaresmae@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}


if ($i=="INS6"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Alex Varquez',
    'Arroz con leche',
    '2',
    '$date',
    '250',
    'Villa Rosa',
    'AlexVarquez@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}


if ($i=="INS7"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Alex Varquez',
    'Ensalada poke de atún',
    '2',
    '$date',
    '330',
    'La Vega, Villa rosa',
    'AlexVarquez@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}


if ($i=="INS8"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Luis Enrique',
    'Panzanella italiana',
    '2',
    '$date',
    '150',
    'La Vega arrenozo',
    'luisenrique234@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}

if ($i=="INS9"){
        
    $date = (new DateTime())->format('y-m-d');

    
    
   


$sql = " INSERT INTO `pedido` ( `nombre_cliente`,`plato`,`cantidad`,`fecha`,`precio`,`direccion`,`correo`,`estado`) 
VALUES (

    'Miguel Gonsalez',
    'Ensalada griega',
    '2',
    '$date',
    '100',
    'La vega villa altagracia',
    'MiguelGonsalez234@gmail.com',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
header("Refresh: 2; URL= ../el-narajo.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Pedido Enviado",
    icon: "success",
    
  })
});


</script>

';

}
?> 