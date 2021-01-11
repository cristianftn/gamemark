<!DOCTYPE html>

<html>
<head>
  <title>Undertale</title>
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
      <h1>AQUEL QUE COMBATE A LOS MONSTRUOS...</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Undertale</h1>
          <article class="parrafo">
            <p><b>No intentes comprender Undertale sin tan siquiera haberlo experimentado durante unas horas. La única forma de hacerlo es jugándolo, y para entonces,
            puede que ya sea demasiado tarde y estés atrapado en el mundo más extraño, adorable y divertido que hayas visto en un videojuego.</b></p>
          </article>
          <article class="parrafo">
            <p>Antes de empezar a leer, mira bien las imágenes y pregúntate cómo un título que puede lucir tan poco atractivo a primera vista está siendo la
            sensación del momento, no sólo en la crítica sino en un público totalmente entregado que recomienda este Undertale a niveles casi obligatorios.
            Puede ser lógico preguntárselo, pero sólo quien sea capaz de dar el salto al vacío será capaz de comprenderlo. No te lo puede explicar una imagen
            ni un vídeo ni un amigo, ni este mismo análisis. Entender Undertale es un acto de fe.</p>
            <img src="imagen1.jpg">
          </article>  
          <article class="parrafo">
            <p>Otra de las razones por las que es tan difícil realizar una crítica de Undertale es por el temor a descubrir demasiado. A eso que le hace tan especial,
            esparcido y estropeado en un puñado de frases. Intentar explicarlo es como diseccionar un cadáver para encontrar el alma, porque Undertale no es, ni mucho
            menos, la suma de sus partes. Hay algo intrínseco en él, entre su aspecto absurdo, sus diálogos carentes de sentido y sus situaciones histriónicas que
            conecta con cada uno de nosotros a diferentes niveles.</p>
          </article>
          <article class="parrafo">
            <p>Undertale es eso que ocurre cuando un diseñador se sale de la norma y logra desinfectarse de todos los vicios que ha cogido la industria del videojuego
            desde hace tanto tiempo. Sí, hay elementos de RPG, de arcade puro, de minijuegos, de historia con decisiones morales, pero nada está resuelto como estamos
            acostumbrados. Quizá esa sea su magia.<p> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HQY0V2G9gc8?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
          </article>
          <article class="barranegra">
            <div class="circulo">
              <img src="icono.jpg">
            </div>
            <div class="valoracion">
              <p>Magnífico</p>
            </div>
              <div class="nota">
              <p>8,9</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Undertale puede considerarse una rareza, pero una de esas que ocurren cuando la forma de hacer videojuegos es tan uniforme y tan constreñida
            que sólo tomando el camino contrario se consigue sorprender. Pero la obra de Toby Fox no es sólo una anécdota. Está perfectamente planteada y esconde
            algo que conecta directa e indirectamente con todo aquél que haya pasado demasiado tiempo con un mando entre las manos.</b></p>
          </article>
          <article class="ending">
            <img src="imagen2.jpg">
            <div class="proscontras">
              <p>+ De lo más original que encontrarás este año</p>
              <p>+ La forma que tiene de huir de la repetición</p>
              <p>+ No rompe. Revienta la cuarta pared</p>
              <p>- No es algo negativo, pero no es un título para todo el mundo</p>
              <p>- El tramo final puede no estar a la altura del resto</p>
            </div>
            <div class="datos">
              <p>🕞Duración: Duración: 15 horas (mínimo)</p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Textos en inglés</p>
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
