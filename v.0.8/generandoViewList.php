<?php
function generandoViewList()
{


    if (file_exists(ADMIN."/" . $tabla)) {
      $carpeta = ADMIN."/" . $tabla . "/";
    } else {
        mkdir(ADMIN."/" . $tabla, 0777);
        $carpeta = ADMIN."/" . $tabla . "/";
    }


    $extension = ".php";

    $nomarchivo = $carpeta . "";
    $abrir      = fopen($nomarchivo . $extension, "w");
    $texto      = '<!doctype html>' . PHP_EOL;
    $texto .= '<html lang="es">' . PHP_EOL;
    $texto .= '<head>' . PHP_EOL;
    $texto .= '<meta charset="UTF-8">' . PHP_EOL;
    $texto .= '<title><?php echo $titulo;?></title>' . PHP_EOL;
    $texto .= '<link href="../css/style.css" rel="stylesheet">' . PHP_EOL;
    $texto .= '</head>' . PHP_EOL;
    $texto .= '<body>' . PHP_EOL;
    $texto .= '<div class="row">' . PHP_EOL;
    $texto .= '     <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY <a href="https://twitter.com/armandoaepp">@armandoaepp</a></h3>' . PHP_EOL ;
    $texto .= '     <div class="grid">' . PHP_EOL ;
    $texto .= '     <ul class="list-separate text-right">' . PHP_EOL;
    $texto .= '         <li class="titulo"><?php echo $titulo;?></li>' . PHP_EOL;
    $texto .= '         <li><a href="?accion=Listar" class="btn">Listar</a></li>' . PHP_EOL;
    $texto .= '         <li><a href="?accion=Nuevo" class="btn" >Nuevo</a></li>   ' . PHP_EOL;
    $texto .= '      </ul>' . PHP_EOL ;
    $texto .= '     <?php @include_once($contenido);?>' . PHP_EOL;
    $texto .= ' </div>' . PHP_EOL;
    $texto .= '</div>' . PHP_EOL ;
    $texto .= '</body>' . PHP_EOL ;
    $texto .= '</html>';
    fwrite($abrir, $texto);
    fclose($abrir);
    return "Layout Generado Correctamente";
}
?>