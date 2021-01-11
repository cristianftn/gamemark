<!DOCTYPE html>
<html lang="es">

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
			<h2 id="loginh2">Login</h2>
		</div>
		<form action="validar.php" method="post">
			<input type="text" placeholder="&#128477;Usuario" name="usu" >
			<input type="password" placeholder="&#128274;Contraseña" name="contra">

			<input type="submit" value="Acceder" >
			<input type="button"  value="Regresar" onclick="window.location.href='../Principal/index.php'">
		</form>
	</section>

</body>
</html>
