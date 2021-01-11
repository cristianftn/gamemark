<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Top ventas</title>
	<link rel="stylesheet" href="EstiloTopVentas.css"> 

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	

</head>
<body>
	<header>
				<?php include('../layout.php');?>

		<div class="cabecera">
			<div class="logo">
        <a href="../Principal/index.php"><img src="GameMark.png"></a>
        <img src="pad.gif">
      </div>


      
			<!-- BUSCADOR	 -->
		<form>
			<b>Buscar aqui:</b> <input type="text" onkeyup="showHint(this.value)">
		</form>
		
			<a href='<script>#txtHint</script>' Sugerencias:> <span id="txtHint"></span></a>
			
			<!-- -------------------------------------------------------------------- -->
			<?php require('../usuario.php') ?>
			
      </div>
    </div>
  </header>

  <nav>
    <section>
  		<div class="menu">
  			<ul>
          <li><a href="../Ofertas/Ofertas.php">Ofertas</a></li>
          		<li><a href="../Lanzamientos/lanzamientos.php">Lanzamientos</a></li>
          		<li><a href="../Catalogo/catalogo.php">Catalogo</a></li>
                <li><a href="Top.php">Top Ventas</a></li>
         		<li><a href="../Principal/index.php#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
	</nav>
<!-- <h4> Introduce el nombre del videojuego a buscar:</h4>
<form>
	Nombre: <input type="text" onkeyup="showHint(this.value)">
</form>

	<a href='<script>#txtHint</script>' Sugerencias:> <span id="txtHint"></span></a>
 -->


<!--*********************************BODY************************************-->
<!--------------------------------Cuphead--------------------------------------->
<section class="principal">
	<section class="fondoazul">
		<article class="parrafo">
			<h1 class="titulo">TOP VENTAS</h1>
			<div class="grupo1">
				<div class="nombrejuego">
					<a id="Cuphead" href="../Catalogo/Cuphead/Cuphead.php">
						<img src="imagenes/CupheadPortada.jpg" alt="Cuphead">
					</a>
				</div>
				<div class="datos">
					<h2>CUPHEAD</h2>
					<p>🕛 Duracion: 8-10 horas</p>
					<p>🎮 Jugadores: 1 </p>
					<p>🌐 Idioma: Textos y voces en inglés</p>
					<p>⚙️ Soporta: Multijugador local</p>
				</div>
			</div>	
			<p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional a mano, fondos de acuarela y grabaciones originales de jazz. Juega como Cuphead o Mugman (en modo de un jugador o cooperativo) y cruza mundos extraños, adquiere nuevas armas, aprende poderosos supermovimientos y descubre secretos ocultos mientras procuras saldar tu deuda con el diablo.</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a id="Limbo" href="../Catalogo/Limbo/limbo.php">
						<img src="imagenes/Limbo.png" alt="Limbo">
					</a>
				</div>
				<div class="datos">
					<h2>LIMBO</h2>
					<p>🕛 Duracion: 35 horas</p>
					<p>🎮 Jugadores: 1</p>
					<p>🌐 Idioma: Textos en Castellano</p>
				</div>
			</div>
			<p>El personaje principal es un niño que despierta en un bosque, en el «borde del infierno», cuya misión es encontrar a su hermana perdida. En el camino se encuentra con cadáveres y es atacado por otras personas, aunque algunas huyen al verlo. En cierto momento el niño vislumbra la silueta de una niña que se desvanece antes de alcanzarla. Más adelante, el bosque cambia de apariencia hasta lucir como una ciudad en ruinas. Una vez que el jugador descifra el puzle final, el personaje se lanza sobre un panel de vidrio y es trasladado de vuelta al bosque. Tras caminar un poco se encuentra de nuevo a la niña, que se asusta al verlo y el juego acaba de forma abrupta.</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a id="PlantsVSZombies2" href="../Catalogo/Plantas vs Zombies 2/Plantas vs Zombies 2.php">
						<img src="imagenes/PlantsVSZombies2.png" alt="PVSZ2">
					</a>
				</div>
				<div class="datos">
					<h2>PLANTS VS ZOMBIES 2</h2>
					<p>🕛 Duracion: Incalculable</p>
					<p>🎮 Jugadores: 1</p>
					<p>🌐 Idioma: Textos en Castellano</p>
				</div>
			</div>
			<p>Plants vs Zombies 2: It's About Time es un videojuego creado en 2013 desarrollado por PopCap Games y publicado por Electronic Arts. Es la secuela de Plants vs Zombies, y fue lanzado mundialmente en el App Store de Apple el 15 de agosto de 2013 y Google Play el 23 de octubre de 2013. Al igual que Plants vs Zombies, existe una versión oficial y exclusiva del juego, lanzada por PopCap y Electronic Arts, Plants vs Zombies 2 versión China. Lanzado el 1 de agosto de 2013 para sistemas iOS y el 12 de septiembre de 2013 para dispositivos Android, y que, a diferencia de la versión occidental, cuenta con algunos niveles y plantas exclusivas, así como unas pequeñas variaciones en la jugabilidad, los eventos diarios, la dificultad y la interfaz, al igual que diferente jugabilidad.</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a id="Terraria" href="../Catalogo/Terraria/terraria.php">
						<img src="imagenes/Terraria.jpg" alt="Terraria">
					</a>
				</div>
				<div class="datos">	
					<h2>TERRARIA</h2>
					<p>🕛 Duracion: Incalculable</p>
					<p>🎮 Jugadores: 1-8</p>
					<p>🌐 Idioma: Textos y voces en lnglés</p>
					<p>⚙️ Soporta: Multijugador local</p>
				</div>
			</div>		
			<p>¡Cava, lucha, explora, construye! Nada es imposible en este juego de aventuras repleto de acción. El mundo es tu lienzo y la tierra misma es tu pintura. 
			¡Coge tus herramientas y adelante! Crea armas para deshacerte de una gran variedad de enemigos en numerosos ecosistemas. Excava profundo bajo tierra para encontrar accesorios, dinero y otras cosas muy útiles. Reúne recursos para crear todo lo que necesites y conformar así tu propio mundo. Construye una casa, un fuerte o incluso un castillo. La gente se mudará a vivir ahí e incluso quizás te vendan diferentes mercancías que te ayuden en tu viaje.
			Pero ten cuidado, aún te aguardan más desafíos... ¿Estás preparado para la tarea?</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a id="Machinarium" href="../Catalogo/Machinarium/machinarium.php">
						<img src="imagenes/Machinarium.jpg" alt="Cuphead">
					</a>
				</div>
				<div class="datos">
					<h2>MACHINARIUM</h2>
					<p>🕛Duracion: 35 horas</p> 
					<p>🎮 Jugadores: 1</p>
					<p>🌐 Idioma: Manual y textos en español</p>
				</div>	
			</div> 
			<p>El pequeño mundo desarticulado de un robot toma forma cuando llega a un vertedero y, casi por arte de magia, recompone sus piezas a trancas y barrancas. Comienza su andadura por un mundo que reconoce, hostil ante su presencia, reminiscente de las obras de ciencia ficción más importantes de la historia, con ese toque humorístico que tanto aprecia el estimado público de PC (y Mac). Machinarium, un sencillo juego de flash sin muchas pretensiones, se destapa como una de las grandes sorpresas de esta temporada.</p>
		</article>
	</section>
</section>
<script src="../script.js"></script>
</body>	
 <?php include('../footer.php');?>
</html>	