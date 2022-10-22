<?php
//Seguridad de sessiones paginaciòn
    session_destroy();
    header("location../login/login.php");


?>
<?php
    include 'controlador_login.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>

    <h2>Bienvenido : <?php echo $_SESSION['usuario'] ?></h2>
    
    <a href="cerrar_sesion.php">cerrar sesion</a>
        
    
</body>
</html>