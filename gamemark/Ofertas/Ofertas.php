<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ofertas</title>
	<link rel="stylesheet" href="ofertas.css"> 

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
          <li><a href="Ofertas.php">Ofertas</a></li>
          		<li><a href="../Lanzamientos/lanzamientos.php">Lanzamientos</a></li>
          		<li><a href="../Catalogo/catalogo.php">Catalogo</a></li>
                <li><a href="../Top/Top.php">Top Ventas</a></li>
         		<li><a href="#collage">Quienes somos</a></li>
  			</ul>
  		</div>
		</section>
	</nav>
		
			

	

<!--*********************************BODY************************************-->
<!--------------------------------Cuphead--------------------------------------->
<section class="principal">
	<section class="fondoazul">

		<article class="parrafo">
			<h1 class="titulo">OFERTAS</h1>
			<div class="grupo1">
				<div class="nombrejuego">
					<a title="Cuphead" href="../Catalogo/Cuphead/cuphead.php">
						<img src="imagenes/CupheadPortada.jpg" alt="Cuphead">
					</a>
				</div>
				<div class="datos">
				<h2>CUPHEAD</h2>
				<p style="font-weight: bold;font-size:25px;">💰 Oferta: 4,99€</p>
					
				</div>
			</div>	
			<p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional </p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a title="Limbo" href="../Catalogo/Limbo/limbo.php">
						<img src="imagenes/Limbo.png" alt="Limbo">
					</a>
				</div>
				<div class="datos">
					<h2>LIMBO</h2>
					<p style="font-weight: bold;font-size:25px;">💰 Oferta: 2,99€</p>
					
				</div>
			</div>
			<p>El personaje principal es un niño que despierta en un bosque, en el «borde del infierno», cuya misión es encontrar a su hermana perdida.</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a title="Dead cells" href="../Catalogo/Dead cells/Dead cells.php">
						<img src="imagenes/Deadcells.jpg" alt="Dead">
					</a>
				</div>
				<div class="datos">
				<h2>DEAD CELLS</h2>
					<p style="font-weight: bold;font-size:25px;">💰 Oferta: 6,99€</p>
					
				</div>
			</div>
			<p> Dead Cells es un título de acción y plataformas inspirado en Castlevania ubicado en un castillo en constante expansión, asumiendo que el jugador
			es capaz de continuar su lucha más allá de los guardianes de la fortaleza.</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a title="Stardew Valley" href="../Catalogo/Stardew Valley/Stardew Valley.php">
						<img src="imagenes/stardew.jpg" alt="stardew valley">
					</a>
				</div>
				<div class="datos">
				<h2>STARDEW VALLEY</h2>
					<p style="font-weight: bold;font-size:25px;">💰 Oferta: 3,99€</p>
					
				</div>
			</div>		
			<p>Acabas de heredar la vieja parcela agrícola de tu abuelo de Stardew Valley. Decides partir hacia una nueva vida con unas herramientas usadas y algunas monedas.
			¿Te ves capaz de vivir de la tierra y convertir estos campos descuidados en un hogar próspero?</p>
		</article>

		<article class="parrafo">
			<div class="grupo1">
				<div class="nombrejuego">
					<a title="Machinarium" href="../Catalogo/Fez/fez.php">
						<img src="imagenes/fez.png" alt="Fez">
					</a>
				</div>
				<div class="datos">
				<h2>FEZ</h2>
					<p style="font-weight: bold;font-size:25px;">💰 Oferta: 4,50€</p>
					
				</div>	
			</div> 
			<p>Fez es un divertido videojuego de plataformas que recuerda en parte al clásico Nebulus, cuyo nombre hace referencia al gorro típico de Marruecos
			que el curioso y simpático protagonista de color blanco de esta aventura lleva sobre su cabeza</p>
		</article>
	</section>
</section>

<!--***********************FOOTER***********************************-->
<script src="../script.js"></script>
</body>	
 <?php include('../footer.php');?>
</html>	