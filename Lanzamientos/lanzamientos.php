<!DOCTYPE html>

<html>
<head>
    <title>Lanzamientos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="lanzamientos.css">
</head>
<body>
	<header>
    
         <?php include('../layout.php');?>

		<div class="cabecera">
			<div class="logo">
       <a href="../Principal/index.php"><img src="GameMark.png"></a>
        <img src="pad.gif">
      </div>
      <form>
        <b>Buscar aqui:</b> <input type="text" onkeyup="showHint(this.value)">
      </form>
    
      <a href='<script>#txtHint</script>' Sugerencias:> <span id="txtHint"></span></a>
      <?php require('../usuario.php') ?>

    </div>
  </header>

  <nav>
    <section>
  		<div class="menu">
  			<ul>
          <li><a href="../Ofertas/ofertas.php">Ofertas</a></li>
          <li><a href="lanzamientos.php">Lanzamientos</a></li>
          <li><a href="../Catalogo/catalogo.php">Catalogo</a></li>
          <li><a href="../Top/Top.php">Top Ventas</a></li>
          <li><a href="../Principal/index.php#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
  </nav>
<section class="principal">
<div class="fondoazul"> 
<h2 class="precio">LANZAMIENTOS</h2>
				<article>
               <div id="titular">
						<h3 class="titulos">Ori and the Will of the Wisps</h3>
               </div>
                  <div id="parrafo">
						<a href="Ori/ori.php"><img id="ifoto" src="Ori/caratula1.jpg" ></a>
                  <p class="parrafos">Realmente este juego no necesita presentación, ya que se trata de la secuela de uno de los indies más exitosos
						de los últimos años. Moon Studios anunció su existencia durante la conferencia de Microsoft en el E3 2017 bajo la
						promesa de utilizar esta segunda parte para contar el verdadero destino de Ori.
						Igual que en el primero, 'Ori and the Will of the Wisps' derrocha belleza gracias a su apartado artístico; no sólo
						enamora con su dibujo, sino que también su estupenda banda sonora envuelve con delicadeza la sensible historia que
						quiere transmitir.
					</p>
            </div>
					</article>

					<article>
						<div id="titular">
						<h3 class="titulos">Afterparty</h3>
                  </div>
                  <div id="parrafo">
						<a href="Afterparty/afterparty.php"><img id="ifoto" src="afterparty/caratula16.jpg" ></a>
                   <p class="parrafos">Afterparty es una aventura point & click desarrollada por los creadores de Oxenfree, que en esta ocasión nos trasladan
                   al mismísimo infierno, del que tendremos que escapar ganando a Satán en un juego de beber. El videojuego Afterparty, que destaca por su bello
                   apartado artístico, nos propone visitar una gran variedad de bares inspirados en diversas religiones del mundo, donde conversaremos con demonios
                   y otras almas en pena, participaremos en divertidos juegos de bar y hasta disfrutaremos de un karaoke.</p>
                  </div>
					</article>

						<article>

                  <div id="titular">
						<h3 class="titulos">Indivisible</h3>
                  </div>
                  <div id="parrafo">
						<a href="Indivisible/Indivisible.php"><img id="ifoto" src="Indivisible/caratula17.jpg" ></a>
						<p class="parrafos">Después de un tortuoso camino en Indiegogo, los creadores de 'Skullgirls' consiguieron financiación para su
						siguiente proyecto: un RPG de acción y exploración en 2D protagonizado por una chica que puede albergar varias
						entidades heróicas en su interior. Si ya de por sí la idea es llamativa, su jugabilidad ha conseguido conquistar
						a todos los que hemos podido disfrutar de las dos demos que sus desarrolladores han hecho públicas,conociendo el trabajo de Lab Zero y después de degustar sus prototipos jugables. 
						</p>
                  </div>
					</article>

					<article>
							<div id="titular">
							<h3 class="titulos"> RiME</h3>
                     </div>
                     <div id="parrafo">
                     <a href="RiME/rime.php"><img id="ifoto" src="RiME/caratula19.jpg" ></a>
							  <p class="parrafos">Una isla por descubrir se extiende frente a ti. Explora el hermoso y duro, mundo de RiME, un juego de aventura de puzles para un jugador.
                       En RiME, juegas en el papel de un niño que despierta en una isla misteriosa tras una gran tormenta. Te esperan animales salvajes,
                       ruinas olvidadas y una colosal torre que te invita a acercarte. Tu ingenio, tu voluntad de superación y un amistoso zorro guía serán t
                       us únicas ayudas a la hora de explorar la enigmática isla, alcanzar la cima de la torre y desentrañar sus secretos mejor guardados. 
						</p>
                     </div>
					</article>
			
					<article>
							<div id="titular">
							<h3 class="titulos">Child of Light</h3>
                     </div>
                   <div id="parrafo">
                     <a href="Child of light/Child of light.php"><img id="ifoto" src="Child of light/caratula18.jpg" ></a>
							 <p class="parrafos">Ubisoft Montreal busca su lado más personal con un RPG de aura independiente que nos sumerge en un
							 maravilloso cuento de hadas protagonizado por Aurora, una niña que deberá liberar a Lemuria de la oscuridad.
							 La belleza del UbiArt Framework y una jugabilidad con aromas de los noventa en un lanzamiento dedicado a los
							 amantes del género.
                     </p>
                   </div>
					</article>
					<article>
						<div id="titular">
							<h3 class="titulos">Hollow Knight</h3>
                  </div>
                  <div id="parrafo">
                    <a href="Hollow Knight/Hollow Knight.php"><img id="ifoto" src="Hollow Knight/caratula20.jpg" ></a>
							<p class="parrafos">Hollow Knight es una vistosa aventura de acción y plataformas en 2D ambientada en un lúgubre mundo de
							insectos, diseñado como si de una película de animación tradicional se tratase. El videojuego invita a
							explorar cavernas serpenteantes y ciudades antiquísimas lugar de más de 130 enemigos, incluidos una treintena
							de jefazos, a los que combatir con extraños poderes. ¿Preparado para forjar tu propio camino? Hollow Knight
							bien podría definirse como un auténtico juego metroidvania con la esencia Dark Souls... Divertido, épico,
							emocionante y duro.
						</p>
                  </div>
					</article>
 	</div>
</section>
<script src="../script.js"></script>
</body> 
 <?php include('../footer.php');?>
</html> 
