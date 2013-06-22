<?php
function generandoVistas($atri, $aatri, $tabla, $tablaref, $arrayenlace, $arrayenlace2){
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
    $versi=""; /*verificar esta variable*/
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Registrar_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="divRegistrar_' . $tabla . '">' . PHP_EOL;
        $texto .= '<form id="frmRegistrar_' . $tabla . '" name="frmRegistrar_' . $tabla . '" class="hform" method="post" action="<?php echo $accionf;?>">' . PHP_EOL;
        $texto .= '<fieldset> <legend> Nuevo ' . ucwords($tabla) . '</legend>' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            if (strtolower(trim($aatri[$i])) != "estado") {
                if (count($tablaref) > 0) {
                    $versi = false;
                    for ($x = 0; $x < count($arrayenlace); $x++) {
                        if ($arrayenlace[$x] === $aatri[$i]) {
                            $versi = true;
                            $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><select id="' . $aatri[$i] . '_" name="' . $aatri[$i] . '_" >
		                    <?php echo $' . $tablaref[$x] . ' ;?>
		                    </select></p>' . PHP_EOL;
                        }
                    }
                }
                if (!$versi) {
                    $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><input type="text" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value=""/></p>' . PHP_EOL;
                }
            }
        }
        $texto .= '<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href=\'index.php?accion=Listar\';">Cancelar </button></div>' . PHP_EOL;
        $texto .= '</fieldset>' . PHP_EOL;
        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);
        
        // CREANDO ARCHIVO LISTAR
        $nomarchivo = $carpeta . "Listar_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="divListar_' . $tabla . '">' . PHP_EOL;
        $texto .= '<?php echo $Listar_' . $tabla . ' ;?>';
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);
        //ACTUALIZAR
        $nomarchivo = $carpeta . "Actualizar_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="divActualizar_' . $tabla . '">' . PHP_EOL;
        $texto .= '<form id="frmActualizar_' . $tabla . '" name="frmRegistrar_' . $tabla . '" class="hform" method="post" action="<?php echo $accionf;?>">' . PHP_EOL;
        //$texto.='<table border="0" id="tablaActualizar_'.$tabla.'">'.PHP_EOL;
        $texto .= '<fieldset> <legend> Actualizar ' . ucwords($tabla) . '</legend>' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            if (strtolower(trim($aatri[$i])) != "estado") {
                if (count($tablaref) > 0) {
                    $versi = false;
                    for ($x = 0; $x < count($arrayenlace); $x++) {
                        if ($arrayenlace[$x] === $aatri[$i]) {
                            $versi = true;
                            $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><select id="' . $aatri[$i] . '_" name="' . $aatri[$i] . '_">
                <?php echo $' . $tablaref[$x] . ' ;?>
                </select></p>' . PHP_EOL;
                        }
                    }
                }
                if (!$versi) {
                    $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><input type="text" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="<?php echo $' . $aatri[$i] . ';?>"/></p>' . PHP_EOL;
                }
            } else {
                $texto .= '<?php if($' . $aatri[$i] . '=="E"){?>' . PHP_EOL;
                $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ': </label><input type="checkbox" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="E" /></p>' . PHP_EOL;
                $texto .= '<?php }if($' . $aatri[$i] . '=="A"){?>' . PHP_EOL;
                $texto .= '<p><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ': </label><input type="checkbox" checked="checked" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="A" /></p>' . PHP_EOL;
                $texto .= '<?php }?>' . PHP_EOL;
            }
        }
        $texto .= '<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href=\'index.php?accion=Listar\';">Cancelar </button></div>' . PHP_EOL;
        
        $texto .= '</fieldset>' . PHP_EOL;
        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Vista Generada Correctamente";
    }
}
?>