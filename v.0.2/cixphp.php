<?php
class CixPHP {
    /* Version 1.1 ARMANDO PISFIL PUEMAPE
    ESTE ARCHIVO ESTA ECHO CON EL PROPOSITO DE AGILIZAR LAS PRESENTACION DE DATOS EN PHP
    PROPIEDAR PRIVADA DE Armando Enrique Pisfil Puemape (@EPP) codigo abierto 
    Puedes Utiizar para agilizar tus presentacion en php consultado desde cualkier motor
    si alguna dia te encuentras con este archivo y no lo entienedes buscame en Facebook
    saludos para todo espero generar Nuevos Conocimiento eso espero hacerlo en un
    FUTURO NO MUY LEJANO
    11/03/2013
    */
    // PARA GENERAR el cuerpo de un combo osea los  option
	function ImprimeCuerpoSelect( $data, $param_valor, $param_mostrar, $valueSelect=-1) {
		 $select ="";
       
        try {
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
			 $select.='<option value=""></option>';
                for ($i = 0;$i < $cantele;$i++) {
				$selecciona="";
					  if($valueSelect==$data["cuerpo"][$i]["$param_valor"]) {
						   $selecciona='selected="selected"' ; 
						  }
                    $select.= '<option value="' . $data["cuerpo"][$i]["$param_valor"] . '"  '. $selecciona.'>' . $data["cuerpo"][$i]["$param_mostrar"] . '&nbsp;</option>'."\n";
									
                }
            }else{
				 $select.='<option value="0">&nbsp;  No hay Elementos  &nbsp;</option>';
				}	          
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $select;
    }
	// para Generar un Combo Completo 
    function ImprimeSelect($nom, $data, $param_valor, $param_mostrar,$valueSelect=0) {
        $select = '<select name="' . $nom . '" id="' . $nom . '">';
        try {
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
				 $select.='<option value="0">&nbsp; --- Seleccione  --- &nbsp;</option>';
                for ($i = 0;$i < $cantele;$i++) {
				$selecciona="";
					  if($valueSelect==$data["cuerpo"][$i]["$param_valor"]) {
						  $selecciona='selected="selected"' ; 
						  }
                    $select.= '<option value="' . $data["cuerpo"][$i]["$param_valor"] . '"  '.  $selecciona.' >' . $data["cuerpo"][$i]["$param_mostrar"] . '&nbsp;</option>'."<br>";
									
                }
            }else{
				 $select.='<option value="0">&nbsp;  nop hay Elementos &nbsp;</option>';
				}	
            $select.= '</select>';
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $select;
    }
   //===========GENERAR TABLA SIMPLE MOSTRANDO TODOS LOS DATOS   class css =============================================================
    function ImprimeTable($idTabla, $data, $pactu = "", $peli = "",$classCSS="") {      
		try {
           // if (count($data) > 0) {
			   $tabla = '<table id="'.$idTabla.'" class="' . $classCSS . '"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" >';
			   if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
				
                for ($x = 0;$x < count($data["columnas"]);$x++) {
					 
                    if ($pactu != "") {
                        if ($conta == 0) {;
						 $tabla.= '<th></th>';
                         //$tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<th></th>';
							//$tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla.= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';                                    
                }
				$tabla.= "</tr>";
				$tabla.= '</thead>';
			   }
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                for ($i = 0;$i < $cantele;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr>";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                    $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar" id='.$data["cuerpo"][$i]["$columnas"].' title="Actualizar" ><img  id='.$data["cuerpo"][$i]["$columnas"].' title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                    $tabla.= '<td><a href="' . $peli . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>';
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp;   </td>';
                        }
                    }
                    $tabla.= "</tr>";
                }
                
            }else{//solo si es k no hay datos
				$mensaje= "No se encuentran Datos Registrados"; 
			  $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot>';
				}
						 
