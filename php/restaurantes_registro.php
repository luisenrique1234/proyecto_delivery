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
        

        $Restaurantes=$_POST['Restaurantes'];
        $dir=$_POST['dir'];
        $tel=$_POST['tel'];
        $correo=$_POST['correo'];
        $rnc=$_POST['rnc'];
        
        

    
    $sql = " INSERT INTO `restaurante` ( `nombre_restaurante`, `direccion`,`telefono`,`correo`,`rnc`, `estado`) 
    VALUES (

        '$Restaurantes',
        '$dir',
        '$tel',
        '$correo',
        '$rnc',
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

    header("Refresh: 2; URL= ../lista_restaurantes.php?s=".$status);
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
        $Restaurantes=$_POST['Restaurantes'];
        $dir=$_POST['dir'];
        $tel=$_POST['tel'];
        $correo=$_POST['correo'];
        $rnc=$_POST['rnc'];
        $estado=$_POST['estado'];

    $sql="
    UPDATE `restaurante` SET
        `nombre_restaurante`='$Restaurantes',
        `direccion`='$dir',
        `telefono`='$tel',
        `correo`='$correo',
        `rnc`='$rnc',
        `estado`='$estado'
    WHERE
         id_restaurante='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../plato_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_restaurantes.php?s=".$msj);
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
    UPDATE `restaurante` SET
        `estado`='I'
    WHERE
    id_restaurante='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../plato_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_restaurantes.php?s=".$msj);
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