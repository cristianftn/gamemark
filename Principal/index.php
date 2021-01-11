<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GameMark</title>
 	<link rel="stylesheet" type="text/css" href="formato.css">
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
				 <li><a href="../Lanzamientos/lanzamientos.php">Lanzamientos</a></li>
				 <li><a href="../Catalogo/catalogo.php">Catalogo</a></li>
				 <li><a href="../Top/Top.php">Top Ventas</a></li>
				 <li><a href="#collage">Quienes somos</a></li>
				</ul>
			</div>
		</section>
	</nav>

	<section class="wrap"><!-- wrap ordena la seccion en celdas. tres primeros articles-->
		<figure class="column3up">
			<div class="texto">
				<img src="1.1.jpg">
				<h2>Cuphead</h2>
				<p>El éxito no siempre va reñido con la calidad de un videojuego por eso,
            	cuando una obra tan sorprendente como esta lo consigue, la alegría es doble.
            	En primer lugar, claro, por disfrutar de un videojuego tan espectacular como adictivo,
            	tan desafiante como apasionante en su acción, pero también, porque saber que Cuphead ha
           	 	vendido más de dos millones de juegos te devuelve la esperanza en esta industria.</p>
        	</div>
			<a href="../Catalogo/Cuphead/cuphead.php">Más</a>
		</figure>
		<figure class="column3up">
			<div class="texto">
				<img src="1.2.jpg">
				<h2>Stardew Valley</h2>
				<p>Gran aficionado a la mítica saga Harvest Moon el creativo independiente Eric Barone,
            	harto de esperar un videojuego que estuviera a la altura de los mejores episodios de la franquicia,
            	decidió crear su propio simulador de vida en la granja y es así como nació Stardew Valley.
            	Seguro que habréis escuchado esta historia antes, ¡qué pesados somos!, pero es esencial
            	para entender por qué este videojuego indie es tan especial.</p>
        	</div>
			<a href="../Catalogo/Stardew Valley/Stardew Valley.php">Más</a>
		</figure>
		<figure class="column3up">
			<div class="texto">
				<img src="1.3.jpg">
				<h2>Braid</h2>
				<p>Cuesta mucho no volcarse ante un título como Braid, y es que quienes no tuvieran
            	oportunidad de disfrutar de la versión de Xbox 360 han estado estos últimos meses huérfanos
            	de una aventura única y genuina a su manera. Se trataba del debut de Number None Inc,
            	el estudio de Jonathan Blow uno de los más prometedores programadores para el futuro, y
            	un auténtico experto en videojuegos experimentales.</p>
            </div>
			<a href="../Catalogo/Braid/braid.php">Más</a>
		</figure>
		<figure class="column3up">
			<div class="texto">
				<img src="1.4.jpg">
				<h2>Fez</h2>
				<p> Fez es un divertido videojuego de plataformas cuyo nombre hace referencia al gorro típico de Marruecos que 
				el simpático protagonista de esta aventura lleva sobre su cabeza. Éste es capaz de navegar por estructuras 
				tridimensionales de 4 perspectivas distintas clásicas a pesar de ser una criatura dimensional. Esto le abrirá 
				las puertas para explorar desde otra perspectiva un mundo abierto lleno de secretos, puzles y tesoros escondidos.</p>
			</div>
			<a href="../Catalogo/Fez/fez.php">Más</a>
		</figure>
		<figure class="column3up">
			<div class="texto">
				<img src="1.5.jpg">
				<h2>Limbo</h2>
				<p>Una de las propuestas más geniales que hemos visto en los últimos tiempos se llama Limbo. Uno de los mejores 
				juegos descargables de Xbox 360 viaja a PlayStation 3 y PC con idéntica y maravillosa dirección artística, y con el mismo sentido de la soledad que tan pocas veces hemos experimentado con tanto éxito.</p>
			</div>
			<a href="../Catalogo/Limbo/limbo.php">Más</a>
		</figure>
		<figure class="column3up">
			<div class="texto">
				<img src="1.6.jpg">
				<h2>Plants vs Zombies 2</h2>
				<p>Garden Warfare 2 es la segunda entrega Plantas vs. Zombies: Garden Warfare, un simpático juego de 
				acción multijugador que enfrenta a plantas y zombis (con mucho humor) en diferentes campos de batalla 
				que son jardines. El videojuego incluye novedades en forma de modos multijugador, arenas, personajes, 
				armas o la posibilidad de jugar contra bots, además de nuevas cotas de locura e incluso modo campaña.</p>
			</div>
			<a href="../Catalogo/Plantas vs Zombies 2/Plantas vs Zombies 2.php">Más</a>
		</figure>
	</section>
	<aside>
		<div id="collage">
			<img src="videojuegos.jpg">
			<h2>GameMark</h2>
			<p>GameMark nace de la bonita historia entre 4 estudiantes de programación, con una idea en común y una gran pasión por el arte de los 
			videojuegos indie. En Septiembre de 2018 deciden poner en marcha un ambicioso proyecto con el que su idea es hacer llegar a los usuarios todos 
			esos pequeños y no tan pequeños proyectos jugables de programadores que no tienen el respaldo de una gran compañía detrás de su trabajo. 
			De tal manera en GameMark podreis encontrar información sobre los videojuegos en forma de análisis, imágenes y videos para que no tengas 
			dudas a la hora de hacerte con tu videojuego. Te deseamos una gran experiencia con nosotros y te prometemos que día a día intentaremos 
			seguir mejorando para poder facilitarte el mayor catalogo de videojuegos indie posible.</p>
			<a id="Btn">Sugerencias</a>
			<div id="lamascara" class="mascara">
    			<div class="contenido">
    				<span class="cerrar">&times;</span>
    				<div class="sugerencias">
	    				<form id="buzon" name="buzon" method="post" action="sugerencia.php"> 
	    					<textarea name="mensaje" class=suge cols="160" rows="5">Escribe aquí tus sugerencias</textarea>
	    					<input class="envio" type="submit" name="enviar"">
	    				</form>
    				</div>
    			</div>
    		</div>
    		<script>
			var mascara = document.getElementById('lamascara');
			var btn = document.getElementById("Btn");
			var cerrar = document.getElementsByClassName("cerrar")[0];
			var datos = document.getElementById("suge");
 
			btn.onclick = function() {
    			mascara.style.display = "block";
			}
			cerrar.onclick = function() {
    			mascara.style.display = "none";
			}
			window.onclick = function(event) {
    			if (event.target == mascara) {
        			mascara.style.display = "none";
    			}
			}
			</script>	

		</div>
	</aside>
	<script src="../script.js"></script>
</body>	
 <?php include('../footer.php');?>
</html>	