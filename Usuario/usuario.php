<?php include('../conexionBBDD.php');?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Usuario</title>

 <link rel="stylesheet" type="text/css" href="usuario.css">
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
Nombre de usuario: <input type="text" value="<?php echo $reg['Nombre_usuario'];?>"/>
<br />
Contraseña: <input type="text" value="<?php echo $reg['Contrasena'];?>"/>
<br />
Nombre: <input type="text" value="<?php echo $reg['Nombre'];?>"/>
Apellido1: <input type="text" value="<?php echo $reg['Apellido1'];?>"/>

Apellido2: <input type="text" value="<?php echo $reg['Apellido2'];?>"/>

Dirección: <input type="text" value="<?php echo $reg['Direccion'];?>"/>

E-mail: <input type="text" value="<?php echo $reg['E_mail'];?>"/>

Número tarjeta: <input type="text" value="<?php echo $reg['Num_tarjeta'];?>"/>
<br>
<input type="submit" value="Guardar cambios" name="actualizar"/>
<br>
<?php
}
mysql_close($conexion);
?>          
    </div>
    </section>
<script src="../script.js"></script>
</body>
</html>


