<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Redireccion...</title> 
<style type="text/css"> 
</style> 
<body> 
<?php #aka se gurdan los archivos recibidos del formulario 
// if(isset($_POST['nombre'],$_POST['comentarios'])){ 

//     #se abre el fichero en modo lectura y escritura. 
//     $archivo = fopen("datos.txt","w+"); 

//     #se crea uan variable con los datos a introducir. \r\n genera un salto de linea 
//     $cadena = "Nombre: ".$_POST['nombre'];
//     // $comentario = "Comentarios".$_POST['comentarios']; 
//     fwrite($archivo,$cadena); 

//     #se cierra el fichero 
//     fclose($archivo); 
// } #aka porcada ves que se le de enviar el vacontando el este archivo 

// echo  $_POST['nombre']; 
// echo $_POST['comentarios']; 
// echo "<br>".$cadena; 
if(isset($_POST['submit'])){

    $smg= 'Name : ' . $_POST['nombre'] . "\n". ' Comentario ' .
    $_POST['comentarios'] . "\n";

    mail('gceinmark@gmail.com','Ejemplo de envio',$smg);



}else{
    echo "MAL";
}
// mail($to, $subject, $message, $headers);

// $nombre=$_POST['nombre'];
// $comentario=$_POST['comentarios'];
// if(mail('gceinmark@gmail.com',$nombre,$comentario)){
// if(mail($to, $subject, $message, $headers)){
//      echo "Email enviado";
//  }else{
//      echo "Email incorreto";
//  }
?> 
<p class="style2">Gracias por tu Comentarios</p> 
</body> 
</html>