

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="foto">
   
    <div class="form-body">
        <img src="../img/usuario.png" alt="">
        <p class="text">BIENVENIDO <br> INICIA SESIÓN </p>
    <div class="formulario">
    <form method="post" action="controlador_login.php">
        <input type="text" name="txtusuario" placeholder="Ingrese usuario" id="usuario" required>
        <input type="password" name="txtclave" placeholder="Ingrese contraseña" id="contraseña" required>
        <button>Iniciar Sesiòn</button>
        <a class="exit" href="/leonard_euler/inicio.php">Cancelar</a>
    </form>   

    
</body>
</html>