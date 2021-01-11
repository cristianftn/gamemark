<?php include('../conexionBBDD.php');?>
<?php 
$videojuegos = mysql_query("SELECT v.*, vc.* FROM videojuegos v JOIN videojuego_caracteristicas vc ON v.id_videojuego = vc.id_videojuego",$conexion);
 ?>
<!DOCTYPE html>

<html>
<head>
    <title>Catalogo</title>
    <meta charset="utf-8">
    <style type="text/css" media="all">@import "./catalogo.css";</style>
  <!-- <link rel="stylesheet" type="text/css" href="catalogo.css"> -->
 <!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
 <!--<link rel="stylesheet" type="text/css" href="catalogoestilo.php">-->
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
				 <li><a href="catalogo.php">Catalogo</a></li>
				 <li><a href="../Top/Top.php">Top Ventas</a></li>
				 <li><a href="../Principal/index.php#collage">Quienes somos</a></li>
				</ul>
			</div>
		</section>
	</nav>
<section class="principal">
<div class="fondoazul"> 
		<h1 class="precio">CATALOGO</h1>
		<?php  
			while ($videojuego = mysql_fetch_array($videojuegos)) {
				echo '<article>';
				echo '<div id="titular">';
				echo '<h3 class="titulos">' . utf8_encode($videojuego['Nombre']) . '</h3>';
				echo '</div>';
				echo '<div id="parrafo">';
				echo '<a href="show.php?nombre=' . utf8_encode($videojuego['Nombre']) . '"><img id="ifoto" src="' . $videojuego['Imagen_index'] . '"></a>';
				echo '<p class="parrafos">' . utf8_encode($videojuego['Parrafo_index']) . '</p>';
				echo '<a class="carro" href="../Compras/compras.php?id=' . $videojuego['id_videojuego'] . '">Comprar ' . $videojuego['Precio'] . '€</a>';
				echo '</div> ';
				echo '</article>';
			}  
		?>
				<!-- <article>
					<div id="titular">
					<h3 class="titulos">Stardew Valley</h3>
                    </div>
                    <div id="parrafo">
                        <a href="Stardew Valley/Stardew Valley.php"><img id="ifoto" src="caratula2.jpg"></a>
						<p class="parrafos">Stardew Valley es un videojuego indie de simulación de granja desarrollado por
                        Eric "ConcernedApe" Barone y publicado por Chucklefish Games. El juego fue lanzado en primer
                        lugar para Windows el 26 de febrero 2016, y
                        luego para los sistemas operativos OS X y Linux.
                        En Stardew Valley, el jugador toma el rol de un personaje que se encuentra atrapado en un
                        trabajo de oficina, para escapar de él se va a vivir a la granja de su abuelo, la cual se encuentra en ruinas.</p>
                        <a class="carro" href="../Compras/compras.php?id=2">Comprar<br>3.99€</a>
                    </div>
				</article>
				<article>
					<div id="titular">
						<h3 class="titulos">Braid</h3>
                    </div>
                    <div id="parrafo">
                        <a href="Braid/braid.php"><img id="ifoto" src="caratula3.jpg"></a>
						<p class="parrafos">Braid es un videojuego de plataformas y lógica creado
						por el desarrollador independiente Jonathan Blow para el servicio Xbox Live
						Arcade de Xbox 360. Fue presentado oficialmente durante la conferencia de prensa
						de Microsoft del Tokyo Game Show 2007 y salió a la venta el 6 de agosto de 2008,
						al precio de 1200 Microsoft Points.
						El título ha sido portado a Windows, Mac, PlayStation 3 y sistemas con Linux.
                        </p>
                        <a class="carro" href="../Compras/compras.php?id=3">Comprar<br>9.99€</a>
                    </div>    
				</article>
               		<article>
							<div id="titular">
							<h3 class="titulos">Fez</h3>
                            </div>
                  		<div id="parrafo">
                       		 <a href="Fez/fez.php"><img id="ifoto" src="caratula4.jpg"></a>
							 <p class="parrafos">Fez es un videojuego de lógica/plataformas desarrollado por los desarrolladores
                      		 de software independiente Polytron. El juego fue anunciado inicialmente por su creador, Phil Fish, en
                      		 TIGSource.com el 17 de julio de 2007. Más tarde se anunció que el juego llegaría a Xbox Live Arcade a
                      		 principios de 2010, pero fue retrasado.​</p>
                      		 <a class="carro" href="../Compras/compras.php?id=4">Comprar<br>4.50€</a>
                   		</div>
					</article>
					<article>
						<div id="titular">
						<h3 class="titulos">Limbo</h3>
                        </div>
                    <div id="parrafo">
                         <a href="Limbo/limbo.php"><img id="ifoto" src="caratula5.jpg"></a>
                         <p class="parrafos">Xbox Live Arcade.
						 La trama describe las vivencias de un niño mientras busca a su hermana en un entorno siniestro.
						 Su desarrollo comenzó entre 2004 y 2006, con recursos sufragados primordialmente por el Nordic Game Program y por los
						 fundadores de Playdead, Arnt Jensen y Dino Christian Patti.</p>
						 <a class="carro" href="../Compras/compras.php?id=5">Comprar 2.99€</a>
                   </div>
					</article>
						<article>
                        <div id="titular">
						<h3 class="titulos">Plantas vs Zombies 2</h3>
                        </div>
                    <div id="parrafo">
                         <a href="Plantas vs Zombies 2/Plantas vs Zombies 2.php"> <img id="ifoto" src="caratula6.jpg"></a>
						 <p class="parrafos">Plantas contra Zombis 2 (título original: Plants vs. Zombies)
						 es un juego de estilo tower defense desarrollado y publicado el 5 de mayo de 2009 por
						 PopCap Games para Microsoft Windows, iPad, iPhone, Android, BlackBerry, PlayStation 3,
						 Xbox 360, Windows Phone 7, PS Vita, Nintendo DS, Nintendo DSi,
						 Nintendo 3DS y Mac OS X.1​ Se distribuye a través de su página oficial o por Steam.</p>
						 <a class="carro" href="../Compras/compras.php?id=6">Comprar 7.99€</a>
                    </div>
					</article>                    
					<article>
							<div id="titular">
							<h3 class="titulos">Dead cells</h3>
                            </div>
                            <div id="parrafo">
                              <a href="Dead cells/Dead cells.php"><img id="ifoto" src="caratula7.jpg"></a>
							  <p class="parrafos"> Somos un cadáver descabezado que murió en una húmeda y fría estancia de un castillo.
							  Un buen día, una viscosa masa verde baja a las alcantarillas, se apodera de nuestro cuerpo y... ¡tenemos vida!, pero... ¿qué hay
							  que hacer? Pues, en principio, escapar de ahí. Y no, no busquéis una historia profunda, o una historia,
							  directamente, ya que la historia de Dead Cells no se cuenta
							  de manera tradicional.</p>
							  <a class="carro" href="../Compras/compras.php?id=7">Comprar<br>6.99€</a>
                            </div>       
					</article>                   
					<article>
                             <div id="titular">                   
							<h3 class="titulos">Machinarium</h3>
                             </div>
                        <div id="parrafo">
                              <a href="Machinarium/machinarium.php"><img id="ifoto" src="caratula8.jpg"></a>
							  <p class="parrafos">Machinarium es una aventura gráfica y videojuego de puzzles, creado por Amanita Design.
							  Fue lanzado al mercado el 16 de octubre del 2009 para Microsoft Windows, Mac OS X y Linux. Sin embargo,
							  las demos estuvieron
							  disponibles para jugar en el sitio oficial de Machinarium desde el 30 de septiembre del 2009.
							  El objetivo de Machinarium es resolver una serie de puzzles.</p>
							  <a class="carro" href="../Compras/compras.php?id=8">Comprar<br>14.99€</a>
                        </div>
					</article>
					<article>
                        <div id="titular">
							<h3 class="titulos">Terraria</h3>
                        </div>
                        <div id="parrafo">
                             <a href="Terraria/terraria.php"><img id="ifoto" src="caratula9.jpg"></a>
							 <p class="parrafos">Terraria es un juego sandbox, de acción y aventura creado por Andrew "Redigit" Spinks y
							 producido de forma independiente por el estudio Re-Logic.
							 Tiene características tales como la exploración, la artesanía,
							 la construcción de estructuras, combatir diversos monstruos y jefes.
							El juego también consiste en la creación de objetos y artefactos como espadas, pistolas, accesorios, etc.</p>
							<a class="carro" href="../Compras/compras.php?id=9">Comprar<br>6.99€</a>
                        </div>
					</article>
					<article>
                        <div id="titular">
							<h3 class="titulos">Celeste</h3>
                        </div>
                    <div id="parrafo">
                        	 <a href="Celeste/celeste.php"><img id="ifoto" src="caratula10.jpg"></a>
							 <p class="parrafos">Celeste es un videojuego perteneciente al género de plataformas creado por
							 los desarrolladores de videojuegos canadienses Matt Thorson y Noel Berry. El videojuego fue
							 creado originalmente como un prototipo en cuatro días durante un Juego Jam, y más tarde se
							 expandió a un lanzamiento completo. Celeste se lanzó en enero de 2018
							 para las plataformas Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, macOS y Linux.
                            </p>
                            <a class="carro" href="../Compras/compras.php?id=10">Comprar<br>19.99€</a>
                     </div>
					</article>
					<article>
                        <div id="titular">
							<h3 class="titulos">Shovel Knight</h3>
                        </div>
                        <div id="parrafo">
                             <a href="Shovel knight/Shovel knight.php"><img id="ifoto" src="caratula11.jpg"></a>
							 <p class="parrafos">Shovel Knight es un juego de plataformas 2D de 2014 desarrollado y publicado por la compañía
							 de videojuegos independiente Yacht Club Games. El juego fue originalmente lanzado para Microsoft Windows, Nintendo
							 3DS, y Wii U, y ports
							 (adaptaciones del software original para sistemas de computo diferentes) del juego para Mac OS X y Linux salieron
							 posteriormente.</p>
							 <a class="carro" href="../Compras/compras.php?id=11">Comprar<br>14.99€</a>
                        </div>
					</article>
					<article>
						<div id="titular">
							<h3 class="titulos">Gang beasts</h3>
                        </div>
                        <div id="parrafo">
                             <a href="Gang beast/Gang beast.php"><img id="ifoto" src="caratula12.jpg"></a>
							 <p class="parrafos">Gang Beasts es un desternillante juego multijugador
							 de peleas absurdas entre personajes gelatinosos y gruñones que tienen lugar en
							 los peligrosos entornos de Urbe Ubre.
							 Personaliza tu personaje y participa en peleas locales o en línea en los peligrosos bajos fondos de la ciudad.
                            </p>
                            <a class="carro" href="../Compras/compras.php?id=12">Comprar<br>19.99€</a>
                        </div>
					</article>
					<article>
						<div id="titular">
							<h3 class="titulos">Youtubers life</h3>
                        </div>
                        <div id="parrafo">
                             <a href="Youtubers life/Youtubers life.php"><img id="ifoto" src="caratula13.jpg"></a>
							 <p class="parrafos">Youtubers Life es un videojuego que mezcla los géneros tycoon y s
							 imulador de vida, en el que podrás convertirte en el mayor video blogger de la historia.
							 Edita vídeos, consigue suscriptores para tu canal y alcanza la fama.
							 Crea tu personaje y graba tus primeros vídeos desde la comodidad de tu habitación
							 en casa de tus padres donde has crecido.
                            </p>
                            <a class="carro" href="../Compras/compras.php?id=13">Comprar<br>24.99€</a>
                        </div>
					</article>
					<article>
							<div id="titular">
							<h3 class="titulos">Undertale</h3>
                            </div>
                        <div id="parrafo">
                             <a href="Undertale/undertale.php"><img id="ifoto" src="caratula14.jpg"></a>
							 <p class="parrafos">Undertale es un videojuego de rol independiente, creado y desarrollado por el
							 desarrollador indie y compositor musical: Toby Fox. En este videojuego, el jugador adopta el
							 control de un personaje que ha caído en un mundo subterráneo conocido como Underground,
							 una región enorme aislada debajo de la superficie de la tierra, separada por una barrera mágica
                            </p>
                            <a class="carro" href="../Compras/compras.php?id=14">Comprar<br>9.99€</a>
                    </div>
					</article>
               				<h1 class="precio">RESERVAS</h1>
					<article>
						<div id="titular">
							<h3 class="titulos">Ori and the Will of the wisps</h3>
                     	</div>
                        <div id="parrafo">
                             <img id="ifoto" src="caratula15.jpg">
							 <p class="parrafos">Ori and the Will of the Wisps es un próximo videojuego de género aventura-plataforma y
                             Metroidvania desarrollado por Moon Studios y publicado por Microsoft Studios para Microsoft Windows y Xbox One.
                             Es una continuación del título de 2015 Ori and the Blind Forest y fue anunciado durante el E3 2017.
                             El juego está planeado para ser un título de 4K UHD, con mejoras para Xbox One X y Xbox Play Anywhere.1</p>
                             <a class="carro" href="../Compras/compras.php?id=15">Reservar<br>19.99€</a>
						</div>     
					</article>
               		<article>
						<div id="titular">
							<h3 class="titulos">Afterparty</h3>
                        </div>
                        <div id="parrafo">
                            <img id="ifoto" src="caratula16.jpg">
							 <p class="parrafos">El inframundo de Afterparty se inspira en los que aparecen en distintas religiones,
                             y cada barrio cuenta con su propio tugurio. Una vez dentro de uno de ellos, eso sí, parece que la
                             cosa se convierte en una aventura más tradicional en la que podemos
                             alternar entre Lola y Milo, tomar decisiones que afectarán a la historia y avanzar a nuestro ritmo.</p>
                             <a class="carro" href="../Compras/compras.php?id=16">Reservar<br>9.99€</a>
                        </div>
					</article>
               		<article>
							<div id="titular">
							<h3 class="titulos">Indivisible</h3>
                            </div>
                        <div id="parrafo">
                            <img id="ifoto" src="caratula17.jpg">
							 <p class="parrafos">Indivisible es un videojuego en desarrollo perteneciente al género de Videojuego de rol de acción,
                             desarrollado independientemente por la empresa Lab Zero Games y publicado por 505 Games.​
                             El juego está programado para un lanzamiento en el año 2018.</p>
                             <a class="carro" href="../Compras/compras.php?id=17">Reservar<br>19.99€</a>
						</div>
					</article>
               		<article>
							<div id="titular">
							<h3 class="titulos">Child of light</h3>	
                            </div>
                        <div id="parrafo">
                            <img id="ifoto" src="caratula18.jpg">
							 <p class="parrafos">Child of Light es un videojuego de rol y plataformas desarrollado por Ubisoft Montreal y
                             publicado por Ubisoft. Se lanzó para Microsoft Windows, PlayStation 3, PlayStation 4, Wii U, Xbox 360 y Xbox One
                             en abril de 2014, y para PlayStation Vita en julio de 2014. Se desarrolló con UbiArt Framework.</p>
                             <a class="carro" href="../Compras/compras.php?id=18">Reservar<br>14.99€</a>
						</div>
					</article>					
               		<article>
							<div id="titular">
							<h3 class="titulos">RiME</h3>
                            </div>
                        <div id="parrafo">
                            <img id="ifoto" src="caratula19.jpg">
							 <p class="parrafos">Rime es un videojuego de aventura y rompecabezas desarrollado por los españoles
                             Tequila Works para PlayStation 4, Xbox One, Nintendo Switch y PC.
                             El videojuego salió a la venta el 26 de mayo de 2017 y posteriormente para Nintendo Switch.</p>
                             <a class="carro" href="../Compras/compras.php?id=19">Reservar<br>34.99€</a>
						</div>
					</article>

               		<article>
							<div id="titular">
							<h3 class="titulos">Hollow Knight</h3>
                            </div>
                        <div id="parrafo">
                            <img id="ifoto" src="caratula20.jpg">
							 <p class="parrafos">Hollow Knight es un videojuego metroidvania desarrollado y publicado por Team Cherry.
                             El videojuego fue inicialmente lanzado para Microsoft Windows en febrero de 2017, y mas tarde para macOS
                             y Linux en abril de 2017.​La adaptación para Nintendo Switch fue lanzada el 12 de junio de 2018.​</p>
                             <a class="carro" href="../Compras/compras.php?id=20">Reservar<br>14.99€</a>
						</div>
					</article> -->
 	</div>
 	<?php
 	$id='id';
 	?>
 </section>
 <script src="../script.js"></script>
</body>	
 <?php include('../footer.php');?>
</html>	

