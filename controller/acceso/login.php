<?php

$_SESSION["user"]=null;

require_once("../../model/usuarios.php");
	
$dni=$_POST['dni'];
$clave=$_POST['clave'];

$consultas=new user();
$filas2=$consultas->buscarUser($dni);

if ($filas2 != null) 
{
	foreach($filas2 as $columna) 
	{

		$tdni = $columna[0];
		$tusu=$columna[1];
		$tclave = $columna[2];
		$ttipo = $columna[3];
			
	}
}
else{
	$tdni = '00000000';
	$tclave = '000000';
}

if(($dni==$tdni) && ($clave == $tclave))
{

    session_name($tusu);
	session_start();
	$_SESSION["user"]=$tusu;
    $sesion=session_name();
	$_SESSION["tipo"]=$ttipo;
    echo $_SESSION['user'], " | ", $_SESSION['tipo'], " | ", $sesion;
	header("location:../../index.php?pagina=dashboard");
    // session_destroy();

}

else
{
	header("location:../../index.php");
}

?>
