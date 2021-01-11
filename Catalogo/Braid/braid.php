<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Braid</title>
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
      <h1>UN JUEGO SUBLIME</h1>
    </div>  

        <section class="fondoazul">
          <article class="parrafo">
            <p><b>Cuesta mucho no volcarse ante un título como Braid,
             y es que quienes no tuvieran oportunidad de disfrutar de la versión de Xbox 360 han estado
             estos últimos meses huérfanos de una aventura única y genuina a su manera. Se trataba
             del debut de Number None Inc, el estudio de Jonathan Blow uno de los más prometedores programadores
             para el futuro, y un auténtico experto en videojuegos experimentales. Y precisamente de experimental es como se puede calificar Braid,
             el juego que se hizo con el premio a la Innovación en la edición 2006 del Independent Games Festival.</b></p>
          </article>
          <article class="parrafo">
            <p>Un lanzamiento verdaderamente atípico que en PlayStation 3 es idéntico al que vimos en Xbox Live,
             y que de nuevo trata de explorar los sentimientos de los personajes en su argumento,
             mientras desarrolla una jugabilidad adulta e inteligente en forma de tradicional plataformas bidimensional mezclado con puzzles.</p>
            <img src="braid2.jpg">
          </article>  
          <article class="parrafo">
            <p>Cuando tienes pareja y cometes un error puede que ésta no te lo perdone nunca.
             Así de duro es el amor y esa es precisamente la situación en la que se encuentra Tim, nuestro protagonista,
             que ha cometido un error con su chica que le ha costado la relación.
             Ahora ella se encuentra capturada por una criatura malvada, y el héroe debe salvarla.</p>
          </article>
          <article class="parrafo">
            <p>Como un personaje torturado por su pasado y de inusitada profundidad para un título de estas características,
             seguiremos el periplo de Tim que nos narra con impotencia el error que cometió y que es incapaz de reparar.
             Circunstancia de extremada dureza, pues él tiene la insólita capacidad de retroceder parcialmente en el tiempo para reparar,
             éstos si, los errores que cometa durante la aventura.
             Este poder de Tim sirve para hacer más fácil el componente de plataformas, aparentemente el reinante,
             pero que enmascara tras de si lo que es en realidad Braid, un juego de rompecabezas.<p> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/d1nJ23G8Tzo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </article>
          <article class="barranegra">
            <div class="circulo">
              <img src="braid3.jpg">
            </div>
            <div class="valoracion">
              <p>Magnífico</p>
            </div>
              <div class="nota">
              <p>9,2</p>
            </div>
          </article>
          <article class="parrafo">
            <p>Braid es una de esas joyas que ningún amante de las plataformas se debe perder. Innovador,
             fascinante y divertidísimo se trata de uno de los títulos más brillantes que se pueden encontrar en PlayStation Network.
             Eso sí, cabe aclarar que no se trata de un videojuego para todos los públicos: Su carácter intelectual,
             su tratamiento profundo y adulto y el impecable estilo que desbordan estética y sonido no son aptos para toda clase de jugadores.</p>
          </article>
          <article class="ending">
            <img src="braid4.jpg">
            <div class="proscontras">
                <p>+ Bonita banda sonora y la historia que narra.</p>
                <p>+ Diseño artistico,dibujado a mano por David Hellman.</p>
                <p>+ La historia trata acerca de la superacion personal.</p>
                <p>- Pequeños fallos en la interfaz de usuario.</p>
                <p>- No tiene historia lineal,llegar al final puede no ser lo que realmente esperabas.</p>
            </div>
            <div class="datos">
              <p>🕛Duración: 10-15 horas</p> 
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
