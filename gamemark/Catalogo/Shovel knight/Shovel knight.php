<!DOCTYPE html>

<html>
<head>
  <title>Shovel knight</title>
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <meta charset="utf-8">
</head>
<body>
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
      <h1>PEPITAS DE ORO RETRO</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Shovel Knight</h1>
          <article class="parrafo">
            <p><b>Inspirado por las grandes aventuras de acción y plataformas con las que tanto disfrutamos en el pasado, Shovel Knight refleja a la perfección todo aquello por lo que adoramos los videojuegos. Muy divertido, apasionante en el ritmo de su acción y con un delicioso apartado audiovisual de estilo retro, sin duda estamos ante el mejor homenaje posible a la época dorada de la industria.</b></p>
          </article>
          <article class="parrafo">
            <p>Abatido por la pérdida de su fiel compañera de batallas, presa de un terrible maleficio, el valiente caballero errante Shovel Knight está decidido a acabar de una vez por todas con las fuerzas de la oscuridad. Lo que hará equipado con el arma más poderosa de todas: su preciada pala. Y sí, habéis leído bien. Es una pala igualita a la que usaríais para excavar agujeros en la tierra. Pero a diferencia de todos nosotros, él sí sabe cómo sacarle el máximo partido en su lucha contra los monstruos a los que se enfrentará.</p>
            <img src="shovelknight3.jpg">
          </article>  
          <article class="parrafo">
            <p>Como muy pronto descubriréis en esta fantástica aventura de acción y plataformas en 2D, que nace como un claro homenaje a los grandes clásicos del género con los que tantísimo disfrutamos hace ya más de 20 años. Pero lo hace con un gusto exquisito, rescatando lo mejor de obras de referencia como Castlevania, Mega Man, Ninja Gaiden o DuckTales, pero a la vez conservando también intacta toda su personalidad, que no es poca precisamente. Razón de más por la que hemos caído presas de los encantos de este Shovel Knight, que sin duda se ha convertido ya en una de las sorpresas más agradables de 2014.</p>
          </article>
          <article class="parrafo">
            <p>Diseñado como si de un juego de la mítica NES se tratase, esta obra del estudio independiente Yacht Club Games lleva el concepto "vieja escuela" hasta sus últimas consecuencias para alegría de los apasionados de lo retro, que se van a encontrar con una aventura de acción plataformera de las de antes. De esas en las que podías morir decenas de veces en un mismo nivel sin que importara lo más mínimo, ya que todo era tan divertido que siempre nos incitaba a intentarlo una vez más; a volver a poner a prueba nuestras habilidades sorteando obstáculos y enemigos. Y justo esa es la esencia que conserva Shovel Knight.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/k2gto5TNyX4"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="icono.jpg">
            </div>
            <div class="valoracion">
              <p>Excelente</p>
            </div>
              <div class="nota">
              <p>8,6</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Con el mismo espíritu que los clásicos de hace más de 20 años, pero también con gran personalidad propia, Shovel Knight se ha convertido por méritos propios en una sorpresa con mayúsculas. Su fantástico diseño de niveles, los emocionantes combates contra los jefazos finales y lo depurado de su sistema de control son solo una pequeña parte de esta joyita de estilo retro que no deberíais perderos.</b></p>
          </article>
          <article class="ending">
            <img src="shovelknight2.jpg">
            <div class="proscontras">
              <p>+ Impresionante diseño de niveles. Muy variados entre sí y repletos de desafíos</p>
              <p>+ Sistema de control muy preciso</p>
              <p>+ Montones de secretos, armas especiales con mucha utilidad, fases bonus…</p>
              <p>+ Acción plataformera de la vieja escuela y ¡de enorme calidad!</p>
              <p>+ Los enemigos finales. Fantásticos tanto en su diseño como en su forma de pelear</p>
              <p>- Un gran homenaje a los clásicos del género, pero le falta algo para codearse con ellos</p>
              <p>- Aunque hay montones de extras por desbloquear, se hace algo corto</p>
             
            </div>
            <div class="datos">
              <p>🕞Duracion: 5-7 horas </p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Textos en español</p>
              
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
