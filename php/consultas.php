<?php
function lista_cursos(){
    include('conexion.php');
    $sql="SELECT * FROM cliente";
    return $result = $mysqli->query($sql);
}
function extraerclienteUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM cliente where id_cliente='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_plato(){
    include('conexion.php');
    $sql="SELECT * FROM plato";
    return $result = $mysqli->query($sql);
}
function extraerplatoUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM plato where id_plato='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_pedido(){
    include('conexion.php');
    $sql="SELECT * FROM pedido";
    return $result = $mysqli->query($sql);
}
function extraerpedidoUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM pedido where id_pedido='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_restaurantes(){
    include('conexion.php');
    $sql="SELECT * FROM restaurante";
    return $result = $mysqli->query($sql);
}
function extraerrestaurantesUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM restaurante where id_restaurante='$id'";
    return $result = $mysqli->query($sql);
}
?>
