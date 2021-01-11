<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <title>Ori</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="ori.css">
</head>
<body>
	<header>
<?php include('../../layout.php');?>
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
		<h2 style="text-align: center; font-weight:bold; color: white;">ORI AND THE WILL OF THE WISPS</h2>
          <article class="parrafo">
            <h4>Descripción</h4>
            <p>Ori and the Will of the Wisps es un próximo videojuego de género aventura-plataforma y Metroidvania desarrollado por Moon Studios y
             publicado por Microsoft Studios para Microsoft Windows y Xbox One. Es una continuación del título de 2015 Ori and the Blind Forest y fue anunciado
             durante el E3 2017.El juego está planeado para ser un título de 4K UHD, con mejoras para Xbox One X y Xbox Play Anywhere.​</p>
            	<iframe width="560" height="315" src="https://www.youtube.com/embed/n0jIUSAik2k?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>

          </article>
          <article class="parrafo">
            <h4>Jugabilidad</h4>
            <p>Los jugadores asumen el control de Ori, un espíritu guardián blanco. Para progresar en el juego, los jugadores tienen la tarea de moverse entre
            plataformas y resolver acertijos. Al igual que en The Blind Forest, se espera que Will of the Wisps cuente con un sistema llamado "soul links", que
            permite a los jugadores ahorrar a voluntad, y un sistema de actualización que les da a los jugadores la capacidad de fortalecer las habilidades de los Ori.
            El mundo del juego se despliega al jugador a la manera de un Metroidvania, con nuevas habilidades que permiten al jugador acceder a áreas previamente
            inaccesibles. Algunos de los elementos fundamentales del juego fueron inspirados por las franquicias Rayman y Metroid.La historia del juego se centra
            en una nueva aventura para descubrir el mundo más allá del bosque de Nibel, descubrir las verdades de los perdidos y desenterrar el verdadero destino
            de Ori.</p>
          </article>
				
        
          <div class="imagenes">
              <img src="1.jpg">
              <img src="2.jpg">
              <img src="3.jpg">
              <img src="4.jpg">
         </div>
          <article class="parrafo">
            <h4>Desarrollo</h4>
            <p>El juego fue anunciado en el E3 2017 el 11 de junio de 2017 con un trailer.El trailer muestra nuevas tierras, y a Ori con un búho joven.
            Gareth Coker, que actuó durante la presentación del E3,para volver a componer la partitura.Los desarrolladores principales de Moon Studios Gennadiy
            Korol y Thomas Mahler comentaron que el equipo es "locamente iterativo" a la hora de desarrollar el juego.
            Por ejemplo, el tráiler del E3 2017 pasó por 2.000 iteraciones durante el pulido.En cuanto a establecer el estándar y la visión del juego,
            Mahler dijo que "Will of the Wisps debería ser para Blind Forest lo que Super Mario Bros fue para el original Super Mario Bros."
            .​El 7 de agosto de 2017 se anunció la incorporación del desarrollador de AM2R Milton Guasti al equipo Ori como diseñador de niveles.
            Moon Studios lanzó un video en octubre de 2017 que mostraba el programa de diseño utilizado para desarrollar la cinemática del juego.
            Según se informa, el programa permitió a los animadores hacer cambios mientras estaban en curso y, por lo tanto, permite un proceso más flexible
            y racionalizado.Un segundo trailer fue revelado en el E3 2018 el 10 de junio de 2018, mostrando nuevos NPCs, jefes, movimiento y habilidades de
            combate, y revelando su fecha de lanzamiento en 2019.</p>
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
