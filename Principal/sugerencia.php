<?php 
if (isset($_POST['mensaje'])) {
	$mensaje = $_POST['mensaje'];
	$conexion = mysql_connect ("localhost","root", "");
	if (!$conexion) {
	        die('No se pudo conectar: ' . mysql_error());
	}
		
	session_start();
		
	$nombreUsuario = $_SESSION['nombre'];
		
	mysql_select_db("game",$conexion);
	if (!mysql_query("INSERT INTO `mensajes`(`mensaje`, `usuario`, `fecha`) VALUES ('$mensaje', '$nombreUsuario', NOW())", $conexion)) {
		var_dump("INSERT INTO `mensajes`(`mensaje`, `usuario`, `fecha`) VALUES ('$mensaje', '$nombreUsuario', 'NOW()')", mysql_error());die;
	}
	
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>