<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I.E. Leonard Euler</title>
  <link rel="icon" href="view/static/img/logo_leonard.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8e504b8187.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="view/static/style.css">
  <link rel="stylesheet" href="view/static/dashboard.css">
  <link rel="stylesheet" href="view/static/login.css">
</head>
<body>
<?php 
    // var_dump(session_start());
    if (isset($_GET["pagina"])) 
    {
        if (session_start())
        {
            // if($_GET["pagina"]==="dashboard" && isset($_SESSION['user']))
            if($_GET["pagina"]==="dashboard")
            {
                if (isset($_GET["lugar"]))
                {
                    if($_GET["lugar"]==="perfil"){
                        include_once "paginas/perfil.php";
                    }
                    elseif ($_GET["lugar"]==="cursos") {
                        include_once "paginas/cursos.php";
                    }
                    elseif ($_GET["lugar"]==="calificaciones") {
                        include_once "paginas/calificaciones.php";
                    }
                    elseif ($_GET["lugar"]==="album") {
                        include_once "paginas/album.php";
                    }
                    elseif ($_GET["lugar"]==="alumnos") {
                        include_once "paginas/alumnos.php";
                    }
                    elseif ($_GET["lugar"]==="usuarios") {
                        include_once "paginas/usuarios.php";
                    }
                }
                else 
                {
                    include_once "paginas/cursos.php";
                }

            }
            elseif($_GET["pagina"]==="static")
            {
                include_once "paginas/inicio.php";
            }
            else {
                include_once "paginas/login.php";
                // include_once "paginas/inicio.php";
            }
        }
    }
    else
    {
        // if (isset($_SESSION['user'])) {
        //     include_once "paginas/home.php";
        // }
        // else {
        //     include_once "paginas/login.php";
        // }
        include_once "paginas/login.php";
        
    }
    ?>
<?php //include_once "paginas/inicio.php";?>
<script src="controller/album/mostrarAlbum.js"></script>
<script src="view/static/anim.js"></script>
</body>
</html>

