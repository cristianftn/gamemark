<!DOCTYPE html>

<html>
<head>
  <title>Dead Cells</title>
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
      <h1>UN DESCENSO A LOS INFIERNOS</h1>
    </div>  

        <section class="fondoazul">
          <article class="parrafo">
            <p><b>Un fallo ¡y estás muerto! Así es esta desafiante aventura de acción 2D a medio camino entre los clásicos Castlevania y los roguelike. Lucha, muere y
            aprende pues, como veremos en el análisis de Dead Cells, la experiencia es divertida y muy adictiva.</b></p>
          </article>
          <article class="parrafo">
            <p>Mueres, ¡gritas con furia!, y sigues adelante. Nunca te rindes, nunca te desanimas. Por dura que sea la batalla; por crueles las muertes sufridas
            a manos de unos monstruos implacables, brutales en sus acometidas, siempre quieres más. Es la gran virtud de Dead Cells, una desafiante aventura de
            acción 2D que sus creadores definen como "el hijo ilegítimo de los roguelike y las aventuras de estilo metroidvania", ¡un RogueVania!, que es un
            apelativo que le viene como anillo al dedo. Combina lo mejor de ambos géneros y a esa unión le añade una pizca de esencia Souls; el toque perfecto
            para hacer de este un videojuego de los que dejan huella. Lo pruebas y ya no piensas en otra cosa; a pesar de su dureza, de su extremo nivel de dificultad,
            de una u otra forma, siempre tienes ganas de intentarlo "una vez más; será la definitiva, la buena". No suele ser así. Esta obra del estudio independiente
            Motion Twin suele acabar mal, muy mal; con tu sangre derramada por las frías estancias de un lúgubre castillo que en los últimos días se ha convertido en
            mi nuevo hogar. ¡Qué pesadilla!</p>
            <img src="imagen1.jpg">
          </article>  
          <article class="parrafo">
            <p>Por norma general cuando los escenarios se crean de forma procedimental su diseño no suele ser el más inspirado, pero el caso de Dead Cells es distinto
            pues todo su mundo se ha diseñado "a mano". Hay varios modelos del tenebroso castillo así que cada vez que inicias un nuevo recorrido, cada vez que
            comienzas el asalto, se dibuja ante ti un gran y oscuro escenario de batalla con personalidad propia. Motion Twin se queda así con lo mejor de ambos
            mundos: por un lado el diseño de niveles está a la altura de lo esperado en un videojuego de estas características, pero sin grandes alardes tampoco;
            y por otro, con la apuesta por los contenidos procedurales, en lugar de "confiar en la fórmula clásica de memorizar" los mapas y la posición de los
            enemigos, se premia la capacidad del jugador para adaptarse a los muchos peligros que acechan en las sombras. No es baladí dada la facilidad con la
            que mueres y todo se reinicia.</p>
          </article>
          <article class="parrafo">
            <p>La tensión que se respira durante estos duelos es también digna de mención. Sabes que un fallo puede llevarte a la tumba y los enemigos buscarán con
            tesón cumplir esa amenaza. Los hay que atacan cuerpo a cuerpo, que pueden embestirte con gran celeridad, y los que golpean desde la distancia; hechiceros,
            arqueros, plantas que generan trampas bajo tus pies, y monstruos que al morir dejan caer tras de sí un reguero de bombas. También hay enemigos especiales,
            la élite en este infierno 2D, que os lo harán pasar condenadamente mal. Ya no es solo que golpeen con más fuerza, es que también invocan muertos vivientes
            y pueden teletransportarse de aquí para allá a gran velocidad. ¡Es una pesadilla! Pero una que emociona, que te hace disfrutar de cada segundo con
            Dead Cells. He echado en falta algo más de variedad en estos enfrentamientos y también algún villano final extra, pues estos no abundan, aunque bien
            es cierto que estas batallas pueden ser épicas a un nivel extremo.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/R2OkrZq0h6A?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="icono.jpg">
            </div>
            <div class="valoracion">
              <p>Magnífico</p>
            </div>
              <div class="nota">
              <p>9,0</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Los fallos se castigan con una dureza terrible, ¡puede ser dramático!, pero Dead Cells es tan intenso y emocionante en su acción que poco importa
            morir una y otra vez, caer en combate y perder todas las armas y tesoros acumulados hasta el momento. Esta aventura RogueVania combina lo mejor de los
            clásicos Castlevania con la esencia de los roguelike, y lo hace con una elegancia envidiable, con un gran apartado visual y frenético sistema de combate
            que te hace disfrutar como pocos juegos consiguen.</b></p>
          </article>
          <article class="ending">
            <img src="imagen2.jpg">
            <div class="proscontras">
              <p>+ Intenso sistema de combate con gran variedad de armas y objetos especiales</p>
              <p>+ Gran estilo pixel art. El diseño de escenarios, monstruos y las animaciones</p>
              <p>+ Desafiante y adictivo. Siempre quieres echar una partida más</p>
              <p>- Se echan en falta más enemigos finales</p>
              <p>- El diseño de niveles está bien, pero no sorprende como otros títulos del estilo</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 12-15 horas (mínimo)</p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Textos en español y voces en inglés</p>
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
