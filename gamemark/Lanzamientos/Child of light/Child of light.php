<!DOCTYPE html>

<html>
<head>
    <title>Child</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="child.css">
	 <link rel="stylesheet" type="text/css" href="child.js">
	 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
<header>
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
          <a href="../Compras/compras.php"><img id="carrito" src="carrito.png"></a>
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
		<h2 style="text-align: center; font-weight:bold; color: white;">CHILD OF LIGHT</h2>
				<article class="parrafo">
					<h4>Descripción</h4>
					<p>Child of Light tiene lugar en la tierra mítica de Lemuria. Aurora,
					una niña, se encuentra en Lemuria después de desparecer de su casa. Para regresar a su mundo,
					ella debe recuperar el sol, la luna y las estrellas de Lemuria que han sido robadas por Umbra la Reina de la Oscuridad​</p>
					<iframe height="315" src="https://www.youtube.com/embed/EyRRi3DJZDw?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
     </article>
     <article class="parrafo">
					<h4>Jugabilidad</h4>
					<p>Child of Light se describó tener atributos de side-scroller y
               videojuego de rol.El combate uso un sistema similar al sistema de batalla activa en videojuegos como Final Fantasy
               y Grandia.El jugador puede controlar hasta dos personajes en batalla, mientras los otros personajes pueden ser
               usado para la sustitución. Se puede encontrar hasta tres enemigos en batalla. Dependiendo de la dirección al acercarse
               al enemigo, el inicico de la batalla será distinto. Si el jugador se acerca los enemigos desde atrás, se considera un
               "Golpe Sorpresa" que da ventaja al jugador. Si los enemigos se acercan el jugador, se considera una "Emboscada" que da
               ventaja a los enemigos. El carácter Igniculus es una mecánica especial en el juego.
               El jugador puede mover Igniculus libremente como un cursor de ratón para ralentizar enemigos o curar aliados.</p>
      </article>


      		<div class="imagenes">
        	
        		<img src="child1.jpg" >
        		<img src="child2.jpg" >
        		<img src="child3.jpg" >
        		<img src="child4.jpg" >
        	</div>
					
               <article class="parrafo">
					<h4>Desarrollo</h4>
					<p>Inicialmente, se reveló en GDC Europe 2013 por Patrick Plourde, Child of Light se inspiró por estilos de arte de Studio Ghibli y Yoshitaka Amano, además la presentación es similar a videojuegos como Vagrant Story, Final Fantasy VIII y Limbo.Durante el desarrollo,
						el programador principal fue Brie Code.
						La banda sonora original tiene 18 pistas y se compone por Béatrice Martin, se conoce también como Cœur de Pirate, una cantautora de Québec.
						Child of Light ganó reseña positiva mayormente.
						En 30 de abril de 2015, Ubisoft publicó un libro electrónico titulado Child of Light: Reginald the Great para celebrar el primer aniversario de el videojuego. Escribó por autor del juego Jeffrey Yohalem, la historia del libro introdujo un nuevo carácter Reginald y su odisea en Lemuria.</p>
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
