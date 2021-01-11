 <?php
include('../conexionBBDD.php');
$nombre=$_REQUEST["nombrePer"];
session_start();
$nombreActual=$_SESSION["nombre"];

$apellido1=$_REQUEST["apell1"];
$apellido2=$_REQUEST["apell2"];
$direccion=$_REQUEST["dire"];
$contra=$_REQUEST["contra"];
$numeroT=$_REQUEST["numroT"];

       
// $consulta2=mysql_query( "UPDATE usuarios SET Contrasena='$pwd', Nombre='$nombre', Apellido1='$ape1', Apellido2='$ape2', Direccion='$direc', E_mail='$mail', Num_tarjeta='$numT' WHERE Nombre_usuario='$nombreUsuario'") or die ("Problemas en el select:".mysql_error($conexion));
$consulta2=mysql_query("UPDATE usuarios SET Contrasena='$contra', Nombre='$nombre',Apellido1='$apellido1', Apellido2='$apellido2', Direccion='$direccion', Num_tarjeta='$numeroT' WHERE Nombre_usuario='$nombreActual'",$conexion) or die ("Problemas en el select:".mysql_error($conexion));

echo '<script lenguaje="javascript">alert("Cambios realizados correctamente");window.location.href="../Principal/index.php";</script>';
?>
