<?php
require_once("../login/conexion.php");

class usuario
{

    public function buscarUser($usuario)
    {
        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="select * from usuario where usuario='".$usuario."'";
        $rs=sqlsrv_query($conexion, $sql);

        while($row=sqlsrv_fetch_array($rs))
        {
            $filas[]=$row;
        }
        $conexion=$model ->desconectar();
        return$filas;
    
    }

}















