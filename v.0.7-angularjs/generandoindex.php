<?php
function generandoIndex($atri, $nameatri, $tabla, $tablaref, $arrayenlace, $arrayenlace2)
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

    $paramss = "";
        if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $paramss .= '               $'.strtolower($nameatri[$i]).','. PHP_EOL;
                        }
                    }
                }
    $paramss = trim($paramss, ',') ;

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
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'Ctrl->get_'.$tabla.'() ;' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Se encontraron registros\', \'error\' => false, \'data\' => $data);' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Se encontraron registros\', \'error\' => false, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE set
        $texto .= '    case "set":' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $objConexion = new ClsConexion();' . PHP_EOL;
        $texto  .= '            $cnx = $objConexion->get_connection();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto .= '            $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller($cnx) ; ' . PHP_EOL;
        $texto .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;




                if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $texto .= '            $'.strtolower($nameatri[$i]).' = $inputs->'.ucwords($nameatri[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;


        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;



        $texto .= '            $data = $'.$tabla.'Ctrl->set_'.$tabla.'($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;

        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;

        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE getid
        $texto .= '    case "getid":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $id = $_GET["id"] ;' . PHP_EOL;
        $texto .= '            $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller() ; ' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'Ctrl->get_'.$tabla.'_id'.$tabla.'( $id) ;' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Se encontraron registros\', \'error\' => false, \'data\' => $data);' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Se encontraron registros\', \'error\' => false, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE upd
        $texto .= '    case "upd":' . PHP_EOL;

        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $objConexion = new ClsConexion();' . PHP_EOL;
        $texto  .= '            $cnx = $objConexion->get_connection();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto  .= '            $'.$tabla.'Ctrl = new '.ucwords($tabla).'Controller($cnx) ; ' . PHP_EOL;
        $texto  .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;


                if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $texto .= '            $'.strtolower($nameatri[$i]).' = $inputs->'.ucwords($nameatri[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;

        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;

        $texto .= '            $data = $'.$tabla.'Ctrl->upd_'.$tabla.'($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;

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