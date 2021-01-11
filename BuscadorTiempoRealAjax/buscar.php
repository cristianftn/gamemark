<?php
//Recogemos la cadena
$conexion=mysql_connect("localhost","root","", "gamemark") or die("Error en la conexion");
 if (!$conexion) {
 die('No se pudo conectar: ' . mysql_error());
 }
 $db = mysql_select_db("gamemark", $conexion);
 if (!$db) {
 die ('No se puede usar gamemark : ' .mysql_error());
 }

$busqueda=$_POST['cadena'];
 $consulta = mysql_query("SELECT Nombre FROM videojuegos WHERE Nombre LIKE '%' '$busqueda' '%' ", $conexion);

 if (!$consulta) {
 die ('No se pudo realizar la consulta : ' . mysql_error());
 }
 $baseDatos = "SELECT Nombre FROM videojuegos WHERE Nombre LIKE '%'
'$busqueda' '%'";
$consu = mysql_query($baseDatos, $conexion) or die(mysql_error());
$fila = mysql_fetch_array ($consulta);
$nfilas = mysql_num_rows($consu);

 if ($nfilas>0) {
 	while ($fil = mysql_fetch_array($consu)) {
		echo " " .$fil["Nombre"] . " ";
	}
 }
 else
 {
	echo " " .'No hay resultado en la BBDD' . " ";
 }
?>