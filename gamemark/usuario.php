<div class="user">
    <a class="auser" href="../Login/login.php">Identificar</a>
        <?php 
            if (isset($nombreUsuario) and strtolower($nombreUsuario) == 'admin') {
                echo '<a class="auser" href="../Principal/privado.php">Privado</a>';
            } else {
                echo '<a class="auser" href="../Registrar/login.php">Registrar</a>';
            }
        ?>
    <a href="../Compras/compras.php"><img id="carrito" src="carrito.png"></a>
</div>