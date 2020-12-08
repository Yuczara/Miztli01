<?php


/* CONEXION LOCALHOST
$mysqli = new MySQLi("localhost", "root","", "miztli");
if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
}
else*/

$mysqli = new MySQLi("sql304.tonohost.com", "ottos_26480476","littlemonster1021", "ottos_26480476_miztli");
if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
}
else
	//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>