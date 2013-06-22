<?php
function generandolayout()
{
    if (file_exists("./clases/Vistas")) {
        $carpeta = "./clases/Vistas/";
    } else {
        mkdir("./clases/Vistas", 0777);
        $carpeta = "./clases/Vistas/";
    }
    $extension = ".php";
    
    $nomarchivo = $carpeta . "layout";
    $abrir      = fopen($nomarchivo . $extension, "w");
    $texto      = '<!doctype html>' . PHP_EOL;
    $texto .= '<html lang="es">' . PHP_EOL;
    $texto .= '<head>' . PHP_EOL;
    $texto .= '<meta charset="UTF-8">' . PHP_EOL;
    $texto .= '<title><?php echo $titulo;?></title>' . PHP_EOL;
    $texto .= '<link href="../css/style.css" rel="stylesheet">' . PHP_EOL;
    $texto .= '</head>' . PHP_EOL;
    $texto .= '<body>' . PHP_EOL . '
        <div class="row">' . PHP_EOL . '
            <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY @EPP</h3>' . PHP_EOL . '   
            <div><a href="?accion=Listar">Listar</a> <a href="?accion=Nuevo">Nuevo</a></div>' . PHP_EOL . '
            <h2><?php echo $titulo;?></h2><br />' . PHP_EOL . '
            <div class="grid">' . PHP_EOL . '
            	<?php @include_once($contenido);?>' . PHP_EOL . '
            </div>' . PHP_EOL . '
        </div>' . PHP_EOL . '
        </body>' . PHP_EOL . '
        </html>';
    fwrite($abrir, $texto);
    fclose($abrir);
    return "Layout Generado Correctamente";
}
?>