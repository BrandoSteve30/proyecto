<?php
require_once '../../model/conexion.php';

$model=new conexion();
$con=$model->conectar();

// en el caso de solo querer determinadas columnas usar esto con el mismo nombre de las columnas...
$columnas=['codigoImg','nombreImagen','titulo','descripcion','fechaRegistro'];

// tabla a seleccionar
$tabla='album';

// limite de registros
$limite = 12;
$pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 0;

if (!$pagina) {
    $inicio=0;
    $pagina=1;
}else {
    $inicio=($pagina-1) * $limite;
}

$sLimite = " offset $inicio rows fetch next $limite rows only ";

//usamos las columnas o la consulta personalisada...
// $sql = "select $sLimite ".implode(", ", $columnas)." from $tabla $where";
// cantidad de registros devueltos en la consulta
$contar="select * from $tabla";

$sql = "select ".implode(", ", $columnas)." from $tabla order by codigoImg $sLimite";
// para verificar errores en la consulta
// echo $sql;


// $resulContar=sqlsrv_query($con,$contar, array(), array("Scrollable"=>"buffered"));
$resulContar=sqlsrv_query($con,$contar, array(), array("Scrollable"=>SQLSRV_CURSOR_KEYSET));

$resultado=sqlsrv_query($con,$sql, array(), array("Scrollable"=>"buffered"));
// $resultado=sqlsrv_query($con,$sql, array(), array("Scrollable"=>SQLSRV_CURSOR_KEYSET));
// para saber el numero de filas

$totalContar = sqlsrv_num_rows($resulContar);

$filas = sqlsrv_num_rows($resultado);

// validacion del mensaje

$msg = '';

if ($totalContar===0) {
    $msg = '';
} elseif ($totalContar===1) {
    $msg = "Mostrando 1 Registro de un Total de 1 Registro.";
} elseif ($inicio+$limite>$totalContar) {
    $msg = "Mostrando Registros del ".$inicio+1 ." al $totalContar de un Total de $totalContar Registros.";
} else {
    $msg = "Mostrando Registros del ".$inicio+1 ." al ".$inicio+$limite." de un Total de $totalContar Registros.";
}

$output=[];
// $output['mensaje']= $msg;
$output['data']= '';
$output['paginacion']= '';

if ($filas>0) {
    while ($fila=sqlsrv_fetch_array($resultado)) {
        
        $fecha=$fila['fechaRegistro']-> format('d/m/Y');

        $output['data'].= "<div class='card' style='width: 25rem;'>";
        $output['data'].= "<img class='card-img-top' src=view/static/albumImg/".$fila['nombreImagen']." alt='Card image cap'>";
        $output['data'].= "<div class='card-body'>";
        $output['data'].= "<h5 class='card-title'>".$fila['titulo']."</h5>";
        // $output['data'].= "<p class='card-text'>".$fila['descripcion']."</p>";
        // $output['data'].= "<p class='card-text'>$fecha</p>";
        $output['data'].= "</div>";
        $output['data'].= "</div>";
    }
} else {
    $output['data'].= "<div class='card' style='width: 18rem;'>";
    $output['data'].= "<img class='card-img-top' src=view/static/albumImg/sinImagen.png alt='Sin Imágen'>";
    $output['data'].= "<div class='card-body'>";
    $output['data'].= "<h5 class='card-title'>Sin Imágenes</h5>";
    // $output['data'].= "<p class='card-text'>Aun no se han registrado imágenes al albúm</p>";
    $output['data'].= "</div>";
    $output['data'].= "</div>";
}

// paginacion
if ($totalContar===1) {
    $output['paginacion']= '';
} elseif ($totalContar>0) {
    $paginasTotal = ceil($totalContar / $limite);

    if ($paginasTotal==1) {
        $output['paginacion']= '';
    }else {
        
        // condiciones para mostrar las paginas
        $pagInicio = 1;
    
        if (($pagina - 3)>1) {
            $pagInicio = $pagina - 2;
        }
    
        $pagFinal = $pagInicio + 4;
    
        if ($pagFinal>$paginasTotal) {
            $pagFinal =  $paginasTotal;
        }
    
        // activacion del boton anterior
    
        if ($pagina==$pagInicio) {
            $output['paginacion'] .= "<button disabled onclick='getDataW(".$pagina-1 .");'>Anterior</button>";
        } else {
            $output['paginacion'] .= "<button class='activo' onclick='getDataW(".$pagina-1 .");'>Anterior</button>";
        }
    
        $output['paginacion'] .= "<ul>";
    
    
        // pagina inicial anclada
    
        if ($pagInicio>2) {
            $output['paginacion'] .= "<li><a href='#' onclick='getDataW(1);'>1</a></li>";
            $output['paginacion'] .= "<li class='ancla'><a>...</a></li>";
        }
    
        // paginas dinamicas
    
        for ($i = $pagInicio; $i <= $pagFinal; $i++) {
            if ($pagina==$i) {
                $output['paginacion'] .= "<li class='actual'><a>$i</a></li>";
            }else {
                $output['paginacion'] .= "<li><a href='#' onclick='getDataW($i);'>$i</a></li>";
            }
        }
    
        // pagina final anclada
    
        if ($pagFinal<($paginasTotal-1)) {
            $output['paginacion'] .= "<li class='ancla'><a>...</a></li>";
            $output['paginacion'] .= "<li><a href='#' onclick='getDataW($paginasTotal);'>$paginasTotal</a></li>";
        }
    
        $output['paginacion'] .= "</ul>";
    
        // activacion del boton siguiente
    
        if ($pagina==$pagFinal) {
            $output['paginacion'] .= "<button disabled onclick='getDataW(".$pagina+1 .");'>Siguiente</button>";
        } else {
            $output['paginacion'] .= "<button class='activo' onclick='getDataW(".$pagina+1 .");'>Siguiente</button>";
        }
    }


}

echo json_encode($output, JSON_UNESCAPED_UNICODE); //por si viene con 'ñ' o tildes...

?>