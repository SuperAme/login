<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['nombre'] != 'desarrollo'){
            header('location: admin.php');
        }
    } else {
        echo "ok";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
    </head>
    <body>
        <h1>Bienvenido <?php echo $_SESSION['usuario']['user_name'] ?></h1>
        <a href="php/logout.php">Cerrar Sesión</a>
    </body>
</html>