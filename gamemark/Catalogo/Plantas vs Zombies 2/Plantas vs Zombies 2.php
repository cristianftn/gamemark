<!DOCTYPE html>

<html>
<head>
  <title>Plantas</title>
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
      <img src="cabecera.png">   
    </div>
    <div class="titulo">
      <h1>GUERRA EN TU JARDIN</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Plants vs Zombies 2</h1>
          <article class="parrafo">
            <p><b>Los juegos de estrategia tipo Tower Defense es uno de los géneros más extendidos y demandados. Y si existe un precursor de dicho género,
            ese es sin duda Plants Vs Zombies, juego que ha sido disfrutado ya por millones de usuarios de diferentes dispositivos, jugadores que ya pueden hacer
            lo propio con su secuela.</b></p>
          </article>
          <article class="parrafo">
            <p>Sin llegar a los colosales niveles de popularidad alcanzados por ese adictivo título llamado Angry Birds, Plants Vs Zombies es uno de los juegos de
            referencia dentro del mundo de los dispositivos portátiles, ya sean smartphones o tabletas. Dicho título de estrategia se convirtió en el buque insignia
            y en el representante más destacado del género de los Tower Defense , un tipo de juego que ha crecido de manera imparable a lo largo de los últimos años.
            Bien, pues después de mucho tiempo de espera, PopCap Games , sus desarrolladores originales, nos traen la secuela de tal producción, juego que sin innovar
            en demasía nos sigue pareciendo tan atractivo como el genuino</p>
            <img src="plantas2.jpg">
          </article>  
          <article class="parrafo">
            <p>Como ya sucedió con el título original, Plants Vs Zombies 2 nos anima a hacer frente a ejércitos enteros de muertos vivientes que se dan cita en diversos
            jardines, súper variados. El Antiguo Egipto, un barco pirata, ciudades típicas mejicanas y demás lugares igual de exóticos sirven de marco para albergar las
            desafiantes batallas que nos esperan. ¿Y qué debemos hacer en cada uno de estos niveles? Pues colocar las plantas que creamos oportunas para defender
            nuestro jardín de las arremetidas zombi. Este planteamiento estratégico es exactamente el mismo que ya disfrutamos en el original. De esta forma y a través
            de los diferentes paneles que se dan cita en cada caso, debemos ir colocando las plantas guerreras para que actúen de la manera más eficaz posible y
            consigan contener a los rivales.</p>
          </article>
          <article class="parrafo">
            <p>En esta ocasión podemos echar mano de una variedad de plantas más amplia, hecho que aporta aún más profundidad al juego… y que en muchos casos
            también nos permite aplacar de forma más tajante a las nuevas clases de zombis que igualmente se dan cita en esta continuación. Desde luego no estamos
            hablando de innovaciones revolucionarias, más bien todo lo contrario, pero por lo menos aportan algo de frescura a una mecánica de juego ya consabida.
            Y lo mismo sucede con los potenciadores tanto ofensivos como defensivos, que nos permiten eliminar de un toque a una buena cantidad de enemigos o, en
            cambio, elevar la capacidad general de nuestras plantas que sean más efectivas durante un breve espacio de tiempo.<p> 
            <!--<video source src="Plantas.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WXx0X4cDEPI?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="plantas3.jpg">
            </div>
            <div class="valoracion">
              <p>Magnífico</p>
            </div>
              <div class="nota">
              <p>9,1</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Los dispositivos pueden gozar una vez más de la compañía de las plantas y zombis más famosa de esta industria. Esta secuela del famoso título original
            perfecciona su fórmula con nuevas incorporaciones para seguir ofreciendo toneladas de diversión estratégica y mucha simpatía. Un gran juego que merece
            la pena descargar.</b></p>
          </article>
          <article class="ending">
            <img src="plantas4.jpg">
            <div class="proscontras">
              <p>+ Los nuevos tipos zombis y plantas.</p>
              <p>+ Es un título divertidísimo.</p>
              <p>+ Potenciación a base de nutrientes y superpoderes.</p>
              <p>- Es demasiado continuista, gráfica y jugablemente.</p>
              <p>- La dificultad es alta en favor de los micropagos.</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 35 horas</p> 
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
