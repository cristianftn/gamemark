<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Youtubers Life</title>
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <meta charset="utf-8">
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
          <a class="auser" href="../../Login/login.php">Identificar</a>
          <a class="auser" href="../../Registrar/login.php">Registrar</a>
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
          <li><a href="../../Lanzamientos/lanzamientos.php">Lanzamientos</a></li>
          <li><a href="../catalogo.php">Catalogo</a></li>
          <li><a href="../../Top/Top.php">Top Ventas</a></li>
          <li><a href="#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
	</nav>

  <section class="principal">
    <div class="imagencuphead"> 
      <img src="cabecera.jpg">   
    </div>
    <div class="titulo">
      <h1>VIVE TU EXPERIENCIA COMO YOUTUBER</h1>
    </div>  

        <section class="fondoazul">
            <h1>Análisis Youtubers Life</h1>
          <article class="parrafo">
            <p><b>Youtubers Life es un videojuego que mezcla los géneros tycoon y simulador de vida en el que podrás convertirte en el mayor vídeo blogger de la
            historia. Edita vídeos, consigue suscriptores para tu canal y alcanza la fama.</b></p>
          </article>
          <article class="parrafo">
            <p>La aventura curiosamente empieza por el final: eres un youtuber de éxito que ha llegado a lo más alto, tiene su propio grupo de youtubers a su servicio
            y vive su día a día sin reparar en gastos. Así que tú mismo te encargas de narrar cómo llegaste a triunfar desde que grabaste tu primer vídeo en casa de
            tus padres.</p>
            <img src="imagen1.jpg">
          </article>  
          <article class="parrafo">
            <p>Tu versión futura se dedicará a hacer de tutor sobre las tareas más básicas a las que vas teniendo acceso en un principio. La aventura comienza desde
            tu habitación, donde grabarás tus primeros vídeos con el PC que a duras penas consigue encender con juegos que difícilmente puedes comprar en un principio,
            pero que tus amigos te darán a cambio de que les hagas los gameplays que te piden con una fecha límite a modo de reto.</p>
          </article>
          <article class="parrafo">
            <p>¿Al empezar el juego en tu adolescencia tienes que compaginar tu afición por los videojuegos con los estudios, y buscando otras formas de conseguir
            ingresos para comprar más juegos actuales que analizar, porque la audiencia es exigente con esto.Tardarás algo en empezar a ganar dinero con tu nueva
            afición y las apariciones furtivas de tu madre te recordarán que tu nuevo hobby podría durar muy poco si no dedicas suficiente tiempo a tus estudios<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_lVPvAIFeTQ?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="icono.png">
            </div>
            <div class="valoracion">
              <p>Excelente</p>
            </div>
              <div class="nota">
              <p>9,5</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>El número de factores a tener en cuenta irán creciendo según avanzamos en la vida de nuestro personaje, haciendo más complejo mantener el
            equilibrio sin ser especialmente pesado para la experiencia en ningún momento, hasta tal punto es visible que no pretende ser muy espeso en esta
            parte cuando existe visiblemente un ciclo del paso del tiempo del día a la noche, pero no hay horarios concretos para ninguna tarea más allá de las
            fechas límites para cumplir ciertos objetivos o retos. Es decir, nuestro personaje puede ir a estudiar de noche y comerse un bocata antes de acostarse
            durante el día mientras renderiza un nuevo vídeo para su audiencia.</b></p>
          </article>
          <article class="ending">
            <img src="imagen2.jpg">
            <div class="proscontras">
              <p>+ Apartado gráfico sencillo</p>
              <p>+ Destila bastante humor</p>
              <p>+ Guiños repartidos con referencias a juegos y situaciones del mundo del youtuber</p>
              <p>- Los personajes que se parecen demasiado entre sí</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 15-20 horas</p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Textos en Castellano</p>
            </div>
          </article>        
        </section> 
     </section>  

   <footer>
      <div class="redes">
         <a href="https://www.twitter.com"><img src="iconotwitter.png" id="iconotwitter"></a>
         <a href="https://www.facebook.com"><img src="facebookicono.jpg" id="iconofacebook"></a>
         <a href="https://www.instagram.com"><img src="iconoinstagram.png" id="iconoinsta"></a>
         <a href="https://plus.google.com/discover"><img src="google+.png" id="iconogoogle"></a>
         <p>&copy; GameMark Inc - 2018</p>
      </div>
   </footer>
  
   
</body>
</html>
