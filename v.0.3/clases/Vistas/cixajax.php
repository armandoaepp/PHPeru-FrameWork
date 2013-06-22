<?php
class CixAJAX
{
    // Generar una  tabla con Funciones JavaScript Modificar y Eliminar (para los Modales)
    function ImprimeTable($idTabla, $data, $pactu = "", $peli = "",$classCSS="table")
    {
        try {
            $tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" >';
            if (count($data["columnas"]) > 0) {
                $tabla .= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0; $x < count($data["columnas"]); $x++) {
                    if ($conta == 0) {
                        if ($pactu != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                        if ($peli != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla .= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';
                }
                $tabla .= "</tr>";
                $tabla .= '</thead>';
            }
            //===========CUERPO DE TABLA=================================================================================================
            $numRows = count($data["cuerpo"]);
            if ($numRows > 0) {
                $tabla .= "<tbody>";
                for ($i = 0; $i < $numRows; $i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla .= "<tr>";
                    $numColumns = count($data["columnas"]);
                    for ($z = 0; $z < $numColumns; $z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($conta == 0) {
                                if ($pactu != "") {
                                    $tabla .= '<td><a href="#" onClick="Modificar(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" title="Actualizar" ><img   title="Actualizar" src="../img/icon-edit.png" title="Actualizar"/></a></td>';
                                }
                                if ($peli != "") {
                                    $tabla .= '<td><a href="#"  onClick="Eliminar(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" ><img src="../img/icon-delete-black.png" title="Eliminar"/></a></td>';
                                }
                            }
                            $tabla .= '<td> ' . $data["cuerpo"][$i]["$columnas"] . ' </td> ';
                        }
                        $conta++;
                        $conte++;
                    }
                    $tabla .= "</tr>";
                }
                $tabla .= "</tbody>";
            } else { //solo si es k no hay datos
                $mensaje = "No se encuentran Ningun Dato Registrado";
                $tabla .= '<tfoot><tr> <td >&nbsp; ' . $mensaje . ' </td></tr></tfoot>';
            }
            //===========FIN CUERPO DE TABLA===========================================================================================
            $tabla .= "</table>";
        }
        catch (exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    
    // Generar una  tabla con Funciones JavaScript enviando el Nombre de la Funciones (para los Modales)
    function ImprimeTableFunciones($idTabla, $data, $pactu = "", $peli = "",$classCSS)
    {
        try {
            $tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" >';
            if (count($data["columnas"]) > 0) {
                $tabla .= '<thead>';
                $tabla .= '<tr>';
                $conta      = 0;
                $conte      = 0;
                $numColumns = count($data["columnas"]);
                for ($x = 0; $x < $numColumns; $x++) {
                    if ($conta == 0) {
                        if ($pactu != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                        if ($peli != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla .= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';
                }
                $tabla .= '</tr>';
                $tabla .= '</thead>';
            }
            //===========CUERPO DE TABLA=================================================================================================
            $numRows = count($data["cuerpo"]);
            if ($numRows > 0) {
                $tabla .= "<tbody>";
                for ($i = 0; $i < $numRows; $i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla .= "<tr>";
                    $numColumns = count($data["columnas"]);
                    for ($z = 0; $z < $numColumns; $z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($conta == 0) {
                                if ($pactu != "") {
                                    $tabla .= '<td><a href="#" onClick="' . $pactu . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" title="Actualizar" ><img   src="../img/icon-edit.png" title="Actualizar" width="16" height="16"/></a></td>' . "\n";
                                }
                                if ($peli != "") {
                                    $tabla .= '<td><a href="#"  onClick="' . $peli . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" ><img src="../img/icon-delete-black.png" width="16" title="Eliminar" height="16"/></a></td>' . "\n";
                                }
                            }
                            $tabla .= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp; </td>' . "\n";
                        }
                        $conta++;
                        $conte++;
                    }
                    $tabla .= '</tr>';
                }
                $tabla .= "<tbody>";
            } else { //solo si es k no hay datos
                $mensaje = "No se encuentran  Datos Registrados";
                $tabla .= '<tfoot><tr> <td >&nbsp; ' . $mensaje . ' </td></tr></tfoot>';
            }
            //===========FIN CUERPO DE TABLA===========================================================================================
            $tabla .= '</table>';
        }
        catch (exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    
    // PAGINADO
    // generar una tabla CON SOLO PAGINADO $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
    // $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5 
    function ImprimeTableP($idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$classCSS)
    {
        $tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" >';
        try {
            //if (count($data) > 0) {
            if (count($data["columnas"]) > 0) {
                $tabla .= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0; $x < count($data["columnas"]); $x++) {
                    if ($conta == 0) {
                        if ($pactu != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                        if ($peli != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla .= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>' . "\n";
                }
                $tabla .= '</tr>';
                $tabla .= '</thead>';
            }
            //===========CUERPO DE TABLA=================================================================================================
            $numRows = count($data["cuerpo"]);
            if ($numRows > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                $tabla .= "<tbody>";
                for ($i = $ini; $i < $fin; $i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla .= '<tr>';
                    for ($z = 0; $z < count($data["columnas"]); $z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($conta == 0) {
                                if ($pactu != "") {
                                    $tabla .= '<td><a href="#" onClick="' . $pactu . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" title="Actualizar" ><img  src="../img/icon-edit.png" title="Actualizar" /></a></td>' . "\n";
                                }
                                if ($peli != "") {
                                    $tabla .= '<td><a href="#"  onClick="' . $peli . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" ><img src="../img/icon-delete-black.png" title="Eliminar" /></a></td>' . "\n";
                                }
                            }
                            $tabla .= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> ' . "\n";
                        }
                        $conta++;
                        $conte++;
                    }
                    $tabla .= '</tr>';
                }
                $tabla .= "</tbody>";
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla .= '</table>';
                //===========PAGINADO======================================================================================================================
                $paginado = Paginar($numRows, $crxpag, $paginap, $cantlink);
                $tabla .= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
            } else { //solo si es k no hay datos
                $mensaje = "No se encuentran  Datos Registrados";
                $tabla .= '<tfoot><tr> <td >&nbsp; ' . $mensaje . ' </td></tr></tfoot></table><br/>';
            }
        }
        catch (exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    // PAGINADO + ORDENAR 
    // generar una tabla $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
    // $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5
    //$orderby = ordenar por columnas x defecto es -1, $classCSS=nombre de la clases css para la tabla
    function ImprimeTablePO($idTabla, $data, $pactu, $peli, $crxpag = 10, $paginap = 1, $cantlink = 5, $orderby = -1,classCSS)
    {
        $tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" >';
        try {
            if (count($data["columnas"]) > 0) {
                $tabla .= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0; $x < count($data["columnas"]); $x++) {
                    if ($conta == 0) {
                        if ($pactu != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                        if ($peli != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    //Nombres de las columnas
                    $ordenar = $x + 1;
                    $tabla .= '<th><a href="#" onClick="Paginar(\'pagina=' . $paginap . '&orden=' . $ordenar . '\'); return false"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>' . "\n";
                }
                $tabla .= "</tr>";
                $tabla .= '</thead>';
            }
            //===========CUERPO DE TABLA=================================================================================================
            $numRows = count($data["cuerpo"]);
            if ($numRows > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                $tabla .= "<tbody>";
                for ($i = $ini; $i < $fin; $i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla .= '<tr>';
                    for ($z = 0; $z < count($data["columnas"]); $z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($conta == 0) {
                                if ($pactu != "") {
                                    $tabla .= '<td><a href="#" onClick="' . $pactu . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" title="Actualizar" ><img   title="Actualizar" src="../img/icon-edit.png" title="Actualizar" width="16" height="16"/></a></td>' . "\n";
                                }
                                if ($peli != "") {
                                    $tabla .= '<td><a href="#"  onClick="' . $peli . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" ><img src="../img/icon-delete-blackimg.png" width="16" title="Eliminar" height="16"/></a></td>' . "\n";
                                }
                            }
                            $tabla .= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> ' . "\n";
                        }
                        $conta++;
                        $conte++;
                    }
                    $tabla .= '</tr>';
                }
                $tabla .= "</tbody>";
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla .= '</table>';
                //===========PAGINADO======================================================================================================================
                $paginado = Paginar($numRows, $crxpag, $paginap, $cantlink, $orderby);
                $tabla .= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
            } else { //solo si es k no hay datos
                $mensaje = "No se encuentran  Datos Registrados";
                $tabla .= '<tfoot><tr> <td >&nbsp; ' . $mensaje . ' </td></tr></tfoot></table><br>';
            }
        }
        catch (exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    
    // PAGINADO + ORDENAR + BUSCAR + UN LINK EN CADA TD SI ES K LO ENVIAN 
    // generar una tabla $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
    // $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5
    //$orderby = ordenar por columnas x defecto es -1, $classCSS=nombre de la clases css para la tabla
    function ImprimeTablePOB($idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5, $orderby = -1, $buscar = "", $link_td = "",$classCSS)
    {
        $tabla = "";
        $tabla .= '<table id="' . $idTabla . '" class="'.$classCSS.'" >';
        try {
            // if (count($data) > 0) {
            if (count($data["columnas"]) > 0) {
                $tabla .= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0; $x < count($data["columnas"]); $x++) {
                    if ($conta == 0) {
                        if ($pactu != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                        if ($peli != "") {
                            $tabla .= '<th class="td-img"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $ordenar = $x + 1;
                    $tabla .= '<th><a href="#" onClick="Paginar(\'pagina=' . $paginap . '&orden=' . $ordenar . '&busca=' . $buscar . '\'); return false"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>' . "\n";
                }
                $tabla .= "</tr>";
                $tabla .= '</thead>';
            }
            //===========CUERPO DE TABLA=================================================================================================
            $numRows = count($data["cuerpo"]);
            if ($numRows > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                $tabla .= '<tbody>';
                for ($i = $ini; $i < $fin; $i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla .= '<tr>';
                    for ($z = 0; $z < count($data["columnas"]); $z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($conta == 0) {
                                if ($pactu != "") {
                                    $tabla .= '<td><a href="#" onClick="' . $pactu . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" title="Actualizar" ><img   title="Actualizar" src="../img/icon-edit.png" title="Actualizar" width="16" height="16"/></a></td>' . "\n";
                                }
                                if ($peli != "") {
                                    $tabla .= '<td><a href="#"  onClick="' . $peli . '(' . $data["cuerpo"][$i]["$columnas"] . '); return false;" ><img src="../img/icon-delete-black.png" width="16" title="Eliminar" height="16"/></a></td>' . "\n";
                                }
                            }
                            if ($link_td != "") {
                                $ID  = $data["cuerpo"][$i][0]; // ID
                                $url = $link_td . "?id=" . $ID; // Url mas id como dato mediante el metodo get                            
                                $tabla .= '<td onclick="document.location=\'' . $url . '\' " >' . $data["cuerpo"][$i]["$columnas"] . '</td>' . "\n";
                            } else {
                                $tabla .= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> ' . "\n";
                            }
                        }
                        $conta++;
                        $conte++;
                    }
                    $tabla .= '</tr> ' . "\n";
                }
                $tabla .= '</tbody>';
                //===========FIN CUERPO DE TABLA==============================================================================
                $tabla .= '</table>';
                //===========PAGINADO======================================================================================================================
                $paginado = Paginar($numRows, $crxpag, $paginap, $cantlink, $orderby, $buscar);
                $tabla .= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
            } else { //solo si es k no hay datos
                $mensaje = "No se encuentran  Datos Registrados";
                $tabla .= '<tfoot><tr> <td >&nbsp; ' . $mensaje . ' </td></tr></tfoot></table><br>';
            }
            
        }
        catch (exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    
} // END de la Clases CIXAJAX

/*Paginado Simple::: $numRows=numero de FILAS TOTALES, $crxpag=numero de Filas a MOSTRAR, 
$paginap=numeroº de Pagina que va a Mostra, $cantlink=numero de link VISIBLES
*/
function Paginar($numRows, $crxpag, $paginap, $cantlink, $orderby = -1, $buscar = "")
{
    // vamos a generar un metodo que sivar para pagina, buscar , ordenar si carajooo 
    $parametros = "";
    $textBuscar = "";
    $numOrden   = "";
    if ($buscar != "")
        $textBuscar = "&busca=" . $buscar;
    if ($orderby != -1)
        $numOrden = "&orden=" . $orderby;
    
    $parametros = $numOrden . $textBuscar;
    
    $tabla   = "";
    $cantpag = ceil($numRows / $crxpag);
    if ($cantpag > 1) {
        $ini = 1;
        $fin = $cantpag;
        // $cantlink = 5;
        if ($cantpag > $cantlink)
            $fin = $cantlink;
        if ($paginap > ceil($cantlink / 2)) {
            $resto = $cantlink % 2; // para no tener problemas cuando sea impar o par la cantidad de paginas
            if ($resto == 0) {
                $ini = $paginap - floor($cantlink / 2) + 1;
            } else {
                $ini = $paginap - floor($cantlink / 2);
            }
            //ceil($cantlink / 2) ; redondea fracciones hacia abajo
            $fin = $paginap + floor($cantlink / 2); //ceil($cantlink / 2);
            
        }
        if ($ini <= 0)
            $ini = 1;
        if ($fin > $cantpag) {
            $ini = $ini - ($fin - $cantpag);
            if ($ini <= 0)
                $ini = 1;
            $fin = $cantpag;
        }
        
        $tabla .= '<div class="pagination text-center"> <ul> ';
        if ($paginap != 1) {
            $tabla .= '<li><a href="#" onClick="Paginar(\'pagina=1' . $parametros . '\'); return false"  title="Ir Primera Pagina"> << </a></li>' . "\n";
        } else {
             $tabla .= '<li> <a href="#" class="cursor-default"> << </a> </li>' . "\n";
        }
        for ($i = $ini; $i <= $fin; $i++) {
            if ($i != $paginap) {
                $tabla .= '<li><a href="#"  onClick="Paginar(\'pagina=' . $i . $parametros . '\'); return false">' . $i . '</a></li>' . "\n";
            } else {
                $tabla .= ' <lis> <a href="#" class="active"> ' . $i . ' </a> </li>';
            }
        }
        if ($paginap != $fin) {
            $tabla .= '<li><a href="#" onClick="Paginar(\'pagina=' . $cantpag . $parametros . '\'); return false;" title="Ir Ultima Pagina"> >> </a></li>' . "\n";
        } else {
            $tabla .= '<li> <a href="#" class="cursor-default" > >> </a> </li>';
        }
        $tabla .= '</ul> </div>';
        return $tabla;
    }
}
?>