			//===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= "</table><br>";
				//}
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    //===========GENERAR TABLA PAGINA CONTROLANDO LA CANTIDA DE LINK A MOSTRAR============================================================
    function ImprimeTableP($id, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5 ,$classCSS="") {
        $tabla = '<table id="' . $id . '" class="' . $classCSS . '"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
        try {
            if (count($data) > 0) {
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla.= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';
                  
                    
                }
            }
            $tabla.= '</tr>';
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                for ($i = $ini;$i < $fin;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= '<tr>';
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                    $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                    $tabla.= '<td><a href="' . $peli . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>';
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp;</td>';
                        }
                    }
                    $tabla.= '</tr>';
                }
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= '</table><br>';
                //===========PAGINADO======================================================================================================================
                $paginado =Paginar_PHP($cantele, $crxpag, $paginap, $cantlink);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
                
            }
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    //===========GENERAR TABLA PAGINA CONTROLANDO LA CANTIDA DE LINK A MOSTRAR + ORDENAR POR CULMNAS ======================================
    function ImprimeTablePO($id, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5, $orderby = 1,$classCSS="") {
        try {
            $tabla = '<table id="' . $id . '" class="' . $classCSS . '"   cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
            if (count($data) > 0) {
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $ordenar = $x + 1;
                    $tabla.= '<th><a href="?pagina=' . $paginap . '&orden=' . $ordenar . '"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>';
                }
            }
            $tabla.= "</tr>";
            //===========CUERPO DE TABLA===================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                for ($i = $ini;$i < $fin;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr>";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                    $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                    $tabla.= '<td><a href="' . $peli . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>';
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp;   </td>';
                        }
                    }
                    $tabla.= "</tr>";
                }
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= "</table><br>";
                //===========PAGINADO====================================================================================================================
                $paginado =Paginar_PHP($cantele, $crxpag, $paginap, $cantlink, $orderby);
                $tabla.= $paginado;
                //===========FIN PAGINADO ===============================================================================================================
                
            }
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    //===========GENERAR TABLA PAGINA CONTROLANDO LA CANTIDAD DE LINK A MOSTRAR + ORDENAR POR COLUMNAS + ELIMINAR EN SERIE =================
    function ImprimeTablePOB($id, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5, $orderby = 1,$buscar = "",$classCSS="") {
        try {
            $tabla.= Buscar($buscar);
          
            $tabla.= '<table id="' . $id . '" class="' . $classCSS . '"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
            //  echo "Cantidad ede :". count($data) ;
            if (count($data) > 0) {
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {
                             $tabla.='<td></td>';                         
                        }
                    }
                    $conta++;
                    $conte++;
                    $ordenar = $x + 1;
                    $tabla.= '<th><a href="?pagina=' . $paginap . '&orden=' . $ordenar . '&busca='.$buscar.'"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>';
                }
            }
            $tabla.= "</tr>";
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                for ($i = $ini;$i < $fin;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr>";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                    $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>' . "\n";
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {
                                    $tabla.= '<td><a href="' . $peli . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>';
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if($link_td==""){
								// para mandar el ID y poder redireccionar cuando se haga clic een la fila 
								$ID= $data["cuerpo"][$i][0] ; // ID
								$url =$link_td."?id=".$ID;// Url mas id como dato mediante el metodo get 							
								$tabla.= '<td onclick="document.location=\''.$url.'\' " >&nbsp;'.$data["cuerpo"][$i]["$columnas"] .'&nbsp; </td>'."\n";
							}else{
								$tabla.= '<td>&nbsp;'.$data["cuerpo"][$i]["$columnas"] .'&nbsp; </td>'."\n";
							}
                        }
                    }
                    $tabla.= "</tr>";
                }
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= "</table><br>"; //===========PAGINADO=====================================================================================================================
                $paginado=Paginar_PHP($cantele, $crxpag, $paginap, $cantlink, $orderby, $buscar);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
                
            }
            $tabla.= " </form>";
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
    //== TABLA PAGINA CONTROLANDO LA CANTIDAD DE LINK A MOSTRAR + ORDENAR POR COLUMNAS + ELIMINAR EN SERIE + BUSCAR + link en cada fila===
    function ImprimeTablePOEB($id, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5, $orderby = - 1, $buscar = "",$link_td="",$classCSS="") { 
        try { 
		$tabla="";
		$tabla.= Buscar($buscar);
            $tabla.= '<form action="?accion=EliminarSerie" method="POST">';
            $tabla.= '<table id="' . $id . '" class="' . $classCSS . '"   cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
            if (count($data) > 0) {
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {
                            // $tabla.='<td></td>';
                            $tabla.= '<th><input type="submit" value="Eliminar"></th>';
                        }
                    }
                    $conta++;
                    $conte++;
                    //$tabla.='<th>' . utf8_encode($data["columnas"][$x]) . '</th>';
                    $ordenar = $x + 1;
                    $tabla.= '<th><a href="?pagina=' . $paginap . '&orden=' . $ordenar . '&busca='.$buscar.'">' . utf8_encode($data["columnas"][$x]) . '</a></th>';
                }
            }
            $tabla.= "</tr>";
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                $fin = $paginap * $crxpag;
                $ini = $fin - $crxpag;
                for ($i = $ini;$i < $fin;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr >";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                    $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>' . "\n";
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {
                                    $tabla.= '<td> <input type="checkbox" name="chk[]" value=' . $data["cuerpo"][$i]["$columnas"] . '> </td>' . "\n";
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
							if($link_td==""){
							// para mandar el ID y poder redireccionar cuando se haga clic een la fila 
							$ID= $data["cuerpo"][$i][0] ; // ID
							$url =$link_td."?id=".$ID;// Url mas id como dato mediante el metodo get 							
                  			$tabla.= '<td onclick="document.location=\''.$url.'\' " >&nbsp;'.$data["cuerpo"][$i]["$columnas"] .'&nbsp; </td>'."\n";
							}else{
								 $tabla.= '<td>&nbsp;'.$data["cuerpo"][$i]["$columnas"] .'&nbsp; </td>'."\n";
								 }
							
                        }
                    }
                    $tabla.= "</tr>";
                }
                //===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= "</table><br>"; //===========PAGINADO=====================================================================================================================
                $paginado =Paginar_PHP($cantele, $crxpag, $paginap, $cantlink, $orderby, $buscar);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
                
            }
            $tabla.= " </form>";
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }  
	
}// find de la CLASES CIX

