<!DOCTYPE html>

<html>
<head>
  <title>StardewValley</title>
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
      <h1>VIDA NATURAL, TRABAJO ADICTIVO</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Stardew Valley</h1>
          <article class="parrafo">
            <p><b>Ver prosperar tu granja tras horas de duro trabajo es una de las experiencias más reconfortantes que puedes encontrar hoy en día en PC.
            No es de extrañar por tanto que Stardew Valley se haya convertido en un auténtico éxito de ventas. Su colorido y armonioso ritmo de la acción, la libertad
            que brinda para que trabajes a tu gusto y, sobre todo, sus amplias opciones de juego hacen de él un título muy recomendable.</b></p>
          </article>
          <article class="parrafo">
            <p>Este colorido simulador de vida en la granja es una pequeña gran joya capaz de enamorar incluso a aquellos que no sienten especial predilección por
            la temática. Es una obra con mucho encanto, divertida, que una vez pruebas ya no quieres abandonar por nada del mundo pues ¡siempre tienes algo que hacer!
            Nuevos cultivos que cosechar, animales a los que alimentar, objetos que fabricar, e incluso tesoros por descubrir en las profundidades de la tierra como
            si de una aventura de rol se tratase. Y en todos estos casos Stardew Valley funciona con una solidez jugable digna de mención. Lo que tiene un mérito
            increíble teniendo en cuenta que nace de manos de una única persona, Eric Barone, que decepcionado por el rumbo que había tomado su adorada serie
            Harvest Moon decidió cuatro años atrás crear su propio juego de granjeros. Visto resultado no podíamos estar más felices por esta decisión.</p>
            <img src="valley2.jpg">
          </article>  
          <article class="parrafo">
            <p>Lejos de agobiarte con infinidad de tareas rutinarias y facturas imposibles de pagar, que de eso saben mucho los más experimentados en el género,
            Stardew Valley te deja ir por libre, sin presiones, para que seas tú quien marque el ritmo de la partida. Así que no pasa nada si un día en vez de plantar
            semillas o picar piedra os vais a pescar, o simplemente paseáis por la aldea para entablar amistad con los entrañables personajes que en ella habitan.
            No se acaba el mundo por ello… y es un alivio, que otros títulos del estilo te atosigan, casi que te obligan a repetir una y otra vez las mismas tareas
            con tal de hacer prosperar tus tierras. Y eso termina por agotar</p>
          </article>
          <article class="parrafo">
            <p>Los días pasan, los cambios de estación llegan y con ello la necesidad de rotar los cultivos, pero en Stardew Valley todo esto sucede de una forma tan
            armoniosa y relajada que es difícil sentirse abrumado aun cuando son tantas las opciones a tu alcance. Que no todo consiste en plantar hortalizas y talar
            árboles; también debes cuidar de varios animales, elaborar productos como la mayonesa o la miel, fabricar objetos decorativos o de utilidad para la granja
            como espantapájaros mediante un sistema de artesanía bastante completo, preparar platos de cocina e incluso, si os da por ahí, podéis convertiros
            momentáneamente en el héroe de una aventura de rol adentrándoos en las oscuras minas, donde os enfrentaréis a toda clase de monstruos que, por supuesto,
            os proporcionarán materias primas ideales para crear mejores productos.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mqeDBnWskWU?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
            <p><b>Desde que llegas a la desvencijada granja que heredas de manos de tu abuelo hasta que la conviertes en una máquina de facturar dinero,
            Stardew Valley proporciona tales cotas de diversión que es difícil no alabar las virtudes de este entrañable simulador de vida en la granja.
            Es muy completo a nivel de opciones, te deja hacer prácticamente de todo, pero además lo plantea de forma inteligente, sin agobios ni presiones de ningún
            tipo. Avanzas a tu propio ritmo. Que parece una tontería pero es el detalle que termina por coronarlo como uno de los mejores juegos que puedes encontrar
            hoy en día en PC.</b></p>
          </article>
          <article class="ending">
            <img src="valle3.jpg">
            <div class="proscontras">
              <p>+ El colorido de sus gráficos, su bonita banda sonora y la historia que narra</p>
              <p>+ Siempre tienes algo que hacer. Es difícil aburrirse</p>
              <p>+ El ritmo de la acción. Las cosas llegan con calma, sin atosigarte ni meter presión</p>
              <p>- Pequeños fallos en la interfaz de usuario</p>
              <p>- Se echa en falta algún localizador para dar con mayor facilidad con los aldeanos</p>
            </div>
            <div class="datos">
              <p>🕞Duración: Incalculable </p> 
              <p>🎮Jugadores: 1 </p>
              <p>🌐Idioma: Textos en castellano </p>
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
