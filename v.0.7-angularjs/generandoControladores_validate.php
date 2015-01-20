<?php
function generandoControladores($atri, $tabla, $nameatri)
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
        $nomarchivo = $carpeta .$tabla."Controller";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        $texto .= '# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;

        $texto .= ' class '.$tabla.'Controller' . PHP_EOL;
        $texto  .= '{' . PHP_EOL;


        # FUNCTION get
        $texto  .= '    function c_get_'.$tabla.'()' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $obj'.ucwords($tabla).'  = new Cls'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $data = $obj'.ucwords($tabla).'->get_'.$tabla.'() ;' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION set
        $texto  .= '    function c_set_'.$tabla.'()' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            $inputs = json_decode(file_get_contents("php://input"));' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $'.strtolower($nameatri[$i]).' = Helpers::validate($inputs->'.$nameatri[$i].');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '        ' . PHP_EOL;

        $texto  .= '            $obj'.ucwords($tabla).'  = new Cls'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.$nameatri[$i].'($'.strtolower($aatri[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '            $data = $obj'.ucwords($tabla).'->get_'.$tabla.'($bean'.ucwords($tabla).') ;' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION get
        $texto  .= '    function c_get_'.$tabla.'_by_id($id)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $obj'.ucwords($tabla).'  = new Cls'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $bean_'.($tabla).'->setId($id);' . PHP_EOL;

        $texto  .= '            $data = $obj'.ucwords($tabla).'->get_'.$tabla.'() ;' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION upd
        $texto  .= '    function c_upd_'.$tabla.'()' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            $inputs = json_decode(file_get_contents("php://input"));' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $'.strtolower($nameatri[$i]).' = Helpers::validate($inputs->'.$nameatri[$i].');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '        ' . PHP_EOL;

        $texto  .= '            $obj'.ucwords($tabla).'  = new Cls'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.$nameatri[$i].'($'.strtolower($aatri[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '            $data = $obj'.ucwords($tabla).'->upd_'.$tabla.'($bean'.ucwords($tabla).') ;' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        return $rpta ;' . PHP_EOL;

        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto .= '}' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>