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

     /* En esta parte se registra lo nuevos usuarios que 
     desen usar la plataforma y es coresponde al archivo registro.php */

    if ($i=="INS"){
        

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellidos'];
        $password=$_POST['pass'];
        $telefono=$_POST['tel'];
        $domicilio=$_POST['dom'];
        $forma_pago=$_POST['pago'];
        $fecha=$_POST['fecha'];
        $correo=$_POST['correo'];

    
    $sql = " INSERT INTO `cliente` ( `nombre`, `apellido`,`password`,`telefono`,`domicilio`, `forma_de_pago`, `fecha_nacimiento`,`correo`, `estado`) 
    VALUES (

        '$nombre',
        '$apellido',
        '$password',
        '$telefono',
        '$domicilio',
        '$forma_pago',
        '$fecha',
        '$correo',
        'A')";
    

   if ($mysqli->query($sql))
    {
        $status='success';
    }
    else{
        $status='error';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$status);

    header("Refresh: 2; URL= ../index.php?s=".$status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "REGISTRADO",
		icon: "success",
	  })
});


</script>

';
}


 /* Esta parte se encarga de la creacion de un 
  cliente por parte de un administrador que hacido autorizado
  y coresponde al archivo crea_cliente.php*/

if ($i=="INS2"){
        

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellidos'];
    $password=$_POST['pass'];
    $telefono=$_POST['tel'];
    $domicilio=$_POST['dom'];
    $forma_pago=$_POST['pago'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];


$sql = " INSERT INTO `cliente` ( `nombre`, `apellido`,`password`,`telefono`,`domicilio`, `forma_de_pago`, `fecha_nacimiento`,`correo`, `estado`) 
VALUES (

    '$nombre',
    '$apellido',
    '$password',
    '$telefono',
    '$domicilio',
    '$forma_pago',
    '$fecha',
    '$correo',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
// echo("erro descripcion:" .mysqli_error($mysqli));
//header("Location: ../propietarip_mant.php?s=".$status);

header("Refresh: 2; URL= ../lista_cliente.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "Cliente Creado",
    icon: "success",
  })
});


</script>

';
}

 /* Esta parte se encaga de  actualizan los clietes por parte del adimistrador  */

if($i=="UDT"){
    $msj='';
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellidos'];
    $telefono=$_POST['tel'];
    $domicilio=$_POST['dom'];
    $forma_pago=$_POST['pago'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];
    $estado=$_POST['estado'];

    $sql="
    UPDATE `cliente` SET
        `nombre` ='$nombre',
        `apellido` ='$apellido',
        `telefono` ='$telefono',
        `domicilio`='$domicilio',
        `forma_de_pago`='$forma_pago',
        `fecha_nacimiento`='$fecha',
        `correo`='$correo',
        `estado`='$estado'
    WHERE
        id_cliente='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_cliente.php?s=".$msj);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Actualizado",
		icon: "success",
		
	  })
});


</script>

';
}

 /* Esta parte se encarga de "borrar los cliente 
 registrado en la plataforma o mas bien  deshabilitar 
 el cliente "por un administrador 
 coresponde al archivo lista_cliente*/

if($i=="DLT"){
    $msj='';
    $codigo=$_GET['id'];

    $sql="
    UPDATE `cliente` SET
        `estado`='I'
    WHERE
    id_cliente='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_cliente.php?s=".$msj);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Eliminado",
		icon: "error",
		
	  })
});


</script>

';
}

?>