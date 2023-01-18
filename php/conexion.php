<?php

$mysqli = new mysqli("localhost","root","","proyecto_delivery");

if( $mysqli -> connect_errno){

    echo "Erro en la conexion";
}else {
    echo "";
}
?>
