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
        

        $nombre=$_POST['nombre'];
        $tipo_de_plato=$_POST['tipo_de_plato'];
        $categoria=$_POST['categoria'];
        $precio=$_POST['precio'];
        

    
    $sql = " INSERT INTO `pedido` ( `nombre`, `tipo_de_plato`,`categoria`,`precio`, `estado`) 
    VALUES (

        '$nombre',
        '$tipo_de_plato',
        '$categoria',
        '$precio',
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
    //header("Location: ../plato_mant.php?s=".$status);

    header("Refresh: 2; URL= ../lista_pedido.php?s=".$status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Guardado",
		icon: "success",
		
	  })
});


</script>

';
}

if($i=="UDT"){
    $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombre'];
        $plato=$_POST['plato'];
        $cantida=$_POST['cantida'];
        $precio=$_POST['precio'];
        $fecha=$_POST['fecha'];
        $dir=$_POST['dir'];
        $correo=$_POST['correo'];
        $estado=$_POST['estado'];

    $sql="
    UPDATE `pedido` SET
        `nombre_cliente`='$nombre',
        `plato`='$plato',
        `cantidad`='$cantida',
        `precio`='$precio',
        `fecha`='$fecha',
        `direccion`='$dir',
        `correo`='$correo',
        `estado`='$estado'
    WHERE
        id_pedido='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../plato_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_pedido.php?s=".$msj);
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

if($i=="DLT"){
    $msj='';
    $codigo=$_GET['id'];

    $sql="
    UPDATE `pedido` SET
        `estado`='I'
    WHERE
    id_pedido='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../plato_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_pedido.php?s=".$msj);
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