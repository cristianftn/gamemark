<?php include('../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <title>Compras</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="compras.css">
</head>

<body>
    <header>
     <?php require('../layout.php') ?>
 		<div class="cabecera">
			<div class="logo">
        		<a href="../Principal/index.php"><img src="GameMark.png"></a>
        		<img src="pad.gif">
        	</div>
        
            <a href='<script>#txtHint</script>' Sugerencias:> <span id="txtHint"></span></a>
			<div class="user">
                <?php require('../usuario.php') ?>
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
				 <li><a href="../Principal/index.php#collage">Quienes somos</a></li>
				</ul>
			</div>
		</section>
	</nav>

<?php 
	
	foreach ($_SESSION['videojuegos'] as $videojuego) {
		$importe[] = $videojuego['precio'];
	}
	$importe = array_sum($importe) * $videojuego['cantidad'];
	if(isset($_SESSION['nombre'])){
	$pedidoValue = '(NOW(), "' . $_SESSION['nombre'] . '", ' . $importe . ')';
	    echo '<section class="principal">
        <div class="fondoazul"> 
        	<h1 class="compras">Pedido realizado con éxito</h1>
        </div>
    </section>';
    	$pedido = mysql_query("INSERT INTO pedidos (Fecha_pedido, Nombre_usuario, Importe_total) VALUES $pedidoValue", $conexion);
	}
	else{
		    echo '<section class="principal">
        <div class="fondoazul"> 
        	<h1 class="compras">Necesitas estar registrado para hacer esta operación</h1>
        </div>
    </section>';
    session_destroy();
	}

	foreach ($_SESSION['videojuegos'] as $videojuego) {
		mysql_query('INSERT INTO pedido_videojuegos (id_pedido, id_videojuego, cantidad) VALUES ((SELECT MAX(Numero_pedido) FROM pedidos), ' . $videojuego['id'] . ',' . $videojuego['cantidad'] . ')', $conexion);
	}
?>
</body>
</html>