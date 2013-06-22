<?php
class CixPHP{
	function ImprimeLista($nom,$data,$param_valor,$param_mostrar,$tama){
		$select='<select size="'.$tama.'" name="'.$nom.'" id="'.$nom.'">';
		try{
			$cantele=count($data["cuerpo"]);
				if($cantele>0){
				for($i=0;$i<$cantele;$i++){
					$select.='<option value="'.$data["cuerpo"][$i]["$param_valor"].'">'.$data["cuerpo"][$i]["$param_mostrar"].'&nbsp;&nbsp;</option>';
					}
				}
			$select.='</select>';	
			}catch(exception $e){return $e->getMessage();}
			return $select;
		}
		function ImprimeSelect($nom,$data,$param_valor,$param_mostrar){
		$select='<select name="'.$nom.'" id="'.$nom.'">';
		try{
			$cantele=count($data["cuerpo"]);
				if($cantele>0){
				for($i=0;$i<$cantele;$i++){
					$select.='<option value="'.$data["cuerpo"][$i]["$param_valor"].'">'.$data["cuerpo"][$i]["$param_mostrar"].'</option>';
					}
				}
			$select.='</select>';	
			}catch(exception $e){return $e->getMessage();}
			return $select;
		}

	function ImprimeTable($id,$data,$pactu,$peli,$resultados,$paginap){
		$tabla='<table id="'.$id.'"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
		try{
		
			if(count($data)>0){
				$conta=0;$conte=0;
				for($x=0;$x<count($data["columnas"]);$x++){
									if($pactu!=""){
								if($conta==0){;
		$tabla.='<td></td>';
								}
								}
							if($peli!=""){
								if($conte==0){;
			$tabla.='<td></td>';
								}
								}
							$conta++;$conte++;
					$tabla.='<th>'.utf8_encode($data["columnas"][$x]).'</th>';
				}
				}
			$tabla.="</tr>";
				$cantele=count($data["cuerpo"]);
			if($cantele>0){
				$fin=$paginap*$resultados;
				$ini=$fin-$resultados;
				for($i=$ini;$i<$fin;$i++){
					$conta=0;$conte=0;
					$tabla.="<tr>";
						for($z=0;$z<count($data["columnas"]);$z++){
							$columnas=$data["columnas"][$z];
							if(isset($data["cuerpo"][$i]["$columnas"])){
							if($pactu!=""){
								if($conta==0){
		$tabla.='<td><a href="'.$pactu.'id='.$data["cuerpo"][$i]["$columnas"].'&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
								}
								}
							if($peli!=""){
								if($conte==0){;
			$tabla.='<td><a href="'.$peli.'id='.$data["cuerpo"][$i]["$columnas"].'&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>';
								}
								}
							}
							$conta++;$conte++;
								if(isset($data["cuerpo"][$i]["$columnas"])){	
					$tabla.='<td>&nbsp;&nbsp;'.$data["cuerpo"][$i]["$columnas"].'&nbsp;&nbsp;   </td>';
						}}
						$tabla.="</tr>";
					}
				$tabla.="</table><br>";
				$paginas=$cantele/$resultados;
				if(strpos($paginas,".")){
					$romperca=explode(".",trim($paginas));
					$paginas=$romperca[0];
					$paginas++;
					
					}
					if($paginas==1){
						$paginas=0;
						}
					
					if($paginas>0){
						$tabla.='<table id="paginacion"  cellpadding="0" cellspacing="0" border="1" align="center" style="text-align:center" ><tr>';
							$tabla.='<td width="30px"><a  href="?pagina=1""><<</a></td>';
				$mostrars=5;
				if($paginap>3){
					$ini=$paginap-2;
					$finp=$paginap+2;
					}else{
						$ini=1;
						$finp=5;
					}
					if($finp>$paginas){
						if($paginap>=4){	$ini=$paginas-4;
							}else{$ini=1;}
					
						$finp=$paginas;
						}
							
				for($p=$ini;$p<=$finp;$p++){
					if($paginap==$p){
					$tabla.='<td width="30px">'.$p.'</td>';				
					}
					else{
					$tabla.='<td width="30px"><a  href="?pagina='.$p.'">'.$p.'</a></td>';	
						}
				}
				$tabla.='<td width="30px"><a   href="?pagina='.$paginas.'">>></a></td>';	
							$tabla.="</tr></table>";
					}
			
		}
			}catch(exception $e){return $e->getMessage();}
			return $tabla;	
		}
		}
?>
