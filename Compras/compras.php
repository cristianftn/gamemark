<?php include('../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <title>Compras</title>

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
    <section class="principal">
        <div class="fondoazul"> 
        	<h1 class="compras">LISTA DE LA COMPRA</h1>

        	<?php
            // session_destroy();die;
            if (isset($_REQUEST["id"])) {
                $_SESSION['videojuegos'][$_REQUEST["id"]]['id'] =  $_REQUEST["id"];
                if (!isset($_SESSION['videojuegos'][$_REQUEST["id"]]['cantidad'])) {
                    $_SESSION['videojuegos'][$_REQUEST["id"]]['cantidad'] = 1;
                } else {
                    $_SESSION['videojuegos'][$_REQUEST["id"]]['cantidad'] = $_SESSION['videojuegos'][$_REQUEST["id"]]['cantidad'] + 1;
                }
            }
            $consulta=mysql_query("SELECT * FROM videojuegos WHERE Id_videojuego IN (" . implode(', ', array_keys($_SESSION['videojuegos'])) . ")", $conexion);
            $nfilas = mysql_num_rows($consulta);
            if($nfilas > 0){
                while ($respuesta = mysql_fetch_array($consulta)) {
                    $caratula = "caratula" . $respuesta['Id_videojuego'] . ".jpg";
                    $_SESSION['videojuegos'][$_REQUEST["id"]]['nombre'] = $respuesta['Nombre'];
                    $_SESSION['videojuegos'][$_REQUEST["id"]]['precio'] = $respuesta['Precio'];
                    echo "<img src=$caratula>";

                    echo '<span style=" color:white; font-size:1.5em; margin-top:15px; margin-bottom:10px; font-family: Verdana;">' . $respuesta["Nombre"] . ' ' . $respuesta["Precio"] . ' X ' . $_SESSION['videojuegos'][$respuesta['Id_videojuego']]['cantidad'] . '</span>';
                }
                echo '<div class="confirm">';
                echo '<form method="post" action="realizarPedido.php">';
                echo '<input type="submit" name="confirmar" value="confirmar pedido">';
                echo '</form>';
                echo '</div>';
            }   
            else{
                echo "El videojuego no existe";  
            }
            ?>			
        </div>
    </section>
</body>
</html>


