<?php

 $conexion = mysql_connect ("localhost","root", "");
if (!$conexion) {
        die('No se pudo conectar: ' . mysql_error());
}

mysql_select_db("game",$conexion);

$usuario=$_POST['usu'];
$clave=$_POST['contra'];

$baseDatos ="SELECT Nombre_usuario,Contrasena FROM
	usuarios WHERE Nombre_usuario='$usuario' AND contrasena='$clave'";

$consu = mysql_query($baseDatos, $conexion) or die (mysql_error());

if (!$consu){
	die('No se pudo realizar la consulta: ' . mysql_error());
}

$nfilas = mysql_num_rows($consu);

if($nfilas>0){
	
	while($fil = mysql_fetch_array($consu)){
		echo $fil["Nombre_usuario"];
		$nombreUsuario=$fil["Nombre_usuario"];
		
		session_start();
		
		$_SESSION['nombre']=$nombreUsuario;

		if (strtolower($nombreUsuario) == 'admin') {
			header("location: http://localhost/gamemark/Principal/privado.php");
			die;
		}
		header("location:../Principal/index.php");
	}
	

}else{

	echo "<script language='JavaScript'>"; 
	echo "javascript: history.back(alert('este usuario no existe o la contraseña esta mal'))";
	echo "</script>";

}
mysql_close($conexion)

?>
<script>
	document.cookie = "usuario=<?php echo $_SESSION['nombre'] ?>";
	console.log(document.cookie);
	console.log(document.cookie.split(';')[0].split('=')[1]);
	console.log(document.getElementById('cookie'));
	document.getElementById('cookie').value = document.cookie.split(';')[0].split('=')[1];
</script>