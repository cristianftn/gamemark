<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <title>Indivisible</title>
    <link rel="stylesheet" type="text/css" href="Indivisible.css">
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
        	<a class="auser" href="LoginGameMark/login.php">Identificar</a>
          <a class="auser" href="RegistroGameMark/login.php">Registrar</a>
          <a href="../Compras/compras.php"><img id="carrito" src="carrito.png"></a>
        </div>
      </div>
    </div>
  </header>

  <nav>
    <section>
  		<div class="menu">
  			<ul>
          <li><a href="../../Ofertas/Ofertas.php">Ofertas</a></li>
          <li><a href="../lanzamientos.php">Lanzamientos</a></li>
          <li><a href="../../Catalogo/catalogo.php">Catalogo</a></li>
          <li><a href="../../Top/Top.php">Top Ventas</a></li>
          <li><a href="#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
	</nav>
 
<section class="principal">
   <section class="fondoazul">
     <h1 class="precio">PRIMERAS IMPRESIONES</h1>
		<h2 style="text-align: center; font-weight:bold; color: white;">INDIVISIBLE</h2>
				 <article class="parrafo">
					<h4>Descripción</h4>
                  <p style="margin-left: 1%;margin-right: 1%;">Sumérgete en el viaje de Ajna por un vibrante mundo de fantasía para descubrir el secreto tras sus misteriosos poderes.
                  Así comienza Indivisible, un videojuego de acción, plataformas y rol con combates por turnos y gráficos 2D. Durante su camino la protagonista de esta historia, una chica con un
                  toque rebelde, conocerá a distintos héroes y accederá a nuevas armas y habilidades para acabar con poderosos enemigos. El juego lleva la firma de Lab Zero Games (SkullGirls), y se
                  inspira en títulos como Valkyrie Profile y Super Metroid además de mitologías y culturas de todo el mundo.​</p>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/i3BgQ-A8VX8?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
             </article>
              <article class="parrafo">
                  <h4>Jugabilidad</h4>
                  <p>Indivisible contará con mecánicas de exploración y combate estilo Metroidvania inspiradas en Valkyrie Profile.
                  El gameplay de paso nos deja por supuesto con unos cuantos combates para apreciar el ritmo tan frenético que tendrán y en los que podremos realizar toda clase de combinaciones
                  entre los diferentes miembros del equipo, lo que acabará desencadenando en unos ataques espectaculares.Además, el desplazarse por el mapa será otro de los puntos clave de la jugabilidad
                  al tener que superar puzles o localizar el camino correcto a base de utilizar algunas armas que servirán para escalar o abrir caminos alternativos. Lo mejor es que lo comprobéis vosotros
                  mismos a continuación.</p>
              </article>
          <div class="imagenes">
              <img src="1.jpg">
              <img src="2.jpg">
              <img src="3.jpg">
              <img src="4.jpg">
          </div>
            <article class="parrafo">
                  <h4>Desarrollo</h4>
                  <p>Indivisible fue anunciado por Lab Zero Games durante su panel de Skullgirls en la Anime Expo el 2 de julio de 2015.Según el desarrollador,
                  el juego incluirá una historia influenciada por la mitología del sudeste asiático y otras culturas.También contará con animación en 2D dibujada a mano por artistas de Lab Zero Games
                  junto con Studio Yotta. El compositor Hiroki Kikuta, mejor conocido por su trabajo en Secret of Mana, se unió para crear la banda sonora del videojuego.
                  <br>
                  Lab Zero Games lanzó una campaña de crowdfunding en la Indiegogo, el 5 de octubre de 2015, con un objetivo de recaudación de $1,500,000.Un prototipo jugable del videojuego fue liberado con un
                  lanzamiento conjunto. Si Lab Zero Games cumplía o excedía su objetivo, los juegos de 505 Games contribuirían con su presupuesto de desarrollo restante.El período de contribución inicial de 40
                  días de la campaña se enfrentó a una recaudación de fondos relativamente lenta, ganando aproximadamente solo $764,000 hasta el 8 de noviembre de 2015.Sin embargo, el 13 de noviembre de 2015,
                  la campaña se amplió por 20 días adicionales después de que el juego recibió aproximadamente $963,000 en promesas, por encima del umbral de 60% requerido por la Indiegogo.
                  Luego de la prorogación, el objetivo finalmente se alcanzó el 2 de diciembre de 2015.</p>
				</article>	
 	</section>
</section>  
<footer>
		<div id="redes">
   			<a href="https://www.twitter.com"><img src="iconotwitter.png" id="iconotwitter"></a>
   			<a href="https://www.facebook.com"><img src="facebookicono.jpg" id="iconofacebook"></a>
   			<a href="https://www.instagram.com"><img src="iconoinstagram.png" id="iconoinsta"></a>
   			<a href="https://plus.google.com/discover"><img src="google+.png" id="iconogoogle"></a>
   			<p>&copy; GameMark Inc - 2018</p>
		</div>
	</footer>
</body>
</html>
