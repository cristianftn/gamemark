<?php
//conectar
//$conexion = mysql_connect ("localhost","root", "");.


 $conexion = mysql_connect ("localhost","root", "");
        if (!$conexion) {
                die('No se pudo conectar: ' . mysql_error());
        }

       mysql_select_db("game",$conexion);

        $usu=$_REQUEST["usu"];
        $correo=$_REQUEST["correo"];
        $correo2=$_REQUEST["correo2"];
        $bday=$_REQUEST["bday"];
        $contra=$_REQUEST["contra"];

        session_start();
        
        $_SESSION['nombre']=$usu;
        
        
        $consulta= mysql_query("SELECT Nombre_usuario, E_mail FROM usuarios WHERE Nombre_usuario='$usu' OR E_mail='$correo'", $conexion);//Comprobamos que la SELECT funciona con la conexion que tenemos(servidor, usuario y contraseña)

        if (!$consulta){//Comprueba si la consulta no existe, si no existe mata la conexion
        	die('No se pudo realizar la consulta: ' . mysql_error());
        }

        $baseDatos = "SELECT Nombre_usuario, E_mail FROM usuarios WHERE Nombre_usuario='$usu' OR E_mail='$correo'";
        $consu = mysql_query($baseDatos, $conexion) or die (mysql_error());//Comprobamos de nuevo que la consulta funciona correctamente
        $fila= mysql_fetch_array($consulta);//array de los campos obtenidos en la primera consulta  $consulta
        $nfilas = mysql_num_rows($consu);//numero de filas que se obtiene en la segunda consulta  $baseDatos

        if ($nfilas==0){
        	//no existe, por lo tanto lo introducimos
        	        mysql_query("INSERT INTO usuarios (Nombre_usuario, Contrasena, Fecha_Nacimiento, E_mail) VALUES ('$usu','$contra','$bday','$correo')");
         	echo '<script lenguaje="javascript">alert("Se ha registrado correctamente");
			 window.location.href="../Principal/index.php";
			 </script>';
        }
		else{
			echo '<script lenguaje="javascript">alert("El nombre o e-mail introducido ya existe, por favor introduzca otro e-mail");
			window.location.href="../Registrar/login.php";
			</script>';
		   //con un alert, indicar que ese correo, existe, repetido....
			//Borrar el campo email.
			//indicar que el campo email ya existe
		}        

?>