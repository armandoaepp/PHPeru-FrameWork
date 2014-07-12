<?php
function generandoXajax($atri, $tabla)
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
        $nomarchivo = $carpeta . "xajax_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        // Incluimos los archivos xajax
        $texto .= '@require ("../xajax/xajax_core/xajax.inc.php") ; ' . PHP_EOL;
        $texto .= '$xajax= new xajax();' . PHP_EOL;
        $texto .= '$xajax->configure("javascript URI","../xajax/");' . PHP_EOL;
        $texto .= '$xajax->configure("debug",false);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= 'include_once "../../Modelado/Modelo_' . $tabla . '.php"; ' . PHP_EOL;
        $texto .= 'include_once "../validacion.php";' . PHP_EOL;
        $texto .= 'include_once "../cixajax.php";' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        // funcion Listar se envia el metodo del formulario
        $texto .= 'function XListar_' . $tabla . '($post){' . PHP_EOL;
        $texto .= '    $en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '    $en' . $tabla . '->set' . $aatri[1] . '(validar($post["'. $aatri[1] .'_"]));' . PHP_EOL;        
        $texto .= '    $data=$en' . $tabla . '->Listar_' . $tabla . '();' . PHP_EOL;

        $texto .= '    $cix=new CixAJAX();' . PHP_EOL;
        $texto .= '    $Listar_'. $tabla . '=$cix->ImprimeTableF("tabla'.$tabla.'",$data,"Editar","Eliminar","table");' . PHP_EOL;

        $texto .= '    $objResp=new xajaxResponse();' . PHP_EOL;
        $texto .= '    $objResp->assign("divListar","innerHTML", $Listar_'. $tabla .');' . PHP_EOL;
        $texto .= 'return $objResp;' . PHP_EOL;
        
        $texto .= '}' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        // Metodo XNuevo 
        $texto .= 'function XNuevo_' . $tabla . '($post){' . PHP_EOL;
        $texto .= '    $titulo="Nuevo ' . $tabla . '";' . PHP_EOL;
        $texto .= '    $objResp=new xajaxResponse();' . PHP_EOL;
        $texto .= '    $objResp->assign("accion","value","Nuevo");' . PHP_EOL;
        $texto .= '    $objResp->assign("TituloForm","innerHTML",   $titulo);' . PHP_EOL;
        $texto .= '    $objResp->script("Mostrar()");' . PHP_EOL;
        $texto .= 'return $objResp;' . PHP_EOL;        
        $texto .= '}' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        // funcion Actualizar        
        $texto .= 'function XActualizar_' . $tabla . '($id){' . PHP_EOL;
        $texto .= '    $en'.$tabla.'=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '    $en'. $tabla.'->set'. $aatri[0] . '($id);' . PHP_EOL;
        $texto .= '    $data=$en'. $tabla.'->Buscar_'.$tabla.'();' . PHP_EOL;

        $texto .= '    $titulo="Actualizar" '.$tabla.';' . PHP_EOL;
        $texto .= '    $objResp=new xajaxResponse();' . PHP_EOL;
        $texto .= '    $objResp->assign("accion","value","Actualizar");' . PHP_EOL;
        $texto .= '    $objResp->assign("TituloForm","innerHTML",   $titulo);' . PHP_EOL;
        
        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                $texto .= '    $objResp->assign("'.$aatri[$i]. '_","value", $data["cuerpo"][0]["'.$aatri[$i].'"]);'.PHP_EOL;
                // $texto .= ' $' . $aatri[$i] . '=$rptamo["cuerpo"][0]["' . $aatri[$i] . '"];' . PHP_EOL;
            }
        }
        $texto .= '    $objResp->script("mostrar()");' . PHP_EOL;
        $texto .= 'return $objResp;'. PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        // Funcion Registrar
        $texto .= 'function XRegistrar_' . $tabla . '($post){' . PHP_EOL;
        $texto .= '    $en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '    $accion=$post["accion"];' . PHP_EOL;

        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                if ($aatri[$i] ==  $tabla."Estado") {
                    $texto .= '    $en' . $tabla . '->set' . $aatri[$i] . '("A");' . PHP_EOL;
                } else {
                    $texto .= '    $en' . $tabla . '->set' . $aatri[$i] . '(validar($post["' . $aatri[$i] . '_"]));' . PHP_EOL;
                }
            }
        }
        $texto .= '    $objResp=new xajaxResponse();' . PHP_EOL;
        $texto .= 'if($accion=="Nuevo"){' . PHP_EOL;
        $texto .= '    $rpta=$enpais->Insertar_'.$tabla.'();' . PHP_EOL;
        $texto .= '    $objResp->alert("Datos Registrados Correctamente!");' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'else{' . PHP_EOL;
        $texto .= '    $rpta=$enpais->Actualizar_'.$tabla.'();' . PHP_EOL;
        $texto .= '    $objResp->alert("Datos Actualizados  Correctamente!");' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= '    $objResp->script("ocultar()");' . PHP_EOL;
        $texto .= '    $objResp->script("vListar_pais()");' . PHP_EOL;
        $texto .= 'return $objResp;' . PHP_EOL;        
        $texto .= '}' . PHP_EOL;
        $texto .= '' . PHP_EOL;


        $texto .= 'function XVer($estado){' . PHP_EOL;
        $texto .= '    if($estado==0) $valor="none";' . PHP_EOL;
        $texto .= '    else $valor="";' . PHP_EOL;
        $texto .= '    $objResp=new xajaxResponse();' . PHP_EOL;
        $texto .= '    objResp->assign("divformulario","style.display",$valor);' . PHP_EOL;
        $texto .= 'return $objResp;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$flistar=& $xajax->registerFunction("XListar_'.$tabla.'");'.PHP_EOL;
        $texto .= '$flistar->setParameter(0,XAJAX_FORM_VALUES,"frmBuscar");'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$fnuevo=& $xajax->registerFunction("XNuevo_'.$tabla.'");'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$feditar=& $xajax->registerFunction("XActualizar_'.$tabla.'");'.PHP_EOL;
        $texto .= '$feditar->setParameter(0,XAJAX_JS_VALUE,"id");'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$fregistrar_pais=& $xajax->registerFunction("XRegistrar_'.$tabla.'");'.PHP_EOL;
        $texto .= '$fregistrar_pais->setParameter(0,XAJAX_FORM_VALUES,"frmRegistrar_'.$tabla.'");'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$feliminar=& $xajax->registerFunction("XEliminar_'.$tabla.'");'.PHP_EOL;
        $texto .= '$feliminar->setParameter(0,XAJAX_FORM_VALUES,"frmEliminar");'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$fmostrar=& $xajax-> registerFunction("XVer");'.PHP_EOL;
        $texto .= '$fmostrar->setParameter(0,XAJAX_JS_VALUE,1);'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$focultar=& $xajax-> registerFunction("XVer");'.PHP_EOL;
        $texto .= '$focultar->setParameter(0,XAJAX_JS_VALUE,0);'.PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '$xajax->processRequest();'.PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>