<?php include('../../conexionBBDD.php');?>

<!DOCTYPE html>

<html>
<head>
  <title>Celeste</title>
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <meta charset="utf-8">
</head>
<body>
  <header>

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
      <h1>LA CUMBRE DE LOS PLATAFORMAS 2D</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Celeste</h1>
          <article class="parrafo">
            <p><b>Sabíamos que tenía potencial para convertirse en un gran videojuego de plataformas en 2D, pero jamás imaginamos que lo nuevo de los autores de TowerFall Ascension fuera capaz de sorprendernos como lo ha hecho. En el análisis de Celeste nos rendimos a los encantos de una auténtica obra maestra; uno de esos títulos que gracias a su potente base jugable, pero también al precioso mensaje que transmite, será difícil de olvidar.</b></p>
          </article>
          <article class="parrafo">
            <p>Un videojuego memorable, de los que dejan huella, que está llamado a convertirse en uno de los más grandes del presente año. Así de espectacular es el nuevo trabajo de los autores de TowerFall Ascension, que han dado vida a una de las mejores y más emocionantes aventuras de plataformas 2D de los últimos años. Su acción es trepidante, ¡no hay ni un segundo de respiro!, pero la mayor virtud de este juego de estilo retro es su capacidad para sorprenderte una y otra vez con nuevos desafíos... ¡y su propia historia!, que aquí ejerce un protagonismo fuera de lo común sin entorpecer por ello al videojuego. Al contrario. El equipo de Matt Makes Games ha realizado un trabajo soberbio integrando la narrativa en el propio diseño de escenarios, en la propia concepción de los desafíos a los que te enfrenta, haciéndote partícipe de las desventuras de la pobre Madeline, que sin saber muy bien por qué, se ha propuesto escalar una peligrosa montaña.</p>
            <img src="celeste3.jpg">
          </article>  
          <article class="parrafo">
            <p>Madeline cuenta con dos habilidades especiales que lo son todo en Celeste: la escalada, su capacidad de trepar por superficies verticales hasta que se le agoten las fuerzas; y el impulso, con el que se desplazará a toda velocidad en cualquier dirección, ¡aunque con limitaciones!, pues hay que pisar suelo, o ciertas superficies especiales, para recargar este movimiento acrobático. No necesita mucho más el videojuego de Matt Make Games para reinventar la fórmula una y otra vez presentando desafíos cada vez más enrevesados, cada vez más espectaculares, con los que es difícil no exclamar gritos de admiración mientras sonreís como niños.</p>
          </article>
          <article class="parrafo">
            <p>Trampas oscilantes, ráfagas de viento, proyectiles, caminos atestados de afiladas estacas y ni una sola superficie donde posar los pies... cada nueva región que exploras en la montaña te descubre nuevas formas de morir, ¡y lo haréis!, pero lejos de frustrar, Celeste te anima a seguir adelante.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HV0yJ2cae9Q"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="icono.jpg">
            </div>
            <div class="valoracion">
              <p>Imprescindible</p>
            </div>
              <div class="nota">
              <p>9,5</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Una obra maestra. Sin más. El equipo de Matt Make Games ha dado vida a una aventura de plataformas 2D simplemente maravillosa. Su trepidante acción, su increíble diseño de niveles, ¡lo adictivo que resulta! son solo una pequeña parte de Celeste. Con una historia muy personal, que va directa al corazón, este videojuego de estilo retro se va a convertir, sin dudarlo, en uno de los grandes de 2018. ¡Un imprescindible!</b></p>

          </article>
          <article class="ending">
            <img src="celeste2.jpg">
            <div class="proscontras">
              <p>+ Acción trepidante y muchos desafíos con los que poner a prueba nuestra habilidad</p>
              <p>+ La historia que cuenta, cómo lo hace, y los personajes protagonistas</p>
              <p>+ Increíble diseño de niveles que rara vez deja de sorprender</p>
              <p>- Solo en el tramo final el videojuego pierde algo de frescura</p>
             
            </div>
            <div class="datos">
              <p>🕞Duracion: 6-12 horas </p> 
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
