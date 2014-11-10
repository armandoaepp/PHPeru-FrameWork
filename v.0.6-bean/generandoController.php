<?php
function generandoControladores($atri, $tabla)
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
        $nomarchivo = $carpeta . "Fnc_Controller_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        $texto .= 'include_once "../../Modelado/Modelo_' . $tabla . '.php"; ' . PHP_EOL;
        //$texto.='include_once "../cixphp.php"; '.PHP_EOL;
        $texto .= 'include_once "../validacion.php"; ' . PHP_EOL;
        $texto .= 'function CRegistrar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                if ($aatri[$i] == "estado") {
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '("A");' . PHP_EOL;
                } else {
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '(validar($_POST["' . $aatri[$i] . '_"]));' . PHP_EOL;
                }
            }
        }
        $texto .= '$rpta=$en' . $tabla . '->Insertar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Actualizar
        $texto .= "" . PHP_EOL;
        $texto .= 'function CActualizar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                if ($aatri[$i] != "estado") {
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '(validar($_POST["' . $aatri[$i] . '_"]));' . PHP_EOL;
                } else {
                    $texto .= 'if(isset($_POST["' . $aatri[$i] . '_"])){' . PHP_EOL;
                    $texto .= '$estado="A";' . PHP_EOL;
                    $texto .= '}else{' . PHP_EOL;
                    $texto .= '$estado="E";' . PHP_EOL;
                    $texto .= '}' . PHP_EOL;
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '($estado);' . PHP_EOL;
                }
            }
        }
        $texto .= '$rpta=$en' . $tabla . '->Actualizar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Dar de Baja
        $texto .= "" . PHP_EOL;
        $texto .= 'function CEliminar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($_GET["id"]);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Eliminar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Recuperar
        $texto .= "" . PHP_EOL;
        $texto .= 'function CRecuperar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($_GET["id"]);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Recuperar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= 'function CListar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Listar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= 'function CListadoSimple_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->ListadoSimple_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= 'function CBuscar_' . $tabla . '($id){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($id);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Buscar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;';
        $texto .= '}' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>