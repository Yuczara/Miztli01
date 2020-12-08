<?php
//DB details
$dbHost = 'sql304.tonohost.com';
$dbUsername = 'ottos_26480476';
$dbPassword = 'littlemonster1021';
$dbName = 'ottos_26480476_miztli';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>