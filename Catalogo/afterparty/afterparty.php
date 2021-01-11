<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <title>Afterparty</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="afterparty.css">
	 <link rel="stylesheet" type="text/css" href="afterparty.js">
	 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


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
      <h1 class="precio">LANZAMIENTOS</h1>
		<h2 style="text-align: center; font-weight:bold; color: white;">AFTERPARTY</h2>
				<article class="parrafo">
            <h4>Descripción</h4>
            <p>Cinco palabras: Amistad, demonios y beer pong. En esencia,
            Afterparty suena como el sueño de un estudiante de cine de la Universidad de Nueva York en Las alucinantes
            aventuras de Bill y Ted, pero se asemeja bastante a
            lo que hizo Night School Studios, el desarrollador del juego, con Oxenfree hace un par de años.​</p>
            <iframe height="315" src="https://www.youtube.com/embed/1eTzc941tvk?modestbranding=1&amp;rel=0&amp;showinfo=0"id="videotrailer"></iframe> 
        </article>
        <article class="parrafo">
          <h4>Jugabilidad</h4>
					<p>Su historia sigue a las amigas Milo y Lola en
          el mismísimo infierno, del que tendremos que escapar ganando a Satán en un juego de beber (beer pong).
          Bajo un bello apartado artístico, nos propone visitar una gran variedad de bares inspirados en diversas
          religiones del mundo, donde conversaremos con demonios y otras almas condenadas, participaremos en divertidos
          juegos de bar y hasta disfrutaremos de un karaoke, bailes, concursos de chugging (beber rápido), y todo ello
          entre varios elementos sociales que
          utilizan mensajes de texto y Bicker (la versión del inframundo de Twitter) para ampliar la narrativa.</p>
        </article>


        <div class="imagenes">
        	
        		<img src="after1.jpg" >
        		<img src="after2.jpg" >
        		<img src="after3.jpg" >
        		<img src="after4.jpg" >
		</div>
					
          <article class="parrafo">
            <h4>Desarrollo</h4>
            <p>Night School Studio, los creadores del alabado Oxenfree, han presentado en la GDC 2018 su nuevo juego, que llevará por título Afterparty.
            Se tratará de nuevo de una aventura con una fuerte carga narrativa que repetirá el estilo artístico y de los diálogos entre personajes que vimos en su primer juego.
            La aventura estará protagonizada por Milo y Lola, dos amigos recién fallecidos que de repente se encuentran en el Infierno, del que tendrán que buscar una escapatoria bebiendo con Satanás.
            De momento no se han confirmado plataformas, aunque es de esperar que llegue a PC, PS4, Xbox One y Switch, como su anterior juego. Se lanzará en 2019. </p>
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
