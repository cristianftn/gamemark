<?php include('../../conexionBBDD.php');?>
<?php 


$videojuego = mysql_query("SELECT v.*, vc.* FROM videojuegos v JOIN videojuego_caracteristicas vc ON v.id_videojuego = vc.id_videojuego WHERE v.Nombre='Stardew Valley'",$conexion);
$atributos = mysql_query("SELECT * FROM videojuegos v JOIN videojuego_atributos va ON  v.id_videojuego = va.id_videojuego WHERE v.Nombre = 'Stardew Valley'");
$pros = mysql_query("SELECT * FROM videojuegos v JOIN videojuego_pros_contras vpc  ON v.id_videojuego = vpc.id_videojuego WHERE v.Nombre = 'Stardew Valley' AND vpc.Tipo_pro_contra = 'pro'");
$contras = mysql_query("SELECT * FROM videojuegos v JOIN videojuego_pros_contras vpc  ON v.id_videojuego = vpc.id_videojuego WHERE v.Nombre = 'Stardew Valley' AND vpc.Tipo_pro_contra = 'contra'");

$videojuego = mysql_fetch_array($videojuego);

 ?>
<!DOCTYPE html>

<html>
<head>
  <title><?php echo utf8_encode($videojuego["Nombre"]);?></title>
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <link rel="stylesheet" type="text/css" href="../../estilos/iconos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <meta charset="utf-8">
</head>
<body>
	<header>
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
      <img src="<?php echo utf8_encode($videojuego["Imagen_1"]);?>">   
    </div>
    <div class="titulo">
      <h1><?php echo utf8_encode($videojuego["Titulo"]);?></h1>
    </div>  

        <section class="fondoazul">
          <h1>Análisis <?php echo utf8_encode($videojuego["Nombre"]);?></h1>
          <article class="parrafo">
            <p><b><?php echo utf8_encode($videojuego["Parrafo_1"]);?></b></p>
          </article>
          <article class="parrafo">
            <p><?php echo utf8_encode($videojuego["Parrafo_2"]);?></p>
            <img src="<?php echo utf8_encode($videojuego["Imagen_2"]);?>">
          </article>  
          <article class="parrafo">
            <p><?php echo utf8_encode($videojuego["Parrafo_3"]);?></p>
          </article>
          <article class="parrafo">
            <p><?php echo utf8_encode($videojuego["Parrafo_4"]);?><p> 
            <!--<video source src="Cuphead.mp4" controls></video>-->
            <iframe width="560" height="315" src="<?php echo utf8_encode($videojuego["Url_video"]);?>"></iframe>
          </article>
            <!-- <video src="Cuphead1.mp4" controls class="primervideojuego"></video> -->
          <article class="barranegra">
            <div class="circulo">
              <img src="<?php echo utf8_encode($videojuego["Imagen_3"]);?>">
            </div>
            <div class="valoracion">
              <p><?php echo utf8_encode($videojuego["Calificacion"]);?></p>
            </div>
              <div class="nota">
              <p><?php echo utf8_encode($videojuego["Nota"]);?></p>
            </div>
          </article>
          <article class="parrafo">
            <p><b><?php echo utf8_encode($videojuego["Parrafo_5"]);?></b></p>
          </article>
          <article class="ending">
            <img src="<?php echo utf8_encode($videojuego["Imagen_4"]);?>">
            <div class="proscontras">
                <?php  
                  while ($pro = mysql_fetch_array($pros)) {
                        echo "<p>" . utf8_encode($pro["Texto"]) . "</p>";
                    }  
                  while ($contra = mysql_fetch_array($contras)) {
                        echo "<p>" . utf8_encode($contra["Texto"]) . "</p>";
                    }
                ?>
            
            </div>
            <div class="datos">
                <?php 
                    while ($atributo = mysql_fetch_array($atributos)) {
                        
                        echo "<p><i class='" . $atributo['Icono'] . "''></i>&nbsp;";
                        echo utf8_encode($atributo['Tipo_atributo'] . ": " . $atributo['Valor_atributo'] . "</p>"); 
                    }

                  
                 ?>
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
