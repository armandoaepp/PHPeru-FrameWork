<?php
function generandoIndex($atri,$cabeza,$tabla,$tablaref,$arrayenlace,$arrayenlace2){
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
$nomarchivo=$carpeta."index";
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto='<?php '.PHP_EOL;
	$texto.='ob_start();'.PHP_EOL;
	$texto.='// Ceti Chiclayo '.PHP_EOL;
	$texto.='include_once "./Controlador_'.$tabla.'.php"; '.PHP_EOL;
	$texto.='include_once "../cixphp.php"; '.PHP_EOL;
	$texto.="".PHP_EOL;
	$texto.='$cix=new CixPHP();'.PHP_EOL;
	$texto.='if(isset($_GET["accion"])){'.PHP_EOL;
	$texto.='$evento=$_GET["accion"];'.PHP_EOL;
	$texto.='}else{'.PHP_EOL;
	$texto.='$evento="Listar";'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	$texto.='switch($evento){'.PHP_EOL;
	$texto.='case "Registrar":'.PHP_EOL;
	$texto.='$rpta=CRegistrar_'.$tabla.'();'.PHP_EOL;
	$texto.='$contenido="Registrar_'.$tabla.'.php";'.PHP_EOL;
	$texto.='$accionf= "?accion=Registrar";'.PHP_EOL;
	$texto.='require_once "../layout.php";';
	$texto.='break;'.PHP_EOL;
	$texto.='case "Actualizar":'.PHP_EOL;
	$texto.='$rpta=CActualizar_'.$tabla.'();'.PHP_EOL;
	$texto.='$rptamo=CBuscar_'.$tabla.'($_GET["id"]);'.PHP_EOL;	
	if(count($aatri)>0){
		for($i=0;$i<count($aatri);$i++){
		$texto.='$'.$aatri[$i].'=$rptamo["cuerpo"][0]["'.$aatri[$i].'"];'.PHP_EOL;
			}
		}
	$texto.='$contenido="Actualizar_'.$tabla.'.php";'.PHP_EOL;
	$texto.='$accionf= "?id=".$_GET["id"]."&accion=Actualizar";'.PHP_EOL;
	$texto.='require_once "../layout.php";';
	$texto.='break;'.PHP_EOL;
	$texto.='case "Eliminar":'.PHP_EOL;
	$texto.='$rpta=CEliminar_'.$tabla.'();'.PHP_EOL;
	$texto.='header("Location: ../'.$tabla.'");'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Recuperar":'.PHP_EOL;
	$texto.='$rpta=CRecuperar_'.$tabla.'();'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Listar":'.PHP_EOL;
	$texto.='$titulo="Listar '.$tabla.'";'.PHP_EOL;
	$texto.='$data=CListar_'.$tabla.'();'.PHP_EOL;
	$texto.='if(isset($_GET["pagina"])){'.PHP_EOL;
	$texto.='$page=$_GET["pagina"];}'.PHP_EOL;
	$texto.='else{$page=1;}'.PHP_EOL;	
	$texto.='$Listar_'.$tabla.'=$cix->ImprimeTable("tabla'.$tabla.'",$data,"?","?",5,$page);'.PHP_EOL;
	$texto.='$contenido="Listar_'.$tabla.'.php";'.PHP_EOL;
	$texto.='require_once "../layout.php";'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Listarsimple":'.PHP_EOL;
	$texto.='$Listarsimple_'.$tabla.'=CListadoSimple_'.$tabla.'();'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Buscar":'.PHP_EOL;
	$texto.='$rpta=CBuscar_'.$tabla.'();'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Nuevo":'.PHP_EOL;
	$texto.='$titulo= "Nuevo '.$tabla.'";'.PHP_EOL;
	$texto.='$accionf= "?accion=Registrar";'.PHP_EOL;
	$texto.='$contenido="Registrar_'.$tabla.'.php";'.PHP_EOL;
	$texto.='require_once "../layout.php";'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='case "Mactualizar":'.PHP_EOL;
	$texto.='$rptamo=CBuscar_'.$tabla.'($_GET["id"]);'.PHP_EOL;	
	if(count($aatri)>0){
		for($i=0;$i<count($aatri);$i++){
		$texto.='$'.$aatri[$i].'=$rptamo["cuerpo"][0]["'.$aatri[$i].'"];'.PHP_EOL;
			}
		}
	$texto.='$titulo= "Actualizar '.$tabla.'";'.PHP_EOL;
	$texto.='$accionf= "?id=".$_GET["id"]."&accion=Actualizar";'.PHP_EOL;
	$texto.='$contenido="Actualizar_'.$tabla.'.php";'.PHP_EOL;
	$texto.='require_once "../layout.php";'.PHP_EOL;
	$texto.='break;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	$texto.='ob_flush();'.PHP_EOL;
	$texto.='?>';
	fwrite($abrir,$texto);
	fclose($abrir);
	return  "Index Generado Correctamente";
}
}
?>