<!DOCTYPE html>
 <html>
<head>
    <title>RiME</title>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="rime.css">
</head>
<header>
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
		<h2 style="text-align: center; font-weight:bold; color: white;">RiME</h2>
     <article class="parrafo">
       <h4>Descripción</h4>
       <p>El diseño conceptual del juego empezó durante el desarrollo de Deadlight.4​ La primera versión de Rime
       nació como juego de rol de acción, denominado Echoes of the Siren. El juego iba a incluir mecánicas de caza y
       creación de objetos durante el día, para transformarse en un juego de tipo tower defense durante la noche.
       Otros elementos claves iban a ser la exploración y el desarrollo y personalización del personaje.​</p>
       <iframe height="315" src="https://www.youtube.com/embed/dnjJc-PAQaM?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
     </article>
     <article class="parrafo">
          <h4>Jugabilidad</h4>
          <p>En un principio parece que tendremos muchos puzzles que resolver, y de dificultad ascendente, pero esta parte prácticamente es
          exclusiva del primer capítulo, hecho decepcionante para mi, ya que esperaba más en este aspecto.
           En lo jugable poco más ofrece, ya que tanto el plataformeo como la exploración están muy guiados, con el camino a seguir "marcado"
           para que no nos perdamos. La único que nos puede desviar de la senda es la búsqueda de
           los típicos coleccionables que ayudan un poco a entender mejor la historia que empieza de una manera muy colorida y alegre.</p>
     </article>
          
         <div class="imagenes">
              <img src="rime1.jpg">
              <img src="rime2.jpg">
              <img src="rime3.jpg">
              <img src="rime4.jpg">
         </div>
    <article class="parrafo">
          <h4>Desarrollo</h4>
          <p>El juego se ofreció a Microsoft para ser publicado como título exclusivo de Xbox Live Arcade (XBLA) y Windows 8.
          Aunque inicialmente Microsoft dio luz verde al proyecto, posteriormente se echó atrás debido a la línea editorial de XBLA,
          que enfatizaba el juego online y las funciones sociales. Sony se interesó por el
          juego, lo financió y este se convirtió en un título exclusivo de PlayStation 4, pero a lo largo del desarrollo, por motivos
          desconocidos, las relaciones entre ambas empresas empeoraron, y finalmente se desarrolló de manera multiplataforma para PS4, XboxOne, Nintendo Switch y PC
          El primer avance se mostró en agosto de 2013, en la sección de juegos indie de la rueda de prensa de Sony en la Gamescom, mostrando un
          videojuego de aventuras en tercera persona con un diseño artístico de tipo Cel shading que hizo que la se le comparara con los juegos
          del Team Ico, el aclamado Journey de Thatgamecompany y Wind Waker de la saga Zelda, recibiendo una acogida muy positiva por parte de la
          prensa especializada</p>
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
