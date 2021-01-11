<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Limbo</title>
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
      <h1>UNA AVENTURA TAN PELIGROSA COMO EMOTIVA</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Limbo</h1>
          <article class="parrafo">
            <p><b>Una de las propuestas más geniales que hemos visto en los últimos tiempos se llama Limbo. Uno de los mejores juegos descargables
            de Xbox 360 viaja a PlayStation 3 y PC con idéntica y maravillosa dirección artística, y con el mismo sentido de la soledad que tan pocas veces
            hemos experimentado con tanto éxito.</b></p>
          </article>
          <article class="parrafo">
            <p>Con ánimo de demostrar la fortaleza del software descargable en esta generación surgió hace un año Limbo, un nuevo proyecto que permite ver una vez
            más cómo los títulos más originales, innovadores y arriesgados a menudo sólo son posibles gracias a este tipo de circuitos de distribución.
            Pero ¿qué es limbo? Ante todo una joya. Un título que llama poderosamente la atención con sólo su visionado, pero que además cuenta con inefables
            virtudes jugables que hacen muy recomendable su adquisición más allá de sus indiscutibles valores artísticos.</p>
            <img src="limbo2.jpg">
          </article>  
          <article class="parrafo">
            <p>En Limbo seremos un niño pequeño que emprende una gigantesca odisea en busca de su hermana perdida. Nuestro protagonista no es más que una silueta
            oscura con forma de niño, con dos brillantes puntos claros a modo de ojos en su cara. Un simpatiquísimo diseño que entronca claramente con la filosofía
            del videojuego, un título que nos mueve hacia delante en su historia con el minimalismo por bandera: sin necesidad de voces, de narración o de música.
            De hecho la aventura comienza con nuestro pequeño héroe despertando de un mal sueño en mitad de un bosque, y sin más dilación comenzamos a caminar hacia
            la derecha de la pantalla guiados puramente por nuestro instinto. No hay historia ni motivo por el que debamos caminar, sólo un afán de supervivencia que
            rápidamente compartiremos con nuestro alter ego virtual. Así pues Limbo no tiene argumento pero tampoco lo necesita, la jugabilidad y sobre todo la
            potencia estética tienen más fuerza narrativa de lo que muchas superproducciones con complicados guiones pueden ofrecer.</p>
          </article>
          <article class="parrafo">
            <p>En Limbo la muerte es tremendamente habitual independientemente de nuestra destreza, y para lidiar con ese tema el videojuego presenta una serie de
            checkpoints hábilmente colocados para no frustrar al jugador y hacerle descubrir qué ha acabado con él y cómo puede sortearlo en el siguiente intento.
            La muerte constante puede sonar a duro castigo, pero no lo es en absoluto, y es que el jugador descubre con sorpresa qué ha causado su muerte y se fija
            como objetivo para su siguiente oportunidad el superar sea cual sea el obstáculo. Lo que no tiene Limbo es un sistema de niveles o capítulos al uso, al
            margen de los que podemos recuperar desde el menú principal, lo que se traduce en que todo el videojuego está planteado como un todo que podemos recorrer
            de principio a fin sin molestas interrupciones de interludios o tiempos de carga. La idea de que la aventura sea como una pesadilla constante y sin
            descanso está muy presente en las mentes de sus responsables y el resultado en este sentido es soberbio.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/i0Aw6ZXk2dk?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
              <p>8,5</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Impecable artísticamente y con una carga emocional y atmosférica como pocas veces hemos visto, un año después PlayStation 3 y PC disfrutan del
            memorable Limbo. Un lanzamiento memorable que ningún aficionado a los videojuegos como experiencia debe perderse.</b></p>
          </article>
          <article class="ending">
            <img src="limbo3.jpg">
            <div class="proscontras">
              <p>+ Rebuscados puzles.</p>
              <p>+ Su dirección artística y ambientación.</p>
              <p>- Duración escasa</p>
              <p>- Algunos retos son bastantes complicados</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 4-5 horas</p> 
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
