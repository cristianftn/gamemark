<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Terraria</title>
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
      <img src="cabecera.png">   
    </div>
    <div class="titulo">
      <h1>AVENTURA EN 8 BITS</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Terraria</h1>
          <article class="parrafo">
            <p><b>La creatividad e imaginación como única barrera a tus progresos. Bajo una capa de aparente simpleza, Terraria se presenta como una de las obras
            independientes más originales y ambiciosas de los últimos años. Una desafiante aventura sandbox en dos dimensiones que os atrapará sin remedio gracias
            a sus elevadas opciones de juego y lo adictiva que resulta.</b></p>
          </article>
          <article class="parrafo">
            <p>Apasionado de los videojuegos de la vieja escuela, el equipo independiente liderado por Andrew Spinks nos ha sorprendido muy gratamente con esta
            aventura de supervivencia extrema bidimensional, que bajo una capa de aparente simpleza esconde en su interior la que es una de las obras más ambiciosas
            y originales del momento. Tanto es así que estamos ante uno de esos juegos en los que prácticamente todo es posible, hasta el punto de que es nuestra
            propia imaginación una de las pocas barreras que se interpondrán en nuestro camino. Prometedor ¿verdad?.</p>
            <img src="terraria2.jpg">
          </article>  
          <article class="parrafo">
            <p>Catalogado erróneamente como un Minecraft en dos dimensiones, Terraria ha sabido marcar las diferencias con respecto a la obra de Mojang a pesar de
            partir de una misma base jugable, que es la de sobrevivir a un entorno hostil en las peores condiciones posibles. ¿De qué modo? Usando la cabeza; creando
            un sinfín de objetos útiles que nos permitan protegernos de los enemigos, atacarles, o alcanzar nuevas regiones de juego para incrementar nuestras
            posibilidades de supervivencia.Terraria se plantea así como una original aventura de plataformas y rol en dos dimensiones en la que podemos hacer
            prácticamente todo lo que se nos pase por la cabeza. Excavar hasta el mismísimo infierno, erigir una gran torre con la que alcanzar el cielo, construir
            una sencillita casa en la que refugiarnos de los peligros de la noche, o fabricar un extenso arsenal de mortíferas armas –incluyendo rayos láser-
            son solo parte de las acciones que podremos acometer en esta aventura que destaca por su complejidad y extremada dureza. No por nada, la sensación de
            soledad e indefensión que transmite solo es equiparable al grado de satisfacción que se genera al superar nuestras metas. ¿Cuáles? Las que nosotros
            mismos nos marquemos.</p>
          </article>
          <article class="parrafo">
            <p>Y es que este es otro de esos títulos que no tienen un principio y final determinado. Por supuesto, hay enemigos finales a los que derrotar e
            increíbles tesoros esperando ser encontrados, pero Terraria es una aventura que no te marca ni el rumbo a seguir ni el cómo debes hacerlo.
            Tú, y solo tú, eres libre de actuar cómo y cuándo quieras. Precisamente por ello, como ocurrió en su día con Minecraft, a no todo el mundo le gustará
            en la misma medida. Sin embargo, es tal la cantidad de acciones a acometer y la libertad con la que hacerlo, que es imposible no rendirse a los encantos
            de esta obra.<p> 
            <!--<video source src="Terraria.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wX4H3PPx_vU?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
            <p><b>Puede parecer que no tiene mérito copiar lo que ya hizo Minecraft, pero aún así, ofrece una experiencia interesante y divertida,
            que premia al jugador paciente.</b></p>
          </article>
          <article class="ending">
            <img src="terraria3.jpg">
            <div class="proscontras">
              <p>+ La cantidad de objetos y NPCs que hay por descubrir.</p>
              <p>+ La estética "ochobitera".</p>
              <p>- Puede parecer tedioso a muchos jugadores.</p>
              <p>- El control podría ser más cómodo.</p>
            </div>
            <div class="datos">
              <p>🕞Duración: 8-10 horas</p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Textos en Castellano</p>
              <p>⚙️Soporta: Multijugador local</p>
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
