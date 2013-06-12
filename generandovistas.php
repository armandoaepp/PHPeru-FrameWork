<?php
function generandoVistas($atri,$aatri,$tabla,$tablaref,$arrayenlace,$arrayenlace2){
//atributos
$atri=trim($atri);
$romper=explode("*",$atri);
$aatri=array();
for($i=0;$i<count($romper);$i++){
	if(trim($romper[$i])!=""){
$aatri[]=$romper[$i];}
}
if(file_exists("./clases/Vistas/".$tabla)){
	$carpeta="./clases/Vistas/".$tabla."/";
	}else{
mkdir("./clases/Vistas/".$tabla,0777);
$carpeta="./clases/Vistas/".$tabla."/";
	}

$extension=".php";
if(!empty($tabla)){
$nomarchivo=$carpeta."Registrar_".$tabla;
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto='<div id="divRegistrar_'.$tabla.'">'.PHP_EOL;
	$texto.='<form id="frmRegistrar_'.$tabla.'" name="frmRegistrar_'.$tabla.'" method="post" action="<?php echo $accionf;?>">'.PHP_EOL;
	$texto.='<table border="0" id="tablaRegistrar_'.$tabla.'">'.PHP_EOL;
	for($i=0;$i<count($aatri);$i++){
	if(strtolower(trim($aatri[$i]))!="estado"){
		if(count($tablaref)>0){
			$versi=false;
				for($x=0;$x<count($arrayenlace);$x++){
					if($arrayenlace[$x]===$aatri[$i]){
						$versi=true;
				$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><select id="'.$aatri[$i].'_" name="'.$aatri[$i].'_">
				<?php echo $'.$tablaref[$x].' ;?>
				</select></td></tr>'.PHP_EOL;	
					}
					}
			}
			if(!$versi){
	$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><input type="text" name="'.$aatri[$i].'_" id="'.$aatri[$i].'_" value=""/></td></tr>'.PHP_EOL;}
}
}
$texto.='<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>'.PHP_EOL;
$texto.='<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>'.PHP_EOL;
	$texto.='</table>'.PHP_EOL;
	$texto.='</form>'.PHP_EOL;
	$texto.='</div>';
	fwrite($abrir,$texto);
	fclose($abrir);
	
	// CREANDO ARCHIVO LISTAR
	$nomarchivo=$carpeta."Listar_".$tabla;
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto='<div id="divListar_'.$tabla.'">'.PHP_EOL;
	$texto.='<?php echo $Listar_'.$tabla.' ;?>';
	$texto.='</div>';
	fwrite($abrir,$texto);
	fclose($abrir);
	//ACTUALIZAR
	$nomarchivo=$carpeta."Actualizar_".$tabla;
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto='<div id="divActualizar_'.$tabla.'">'.PHP_EOL;
	$texto.='<form id="frmActualizar_'.$tabla.'" name="frmRegistrar_'.$tabla.'" method="post" action="<?php echo $accionf;?>">'.PHP_EOL;
	$texto.='<table border="0" id="tablaActualizar_'.$tabla.'">'.PHP_EOL;
	for($i=0;$i<count($aatri);$i++){
	if(strtolower(trim($aatri[$i]))!="estado"){
		if(count($tablaref)>0){
			$versi=false;
				for($x=0;$x<count($arrayenlace);$x++){
					if($arrayenlace[$x]===$aatri[$i]){
						$versi=true;
				$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><select id="'.$aatri[$i].'_" name="'.$aatri[$i].'_">
				<?php echo $'.$tablaref[$x].' ;?>
				</select></td></tr>'.PHP_EOL;	
					}
					}
			}
			if(!$versi){
	$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><input type="text" name="'.$aatri[$i].'_" id="'.$aatri[$i].'_" value="<?php echo $'.$aatri[$i].';?>"/></td></tr>'.PHP_EOL;}
}else{
	$texto.='<?php if($'.$aatri[$i].'=="E"){?>'.PHP_EOL;
	$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><input type="checkbox" name="'.$aatri[$i].'_" id="'.$aatri[$i].'_" value="E" /></td></tr>'.PHP_EOL;
	$texto.='<?php }if($'.$aatri[$i].'=="A"){?>'.PHP_EOL;
	$texto.='<tr><td align="right">'.$aatri[$i].':</td><td><input type="checkbox" checked="checked" name="'.$aatri[$i].'_" id="'.$aatri[$i].'_" value="A" /></td></tr>'.PHP_EOL;
	$texto.='<?php }?>'.PHP_EOL;
	}
}
$texto.='<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>'.PHP_EOL;
$texto.='<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>'.PHP_EOL;
	$texto.='</table>'.PHP_EOL;
	$texto.='</form>'.PHP_EOL;
	$texto.='</div>';
	fwrite($abrir,$texto);
	fclose($abrir);
	return  "Vista Generada Correctamente";
}
}
?>