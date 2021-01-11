<?php include('../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Usuario</title>

 <link rel="stylesheet" type="text/css" href="user.css">
</head>

<body>
    <header>
     <?php require('../layout.php') ?>
 		<div class="cabecera">
			<div class="logo">
        		<a href="../Principal/index.php"><img src="GameMark.png"></a>
        		<img src="pad.gif">
        	</div>
        
<!--             <a href='<script>#txtHint</script>' Sugerencias:> <span id="txtHint"></span></a>
			<div class="user">
                
        	</div> -->
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
				 <li><a href="../Principal/index.php#collage">Quienes somos</a></li>
				</ul>
			</div>
		</section>
	</nav>
    <section class="principal">
        <div class="fondoazul"> 
        	<h1 class="compras">DATOS DE LA CUENTA</h1>

        	<?php
            // session_destroy();die;

            $nombreUsuario=$_SESSION['nombre'];
            $consulta=mysql_query( "SELECT * FROM usuarios WHERE Nombre_usuario = '$nombreUsuario'") or die ("Problemas en el select:".mysql_error($conexion));

            while ($reg=mysql_fetch_array($consulta)){

    ?> 
<form method="GET" action="modificaruser.php">
<h4>Nombre de usuario:</h4> <input type="text" id="nameU" readonly="readonly" value="<?php echo $reg['Nombre_usuario'];?>"/>
<br />
<h4>Contraseña:</h4> <input type="text" id="pwd" name="contra" value="<?php echo $reg['Contrasena'];
?>"/>
<br />
<h4>Nombre:</h4> <input type="text" id="name" name="nombrePer" value="<?php echo $reg['Nombre'];?>"/>
<br />
<h4>Apellido1:</h4> <input type="text" id="ape1" name= "apell1" value="<?php echo $reg['Apellido1'];?>"/>
<br />
<h4>Apellido2:</h4> <input type="text" id="ape2" name= "apell2" value="<?php echo $reg['Apellido2'];?>"/>
<br />
<h4>Dirección:</h4> <input type="text" id="direc" name= "dire"value="<?php echo $reg['Direccion'];?>"/>
<br />
<h4>E-mail:</h4> <input type="text" id="mail" name="correo" readonly="readonly" value="<?php echo $reg['E_mail'];?>"/>
<br />
<h4>Número tarjeta:</h4> <input type="text" id="numT" name="numroT" value="<?php echo $reg['Num_tarjeta'];?>"/>
<br>
<input type="submit" value="Guardar cambios" name="actualizar" onclick="modificaruser.php" />

<br>
</form>
<?php
}

// $nombre = $_REQUEST['nombrePer'];
// echo $nombre;
// $sql="UPDATE usuarios SET Nombre_usuario=$nombre WHERE Nombre_usuario=nombreUsuario";

// mysql_query($sql);

mysql_close($conexion);
?>

        </div>
    </section>
     <script src="../script.js"></script>
</body>
</html>


