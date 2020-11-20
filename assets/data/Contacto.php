<?php
include('connect_db.php');

$obj = new Conexion;

$nombre    = $_POST['nombre'];
$correo    = $_POST['correo'];
$asunto    = $_POST['asunto'];
$mensaje   = $_POST['mensaje'];


$res= $obj->agregarContacto($nombre, $correo, $asunto, $mensaje);

if($res == 1){
    $datos = array('dato' => 'ok');
}else{
    $datos = array('dato' => 'NO EXISTE');
}


//$datos = array('datos' => $texto);//que guarde lo que viene en texto

echo json_encode($datos, JSON_FORCE_OBJECT);
?>

