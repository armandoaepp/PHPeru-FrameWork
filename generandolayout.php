<?php
function generandolayout(){
if(file_exists("./clases/Vistas")){
	$carpeta="./clases/Vistas/";
	}else{
mkdir("./clases/Vistas",0777);
$carpeta="./clases/Vistas/";
	}
$extension=".php";

$nomarchivo=$carpeta."layout";
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'.PHP_EOL;
$texto.='<html xmlns="http://www.w3.org/1999/xhtml">'.PHP_EOL;
$texto.='<head>'.PHP_EOL;
$texto.='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.PHP_EOL;
$texto.='<title><?php echo $titulo;?></title>'.PHP_EOL;
$texto.='<link href="../css/estilo_frms.css" rel="stylesheet" type="text/css"/>'.PHP_EOL;
$texto.='<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css"/>'.PHP_EOL;
$texto.='</head>'.PHP_EOL;
$texto.='<body>'.PHP_EOL.'
<table width="1056" height="252" border="0">'.PHP_EOL.'
  <tr>'.PHP_EOL.'
    <td height="45">PHPERU - APLICACIONES PHP-MVC CREATED BY @EPP</td>'.PHP_EOL.'
  </tr>'.PHP_EOL.'
  <tr>'.PHP_EOL.'
    <td height="24"><a href="?accion=Listar">Listar</a> <a href="?accion=Nuevo">Nuevo</a></td>'.PHP_EOL.'
  </tr>'.PHP_EOL.'
  <tr>'.PHP_EOL.'
    <td valign="top">'.PHP_EOL.'
    <h2><?php echo $titulo;?></h2><br />'.PHP_EOL.'
    <?php @include_once($contenido);?>'.PHP_EOL.'
    </td>'.PHP_EOL.'
  </tr>'.PHP_EOL.'
</table>'.PHP_EOL.'
</body>'.PHP_EOL.'
</html>';
	fwrite($abrir,$texto);
	fclose($abrir);
return "Layout Generado Correctamente";	
}
?>