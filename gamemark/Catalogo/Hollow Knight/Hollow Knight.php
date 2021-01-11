<!DOCTYPE html>

<html>
<head>
    <title>Hollow</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="hollow.css">
	 <link rel="stylesheet" type="text/css" href="hollow.js">
	 


</head>
<header>
      <?php
        $conexion = mysql_connect ("localhost","root", "");
        if (!$conexion) {
                die('No se pudo conectar: ' . mysql_error());
        }

        $db = mysql_select_db("gamemark", $conexion);
        if (!$db) {
                die ('No se puede usar gamemark : ' . mysql_error());
        }
        ?>
<body>
<header>
		<div class="cabecera">
		<div class="logo">
        	<a href="../../Principal/index.php"><img src="GameMark.png"></a>
        	<img src="pad.gif">
      	</div>
      	<div class="buscauser">
			<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    		<input id="buscar" size="30" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    		<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
			</form>
				<div class="user">
        	<a class="auser" href="LoginGameMark/login.php">Identificar</a>
          <a class="auser" href="RegistroGameMark/login.php">Registrar</a>
          <a href="../../Compras/compras.php"><img id="carrito" src="carrito.png"></a>
        </div>
      </div>
    </div>
  </header>

  <nav>
    <section>
  		<div class="menu">
  			<ul>
          <li><a href="../../Ofertas/Ofertas.php">Ofertas</a></li>
          <li><a href="../lanzamientos.php">Lanzamientos</a></li>
          <li><a href="../../Catalogo/catalogo.php">Catalogo</a></li>
          <li><a href="../../Top/Top.php">Top Ventas</a></li>
          <li><a href="#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
	</nav>

 <section class="principal">
      <section class="fondoazul">
       <h1 class="precio">LANZAMIENTOS</h1>
		<h2 style="text-align: center; font-weight:bold; color: white;">HOLLOW KNIGHT</h2>
				<article class="parrafo">
					<h4>Descripción</h4>
					<p>Hollow Knight es una vistosa aventura de acción y plataformas en 2D ambientada en un lúgubre mundo de insectos,
               diseñado como si de una película de animación tradicional se tratase. El videojuego invita a explorar cavernas serpenteantes y ciudades antiquísimas lugar de más de 130 enemigos,
               incluidos una treintena de jefazos, a los que combatir con extraños poderes. ¿Preparado para forjar tu propio camino? Hollow Knight bien podría definirse como un auténtico juego
               metroidvania con la esencia Dark Souls... Divertido, épico, emocionante y duro.​</p>
					<iframe height="315" src="https://www.youtube.com/embed/Xv9ZhsDvq5o?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
            </article>
            <article class="parrafo">
					<h4>Jugabilidad</h4>
					<p>El modo de juego de Hollow Knight se enfoca principalmente en exploración, plataformas y combate.
               Los jugadores exploran un gran mundo interconectado usando una variedad de movimientos y técnicas de combate. Al clásico estilo Metroidvania, hay áreas del mundo en el que los jugadores
               no pueden acceder hasta que obtienen algún objeto particular o habilidad. Los mapas para cada área se deben comprar a un comerciante que generalmente se encuentra escondido en esa área,
               y el jugador también puede comprar mejoras que permiten colocar marcadores en el mapa o permiten revelar partes del mapa a medida que van explorando. El guardado del juego solo puede
               hacerse en los bancos para descansar que se encuentran esparcidos por todo el reino.
               El combate del videojuego se centra en el uso del aguijón, un arma que se asemeja a una espada, con el que se puede golpear a los enemigos desde arriba, por debajo o por la izquierda o
               derecha. El aguijón puede ser mejorado para que haga más daño a medida que se progresa en el videojuego y también puede adquirir ataques especiales acumulando energía. Muchas áreas tienen
               un jefe que el jugador deberá derrotar para continuar la aventura, y hay un número de subjefes que dejan caer recompensas o mejoras útiles. Los enemigos derrotados dejan caer Geo, una
               moneda que el jugador puede usar para comprar objetos de los comerciantes. Golpear enemigos repetidamente genera ALMA al jugador, un recurso que puede ser usado para curarse del daño
               recibido o lanzar habilidades especiales como hechizos de largo alcance y explosiones.
               Si el jugador muere, reaparecerá en el último lugar en el que descansó/guardó, perdiendo todo el Geo obtenido y la habilidad de mantener una cantidad máxima de ALMA.
               Sin embargo, puede regresar al lugar donde murió y derrotar a su sombra para poder recuperar el Geo y el límite de ALMA.</p>
            </article>

			<div class="imagenes">
        	
        		<img src="hollow1.jpg" >
        		<img src="hollow2.jpg" >
        		<img src="hollow3.jpg" >
        		<img src="hollow4.jpg" >
			</div>

            <article class="parrafo">
					<h4>Desarrollo</h4>
					<p>Hollow Knight se reveló en Kickstarter en noviembre de 2014 y alcanzó su objetivo de financiación inicial en diciembre del mismo año.
               El videojuego alcanzó el estado beta en septiembre de 2015 y continuó logrando numerosos objetivos del sitio para agregar más contenido luego de que el motor cambiara de Stencyl a Unity.
               Algunos de los objetivos, como el Coliseo de los Insensatos y El abismo, lograron llegar al videojuego, a pesar de que esos objetivos no se habían alcanzado.En junio de 2017,
               Team Cherry se asoció con IndieBox, un servicio de suscripción mensual para crear una versión física y exclusiva del juego. Esta edición limitada de coleccionista incluyó un disco de
               videojuego sin DRM, la banda sonora oficial, un manual de instrucciones, un código de Steam y varios artículos coleccionables diseñados a medida.
               En el mismo mes, Team Cherry anunció una actualización gratuita del videojuego titulado "Hidden Dreams", que se lanzó el 3 de agosto de 2017.
               La actualización incluye dos nuevos encuentros opcionales de jefes, la versión onírica del rival del jugador, Zote, y otra del Defensor del estiércol,
               en su faceta como uno de los cinco caballeros del rey; dos nuevas canciones en la banda sonora, un nuevo sistema de viajes rápidos, y una nueva Estación de ciervo para descubrir.
               Se puede acceder al contenido en cualquier punto del juego, aunque se aconseja esperar hasta el final del juego debido a la dificultad.
               El 26 de octubre de 2017, Team Cherry lanzó la segunda expansión gratuita, titulada "The Grimm Troupe".</p>
				</article>	
		</section>
   </section>
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
