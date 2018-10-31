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


    $paramss = "";
        if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $paramss .= '               \''.strtolower($nameatri[$i]).'\'=> $'.strtolower($nameatri[$i]).','. PHP_EOL;
                        }
                    }
                }
    $paramss = trim($paramss, ',') ;

    // $carpeta   = "./App/Api/";


   /*  if (file_exists("./app/api/" . $tabla)) {
        $carpeta = "./app/api/" . $tabla . "/";
    } else {
        mkdir("./app/api/" . $tabla, 0777);
        $carpeta = "./app/api/" . $tabla . "/";
    } */

    if (file_exists(API."/". $tabla)) {
        $carpeta = API."/". $tabla . "/";
    } else {
        mkdir(API."/". $tabla, 0777);
        $carpeta = API."/". $tabla . "/";
    }

    $cmTable     = toCamelCase($tabla);

    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Index".$cmTable;
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
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->getAll() ;' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Listado correcto\', \'error\' => false, \'data\' => $data);' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
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
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller($cnx) ; ' . PHP_EOL;
        $texto .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;


                if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $texto .= '            $'.strtolower($nameatri[$i]).' = $inputs->'.($nameatri[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;


        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;



        $texto .= '            $data = $'.$tabla.'_controller->set'.$cmTable.'($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
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
        $texto  .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller($cnx) ; ' . PHP_EOL;
        $texto  .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;


                if (count($nameatri) > 0) {
                    for ($i = 0; $i < count($nameatri); $i++) {
                        if ($nameatri[$i] != "estado") {
                            $texto .= '            $'.strtolower($nameatri[$i]).' = $inputs->'.($nameatri[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;

        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;

        $texto .= '            $data = $'.$tabla.'_controller->update'.$cmTable.'($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;

        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE UPDATE ESTADO
        $texto .= '    case "updestado":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        // $texto .= '            $id = $_GET["id"] ;' . PHP_EOL;

        if (count($nameatri) > 0) {
            $texto .= '            $'.strtolower($nameatri[0]).' = $inputs->'.ucwords($nameatri[0]).';'. PHP_EOL;
        }
        $texto .= '            $estado = $inputs->estado;'. PHP_EOL;

        $texto  .= '' . PHP_EOL;
        $texto  .= '            $params = array(' . PHP_EOL;
        $texto .= '               \''.strtolower($nameatri[0]).'\'=> $'.strtolower($nameatri[0]).','. PHP_EOL;
        $texto .= '               \'estado\'=> $estado,'. PHP_EOL;
        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->updateEstado( $params ) ;' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
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
        $texto .= '' . PHP_EOL;
        $texto .= '            $id = $_GET["id"] ;' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->getById( $id) ;' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE DELETE
        $texto .= '    case "delete":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $id = $_GET["id"] ;' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->deleteById( $id) ;' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
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