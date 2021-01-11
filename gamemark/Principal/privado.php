<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GameMark</title>
 	<link rel="stylesheet" type="text/css" href="formato.css">
</head>
<body>
	<header>
		<?php
        session_start();
        $conexion = mysql_connect ("localhost","root", "");
        if (!$conexion) {
                die('No se pudo conectar: ' . mysql_error());
        }

        $db = mysql_select_db("game", $conexion);
        if (!$db) {
            die ('No se puede usar gamemark : ' . mysql_error());
        }


        // session_destroy();       
        
        if (array_key_exists('nombre', $_SESSION)) {
        	
	       
	        $nombreUsuario=$_SESSION['nombre'];

	        echo "Bienvenido ".$nombreUsuario;

        }
        if (!isset($nombreUsuario) or strtolower($nombreUsuario) !=  'admin') {
			header('Location: http://localhost/gamemark/Principal/index.php');
        }

        ?>
		<div class="cabecera">
			<div class="logo">
        		<a href="../Principal/index.php"><img src="GameMark.png"></a>
        		<img src="pad.gif">
        	</div>
        	<div class="buscauser">
				<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    				<input id="buscar" size="30" name="buscar"  type="search" placeholder="Buscar aquí..." autofocus >
    				<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
				</form>
				<div class="user">
        			<a class="auser" href="../Login/login.php">Identificar</a> 
        			<a class="auser" href="../Registrar/login.php">Registrar</a>
        			<a href="#"><img id="carrito" src="carrito.png"></a>
        		</div>
        	</div>
    	</div>
    </header>
    <nav>
    	<section>
			<div class="menu">
				<ul>
				 <li><a href="../Ofertas/ofertas.php">Ofertas</a></li>
				 <li><a href="../Lanzamientos/lanzamientos.php">Lanzamientos</a></li>
				 <li><a href="../Catalogo/catalogo.php">Catalogo</a></li>
				 <li><a href="../Top/Top.php">Top Ventas</a></li>
				 <li><a href="#collage">Quienes somos</a></li>
				</ul>
			</div>
		</section>
	</nav>

	
	<aside>
		<div id="collage">
			<h2>Mensajes</h2>
			<?php 
			$result = mysql_query('SELECT * FROM mensajes', $conexion);
			
			echo '<table class="blueTable">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Usuario</th>';
			echo '<th>Mensaje</th>';
			echo '<th>Fecha</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while ($mensaje = mysql_fetch_array($result)) {
				echo '<tr>';
				echo '<td>' . $mensaje['usuario'] . '</td>';
				echo '<td>' . $mensaje['mensaje'] . '</td>';
				echo '<td>' . $mensaje['fecha'] . '</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';

			mysql_close();

			?>
		</div>
	</aside>
	<footer>
		<div id="redes">
   			<a href="https://www.twitter.com"><img src="iconotwitter.png" id="iconotwitter"></a>
   			<a href="https://www.facebook.com"><img src="facebookicono.jpg" id="iconofacebook"></a>
   			<a href="https://www.instagram.com"><img src="iconoinstagram.png" id="iconoinsta"></a>
   			<a href="https://plus.google.com/discover"><img src="google+.png" id="iconogoogle"></a>
   			<p>&copy; GameMark Inc - 2018</p>
		</div>

	</footer>
</body>	
</html>	