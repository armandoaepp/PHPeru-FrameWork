<?php
function generandoVistas($atri, $aatri, $tabla, $tablaref, $arrayenlace, $arrayenlace2){

    //atributos
    $atri   = trim($atri);
    $romper = explode("*", $atri);
    /*$aatri  = array();
    for ($i = 0; $i < count($romper); $i++) {
        if (trim($romper[$i]) != "") {
            $aatri[] = $romper[$i];
        }
    }*/
    if (file_exists("./clases/Vistas/" . $tabla)) {
        $carpeta = "./clases/Vistas/" . $tabla . "/";
    } else {
        mkdir("./clases/Vistas/" . $tabla, 0777);
        $carpeta = "./clases/Vistas/" . $tabla . "/";
    }

    $extension = ".tpl.html";
    $versi=""; /*verificar esta variable*/
    if (!empty($tabla)) {

        # archivo nuevo
        $nomarchivo = $carpeta . "nuevo_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="div_' . $tabla . '">' . PHP_EOL;
        $texto .= '<form id="frm_' . $tabla . '" name="frm_' .$tabla. '" class="hform"  ng-submit="set'.ucwords($tabla).'()">' . PHP_EOL;
        $texto .= '<fieldset> <legend> Nuevo ' . ucwords($tabla) . '</legend>' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++)
        {
            if (strtolower(trim($aatri[$i])) != "estado")
            {

                    $texto .= '    <fieldset>' . PHP_EOL;
                     $texto .= '        <label for="' . $aatri[$i] . '">' . $aatri[$i] . ' : </label>' . PHP_EOL;
                     $texto .= '        <input type="text" name="' . $aatri[$i] .'" ng-model="'.$tabla.'.' . $aatri[$i] .'" />' . PHP_EOL;
                     $texto .= '    </fieldset>' . PHP_EOL;
            }
        }
         $texto .= '     <fieldset class="text-right">' . PHP_EOL;
         $texto .= '        <button  type="button" id="btnCancelar" onclick="location.href=\'#/'.$tabla.'/listar\';">Cancelar </button>' . PHP_EOL;
         $texto .= '        <button id="btregistrar" ng-disabled="frm_' . $tabla . '.$invalid"  >Registrar </button>' . PHP_EOL;
         $texto .= '    </fieldset>' . PHP_EOL;
        $texto .= '</fieldset>' . PHP_EOL;
        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);


        # archivo editar
        $nomarchivo = $carpeta . "editar_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="div_' . $tabla . '">' . PHP_EOL;
        $texto .= '<form id="frm_' . $tabla . '" name="frm_' .$tabla. '" class="hform"  ng-submit="upd'.ucwords($tabla).'()">' . PHP_EOL;
        $texto .= '<fieldset> <legend> Editar ' . ucwords($tabla) . '</legend>' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++)
        {
            if (strtolower(trim($aatri[$i])) != "estado")
            {

                    $texto .= '    <fieldset>' . PHP_EOL;
                     $texto .= '        <label for="' . $aatri[$i] . '">' . $aatri[$i] . ' : </label>' . PHP_EOL;
                     $texto .= '        <input type="text" name="' . $aatri[$i] .'" ng-model="'.$tabla.'.' . $aatri[$i] .'"  value="{{'.$aatri[$i] .'}}" />' . PHP_EOL;
                     $texto .= '    </fieldset>' . PHP_EOL;
            }
        }
         $texto .= '     <fieldset class="text-right">' . PHP_EOL;
         $texto .= '        <button  type="button" id="btnCancelar" onclick="location.href=\'#/'.$tabla.'/listar\';">Cancelar </button>' . PHP_EOL;
         $texto .= '        <button id="btregistrar" ng-disabled="frm_' . $tabla . '.$invalid"  >Registrar </button>' . PHP_EOL;
         $texto .= '    </fieldset>' . PHP_EOL;
        $texto .= '</fieldset>' . PHP_EOL;
        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);

        # archivo Listar
        $nomarchivo = $carpeta . "listar_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<div id="div_' . $tabla . '">' . PHP_EOL;
        $texto .= '<form id="frm_' . $tabla . '" name="frm_' .$tabla. '" class="hform"  ng-submit="upd'.ucwords($tabla).'()">' . PHP_EOL;

        $texto .= '<table class="table" >' . PHP_EOL;
        $texto .= ' <caption>LISTA DE '.strtoupper($tabla).' </caption>' . PHP_EOL;
        $texto .= '<thead>' . PHP_EOL;
        $texto .= '    <tr>' . PHP_EOL;
            for ($i = 0; $i < count($aatri); $i++)
            {
                if (strtolower(trim($aatri[$i])) != "estado")
                {

                    $texto .= '        <th>' . ucwords($aatri[$i]) . ' </th>' . PHP_EOL;
                }
            }
        $texto .= '    </tr>' . PHP_EOL;
        $texto .= '</thead>' . PHP_EOL;

        $texto .= '<tbody>' . PHP_EOL;
        $texto .= '    <tr ng-repeat="'.$tabla.' in '.$tabla.'s">' . PHP_EOL;

            for ($i = 0; $i < count($aatri); $i++)
            {
                if (strtolower(trim($aatri[$i])) != "estado")
                {

                    $texto .= '        <th>'.$tabla .'.'. ($aatri[$i]) . ' </th>' . PHP_EOL;
                }
            }


        $texto .= '    </tr>' . PHP_EOL;
        $texto .= '</tbody>' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '</table>' . PHP_EOL;


        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);

     /*   // CREANDO ARCHIVO LISTAR
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
                            $texto .= '<fieldset><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><select id="' . $aatri[$i] . '_" name="' . $aatri[$i] . '_">
                <?php echo $' . $tablaref[$x] . ' ;?>
                </select></fieldset>' . PHP_EOL;
                        }
                    }
                }
                if (!$versi) {
                    $texto .= '<fieldset><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ' : </label><input type="text" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="<?php echo $' . $aatri[$i] . ';?>"/></fieldset>' . PHP_EOL;
                }
            } else {
                $texto .= '<?php if($' . $aatri[$i] . '=="E"){?>' . PHP_EOL;
                $texto .= '<fieldset><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ': </label><input type="checkbox" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="E" /></p>' . PHP_EOL;
                $texto .= '<?php }if($' . $aatri[$i] . '=="A"){?>' . PHP_EOL;
                $texto .= '<fieldset><label for="' . $aatri[$i] . '_">' . $aatri[$i] . ': </label><input type="checkbox" checked="checked" name="' . $aatri[$i] . '_" id="' . $aatri[$i] . '_" value="A" /></fieldset>' . PHP_EOL;
                $texto .= '<?php }?>' . PHP_EOL;
            }
        }
        $texto .= '<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href=\'index.php?accion=Listar\';">Cancelar </button></fieldset>' . PHP_EOL;

        $texto .= '</fieldset>' . PHP_EOL;
        $texto .= '</form>' . PHP_EOL;
        $texto .= '</div>';
        fwrite($abrir, $texto);
        fclose($abrir);

        */
        return "Vista Generada Correctamente";
    }
}
?>