/*Paginado Simple::: $cantele=numero de FILAS TOTALES, $crxpag=numero de Filas a MOSTRAR, 
$paginap=numeroº de Pagina que va a Mostra, $cantlink=numero de link VISIBLES
*/
function Paginar_PHP($cantele, $crxpag, $paginap, $cantlink, $orderby=-1, $buscar="") {
	// vamos a generar un metodo que sivar para pagina, buscar , ordenar si carajooo 
		$parametros="";
		$textBuscar="";
		$numOrden="";
		if($buscar!="")	$textBuscar="&busca=".$buscar."&accion=Listar";
		if($orderby!=-1) $numOrden="&orden=".$orderby;
		
		$parametros=$numOrden.$textBuscar;		
	
     $tabla="";
    $cantpag = ceil($cantele / $crxpag);
    //  $inicio = ($paginap - 1) * $crxpag;
    if ($cantpag > 1) {
        $ini = 1;
        $fin = $cantpag;
        // $cantlink = 5;
        if ($cantpag > $cantlink) $fin = $cantlink;
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
        if ($ini <= 0) $ini = 1;
        if ($fin > $cantpag) {
            $ini = $ini - ($fin - $cantpag);
            if ($ini <= 0) $ini = 1;
            $fin = $cantpag;
        }
        $tabla.= '<table id="paginacion"  class="paginacion"   cellpadding="0" cellspacing="0" border="1" align="center" style="text-align:center" ><tr>';
        if ($paginap != 1) {
            $tabla.= '<td width="30px"><a  href="?pagina=1'.$parametros.'" title="Ir Primera Pagina"><<</a></td>';
        } else {
            $tabla.= '<td width="30px"><<</td>';
        }
        for ($i = $ini;$i <= $fin;$i++) {
            if ($i != $paginap) {
                $tabla.= '<td width="30px"><a  href="?pagina=' . $i  .$parametros.'"  title="Pag ' . $i . ' ">' . $i . '</a></td>';
             } else {
                $tabla.= '<td width="30px">' . $i . '</td>';
			 }
        }
        if ($paginap != $fin) {
            $tabla.= '<td width="30px"><a   href="?pagina=' . $cantpag .$parametros.'" title="Ir Ultima Pagina">>></a></td>';
        } else {
            $tabla.= '<td width="30px">>></td>';
        }
        $tabla.= "</tr></table>";
    }
	
    return $tabla;
}
// imprime el formulario a Buscar
function Buscar($buscar) {
	$opBuscar ="";
	$opBuscar .='<div id="frmbusqueda" style="float:left;margin:2px;">';
    $opBuscar .= '<form id="frmbuscar" action="?accion=Listar" method="POST">' . "\n";
    $opBuscar .= ' <input type="search" class="text" id="busca"  name="busca" placeholder="Buscar"  value="' . $buscar . '">' . "\n";
    //$opBuscar .= '<input type="submit" value="Buscar">' . "\n";
	$opBuscar .= '<button type="submit"   class="boton" id="Buscar"><img src="../imgcixphp/ico_buscar.png" alt="Buscar"/>Buscar</button> ' . "\n";
    $opBuscar .= '</form>' . "\n";
	$opBuscar .= '</div>';
    return $opBuscar;
}
?>