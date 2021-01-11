<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Gang Beasts</title>
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
      <h1>MAS VALE MAÑA QUE FUERZA</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Gang Beasts</h1>
          <article class="parrafo">
            <p><b>Gang Beasts es un desternillante juego multijugador de peleas absurdas entre personajes gelatinosos y gruñones que tienen lugar en los peligrosos
            entornos de Urbe Ubre.
            Personaliza tu personaje y participa en peleas locales o en línea en los peligrosos bajos fondos de la ciudad. También puedes luchar con tus amigos contra
            los rivales en el modo Banda.</b></p>
          </article>
          <article class="parrafo">
            <p>Para quienes aún no lo conozcan, es un brawler multijugador protagonizado por muñecos de plastilina que pueden hacerse papilla unos a otros, tirarse
            de un edificio o provocar una muerte total. Hay muchos aspectos que son propios de un party game perfecto, e incluso llega a provocar momentos de
            carcajadas estruendosas cuando tienes a unos buenos amigos al lado que convertir en enemigos en esos niveles tan bien pensados para provocar una acción
            descontrolada.
            Sin embargo, esa es solo una mitad de la historia de lo que ocurre con Gang Beasts, que trae muchas risas y poco más. Cada vez que se borra alguien de
            la partida se reduce el nivel de caos y con él la capacidad de entretenimiento del producto. La última vez lo jugamos solo entre dos personas, probando
            multitud de trajes y mapas, y aunque se dieron circunstancias graciosas, ya no era lo mismo que cuando estábamos unos cuantos reunidos.</p>
            <img src="imagen1.jpg">
          </article>  
          <article class="parrafo">
            <p>La mayor parte del tiempo te la pasas intentando coger a otro personaje para hacerle una llave contra un borde o un saliente, con la esperanza de
            que no pueda agarrarse a algo seguro, o de que llegue alguien por detrás a interferir y estropearlo todo. O, aún peor, a ponerte a ti en una situación
            igual de precaria. Para eso están los diseñadores, que se han encargado de crear escenarios con multitud de puntos de riesgo que faciliten este tipo de
            situaciones. Al final la combinación entre unas cosas y otras acaba resultando, aunque queda claro que todo depende más de la suerte que la habilidad.</p>
          </article>
          <article class="parrafo">
            <p>Aunque a veces la cámara se pone en posiciones complicadas, al menos los tiempos de carga entre rondas son aceptables y además hay bastantes niveles
            como para no sentir demasiada repetición en cada rotación. De repente estás luchando en el techo de un camión en marcha y al minuto siguiente en un picador
            de carne, así que es imposible acomodarse en estas condiciones. También hay que decir que a algunos cuesta cogerles el punto uno poco más que a otros,
            porque hay algunos elementos dinámicos peligrosos en los entornos que no se pueden perder de vista. El diseño de niveles, que además contienen elementos
            destructibles, está entre lo mejor del título.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GCXOcj1jtCE?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
            <p><b>Si no eres capaz de reunir a la gente en casa como te estamos diciendo, también puedes lanzarte a buscar amigos virtuales, pero como ya sabemos
            hay cosas que se disfrutan más en carne y hueso y Gang Beasts es una de ellas. Ver las caras, la frustración, el enfado y las risas de los demás es lo
            que da vidilla a un juego así. Es un gran party game para grupos grandes en los que no hay necesidad de medirse la habilidad a los mandos, pero el brawler
            de Boneloaf no da para mucho más, especialmente para las almas solitarias. Busca sus momentos y le sacarás mucho partido. Eso es todo.</b></p>
          </article>
          <article class="ending">
            <img src="imagen2.jpg">
            <div class="proscontras">
              <p>+ Un party game divertido con el que soltarás más de una carcajada.</p>
              <p>- Modos de juego escasos. El control responde regular. No es tan divertido con poca gente.</p>
            </div>
            <div class="datos">
              <p>🕞Duración: Ilimitado</p> 
              <p>🎮Jugadores: 1-4</p>
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
