<?php
function generandoIndex($atri, $cabeza, $tabla, $tablaref, $arrayenlace, $arrayenlace2)
{
    //atributos
    $atri   = trim($atri);
    $romper = explode("*", $atri);
    $aatri  = array();
    for ($i = 0; $i < count($romper); $i++) {
        if (trim($romper[$i]) != "") {
            $aatri[] = $romper[$i];
        }
    }
    if (file_exists("./clases/Vistas/" . $tabla)) {
        $carpeta = "./clases/Vistas/" . $tabla . "/";
    } else {
        mkdir("./clases/Vistas/" . $tabla, 0777);
        $carpeta = "./clases/Vistas/" . $tabla . "/";
    }

    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Index".ucwords($tabla);
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        // $texto .= 'ob_start();' . PHP_EOL;
        $texto .= '# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;
         $texto .= "    header('content-type: application/json; charset=utf-8');" . PHP_EOL;
         $texto .= "    require_once '../../autoload.php';" . PHP_EOL;
         // $texto .= "    require_once '../helpers/Helpers.php';" . PHP_EOL;

        $texto .= "" . PHP_EOL;


        $texto .= 'if(isset($_GET["accion"]))' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        $texto .= '    $evento = $_GET["accion"];' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'elseif (isset($_POST))' . PHP_EOL;
        $texto .= '{' . PHP_EOL;

        $texto .= '    $inputs = json_decode(file_get_contents("php://input"));' . PHP_EOL;
        $texto .= '    $evento = $inputs->accion;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        $texto .= 'switch($evento)' . PHP_EOL;
        $texto .= '{' . PHP_EOL;

        # EVENTE list
        $texto .= '    case "list":' . PHP_EOL;
        $texto .= '        $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '        $data = $'.$tabla.'Ctrl->c_get_'.$tabla.'() ;' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE set
        $texto .= '    case "set":' . PHP_EOL;
        $texto .= '        $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '        $data = $'.$tabla.'Ctrl->c_set_'.$tabla.'() ;' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE getid
        $texto .= '    case "getid":' . PHP_EOL;
        $texto .= '        $id = $_GET["id"] ;' . PHP_EOL;
        $texto .= '        $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '        $data = $'.$tabla.'Ctrl->c_get_'.$tabla.'_id'.$tabla.'( $id) ;' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE upd
        $texto .= '    case "upd":' . PHP_EOL;
        $texto .= '        $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '        $data = $'.$tabla.'Ctrl->c_upd_'.$tabla.'() ;' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        $texto .= '}' . PHP_EOL;
        // $texto .= 'ob_flush();' . PHP_EOL;

        /* $texto .= '?>'; */

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Index Generado Correctamente";
    }
}
?>