<html>
<head>
	<title>Login GameMark</title>
	<meta charset="utf-8">
	<link rel="StyleSheet" href="login.css" type="text/css"> 
</head>
<body>
	<?php
	    $conexion = mysql_connect ("localhost","root", "");
	    if (!$conexion) {
	            die('No se pudo conectar: ' . mysql_error());
	    }

	    $db = mysql_select_db("game", $conexion);
	    if (!$db) {
	            die ('No se puede usar gamemark : ' . mysql_error());
	    }
	    mysql_close($conexion);
    ?>
	<section class="principal">
		<div class="logo">
			<a href="../Principal/index.php"><img src="GameMark.png" ></a>
			<h2 id="loginh2">Regístrate en GameMark🎮 </h2>
		</div>
		<form action="validar.php" method="post">
			<input type="text" placeholder="👥Usuario" name="usu">
			<input type="text" placeholder="📧Correo Electronico" name="correo">
			<input type="text" placeholder="📧Escribe de nuevo tu Correo" name="correo2">
			<input type="date" placeholder="📆Fecha de Nacimiento" name="bday">
			<input type="password" placeholder="&#128274;Contraseña" name="contra">

			<input type="submit" value="Registrar" >
			<input type="button"  value="Regresar" onclick="window.location.href='../Principal/index.php'">
		</form>
	</section>
</body>
</html>
