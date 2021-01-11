<?php include('../../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
  <title>Machinarium</title>
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <meta charset="utf-8">
</head>
<body>
	<header>
<?php include('../../layout.php');?>
		<div class="cabecera">
			<div class="logo">
        <a href="../../Principal/index.html"><img src="GameMark.png"></a>
        <img src="pad.gif">
      </div>
      <div class="buscauser">
				<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    			<input id="buscar" size="30" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    			<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
				</form>
				<div class="user">
          <a class="auser" href="../../Login/login.html">Identificar</a>
          <a class="auser" href="../../Registrar/login.html">Registrar</a>
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
      <h1>SOÑADORES DE HOJALATA</h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis Machinarium</h1>
          <article class="parrafo">
            <p><b>Ya está entre nosotros Machinarium, una de las aventuras gráficas más merecidamente esperadas del año 2009. El género recupera el brillo perdido tras un triste catálogo en los últimos años que no ha hecho demasiado por mantener su lustre. Amanita Design se afianza como un estudio a seguir con un videojuego para hardcores, difícil, retador… y maravilloso.</b></p>
          </article>
          <article class="parrafo">
            <p>Las aventuras gráficas de la vieja escuela están de capa caída. Tras una década de los 90 sencillamente abrumadora en términos de calidad y cantidad, lo cierto es que el siglo XXI no ha sido particularmente pródigo en este género salvo honrosas excepciones.</p>
            <img src="machinarium3.jpg">
          </article>  
          <article class="parrafo">
            <p>Machinarium es, precisamente, una de estos raros ejemplos de excepción. Un encantador cuento que puede que no venda millones de copias y que no revitalizará las aventuras gráficas hasta volverlas a poner de moda pero que, sin duda, deparará un buen puñado de horas al aficionado ávido de brillantes y complejísimos rompecabezas.</p>
          </article>
          <article class="parrafo">
            <p>En Machinarium seremos un pequeño y encantador robot que acaba arrojado a un planeta vertedero, literalmente sobre un montón de basura. Desde el momento en que comenzamos la aventura con el penoso ensamblaje de las piezas del protagonista, hasta que culminamos la aventura con el épico aunque previsible final, el videojuego de Amanita Design encuentra un sitio en nuestros corazones con su mezcla de entrañable simpatía y personajes carismáticos.<p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RnXEwc8oVHE?modestbranding=1&amp;rel=0&amp;showinfo=0"></iframe>
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
              <p>8,6</p>
            </div>
          </article>
          <article class="parrafo">
            <p><b>Machinarium es una cita obligada para cualquier aficionado hardcore de las aventuras gráficas. Su, en ocasiones, desquiciante nivel de dificultad puede hacernos tirar de los pelos, pero su impecable dirección artística, su deliciosa ambientación y su fantástica música son tres pilares artísticos que completan una jugabilidad maravillosa.</b></p>
          </article>
          <article class="ending">
            <img src="machinarium2.jpg">
            <div class="proscontras">
              <p>+ Las técnicas narrativas de las viñetas y la ambientación es maravillosa</p>
              <p>+ La banda sonora de Machinarium es una composicion inolvidable.</p>
              <p>+ Su, en ocasiones, desquiciante nivel de dificultad puede hacernos tirar de los pelos.</p>
              <p>- Uno de sus pocos puntos negativos es su corta duracion.</p>
             
            </div>
            <div class="datos">
              <p>🕞Duracion: 35 horas </p> 
              <p>🎮Jugadores: 1</p>
              <p>🌐Idioma: Manual y textos en español</p>
              
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
