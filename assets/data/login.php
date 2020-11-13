
<?php
    include('assets/data/connect_db.php');

    $obj = new Conexion;

    $usuario    = $_POST['nick'];
    $pass       = $_POST['pass'];

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->buscarUsuario($usuario,$pass);
    if($res == 1){
        $datos  = array('dato' => 'ok');
    }else if ($res== 2){
        $datos  = array('dato' => 'admin');
    }else{
        $datos  = array('dato' => 'no');
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datos, JSON_FORCE_OBJECT);

?>