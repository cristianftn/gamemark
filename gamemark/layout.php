<?php	      
	session_start();
	
	if (array_key_exists('nombre', $_SESSION)) {
		
	   
	    $nombreUsuario=$_SESSION['nombre'];
	
	    echo "<div style='display: flex; justify-content: center; color: white; background-color: #000000 '> Bienvenido $nombreUsuario</div>";
	
	}
	
?>