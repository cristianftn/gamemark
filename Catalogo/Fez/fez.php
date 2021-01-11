<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Fez</title>
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
      <h1>UNA ODA JUGABLE A LOS 8 BITS</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Fez</h1>
          <article class="parrafo">
            <p><b>Quién decía que el amor a primera vista no existe? Porque sinceramente, lo que sentimos por FEZ solo puede definirse como tal. No ya solo por lo
            condenadamente bueno que es, que lo es; sino también, porque al disfrutar de esta aventura bidimensional hemos rememorado nuestra infancia disfrutando
            de aquellos maravillosos plataformas de los 8 bits. Y lograr eso no se paga ni con todo el oro del mundo.</b></p>
          </article>
          <article class="parrafo">
            <p>¿Y es de verdad tan bueno? La respuesta es sí, un rotundo sí. Porque dentro de la simpleza que supone encontrarse con un plataformas bidimensional
            en el que únicamente podemos andar, saltar y trepar por zonas preparadas para ello, FEZ se desmarca de la competencia con un diseño de niveles tan brillante
            que no podemos ni imaginar lo difícil que tiene que haber sido desarrollar el juego. Porque no hay que olvidar que combina una jugabilidad puramente 2D
            con unos mundos diseñados en tres dimensiones, permitiéndonos rotar la cámara de izquierda a derecha para dar con los cuatro lados de cada nivel.
            De este modo, lo que visto de frente puede parecer un abismo insalvable, girando la cámara puede convertirse en un puente que nos lleve por el camino
            deseado. Y así, mil y un ejemplos distintos que resultan apasionantes.</p>
            <img src="fez1.jpg">
          </article>  
          <article class="parrafo">
            <p>Apilar cajas, usar explosivos para abrir caminos ocultos, mover grandes bloques de terreno… Antes decíamos que FEZ es un título que nunca deja de
            sorprender, y eso es algo que no nos cansaremos de recordar. Sin enemigos a los que derrotar ni el tiempo en nuestra contra –ni siquiera se puede morir-,
            todo está diseñado para que nos sumerjamos en el cuadriculado mundo de Gómez sin preocuparnos de nada más que explorar a conciencia cada palmo de terreno.
            Y os garantizamos que este ha sido todo un acierto. Sobre todo porque es un gustazo perderse por este colorista universo tratando de resolver los
            ingeniosos rompecabezas que plantea, a la vez que se disfruta de emocionantes secciones de plataformeo en las que el cambio de perspectiva estará a la
            orden del día. Por todo ello, y a pesar de que a la hora de saltar Gómez no es todo lo preciso que debería, e incluso a veces podemos vernos abrumados
            ante tantas puertas abiertas a decenas de niveles distintos, FEZ es un título que atrapa desde el principio.</p>
          </article>
          <article class="parrafo">
            <p>Y lo hace tanto en lo jugable, con magníficos homenajes a clásicos del género como Tetris o Super Mario Bros. (esa tubería que nos lleva a las
            alcantarillas…), como en lo audiovisual, presentando un estilo tan propio de la generación de los 8 bits que es imposible que los veteranos se resistan
            al encanto que desprende cada pixel de FEZ. Y es que estamos ante un título bellísimo que, más allá de esa apariencia arcaica, ofrece una variedad de
            localizaciones envidiable, todas ellas cargadas de detalles tan importantes como la fauna y flora propia de cada entorno, o las transiciones entre el día
            y la noche.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/p71R1MBI8tE?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
              <p>8,8</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Podríamos pasarnos todo el día recopilando las virtudes de FEZ, pero creemos que este es uno de esos juegos en los que sobran las palabras.
            Es muy bueno, tiene encanto, es único y consigue rememorar a los grandes clásicos de nuestra infancia ¿Qué más se puede pedir por 10 euros? Hazte un
            favor y cómpralo, porque ahora mismo hay muy pocos juegos descargables que puedan hacerle sombra.</b></p>
          </article>
          <article class="ending">
            <img src="fez2.jpg">
            <div class="proscontras">
              <p>+ Mecánicas originales,estética,simpatía,ambientación,sonido...</p>
              <p>- El mapa es algo confuso.</p>
              <p>- Perderse puede resultar fácil.</p>
              <p>- Llega a volverse algo difícil según avanzas.</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 7-12 horas</p> 
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
