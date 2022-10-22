<?php

$_SESSION["usuario"]=null;

require_once("../login/model.php");

$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtclave'];

$consulta=new usuario();
$filas2=$consulta->buscarUsuario($usuario);

print_r($filas2);

foreach($filas2 as $columna)
{

    $id=$columna[0];
    $tusuario=$columna[1];
    $tclave=$columna[2];
}

if (($usuario=="")||($clave==""))
{
    header("location:../../login.php");

}

elseif(($usuario==$tusuario) && ($clave==$tclave))
{
    $_SESSION["user"]=$tusuario;
    session_start();
    header("location:../inicio_dash/home.php=$id");

}

else
{
    header("location:../login/login.php");
}
?>