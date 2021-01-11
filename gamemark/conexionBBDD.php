<?php

	$conexion = mysql_connect ("localhost","root", "");
	if (!$conexion) {
	        die('No se pudo conectar: ' . mysql_error());
	}
	
	$db = mysql_select_db("game", $conexion);
	if (!$db) {
	        die ('No se puede usar gamemark : ' . mysql_error());
	}

	
?>