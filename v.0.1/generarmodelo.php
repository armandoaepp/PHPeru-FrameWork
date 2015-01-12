<?php
function generarmodelo($atri,$cListar,$tabla){
//atributos
$atri=trim($atri);
$romper=explode("*",$atri);
$aatri=array();
for($i=0;$i<count($romper);$i++){
	if(trim($romper[$i])!=""){
$aatri[]=$romper[$i];}
}
$carpeta="./clases/Modelado/";
$extension=".php";
$clase="Clase_".$tabla;
if(!empty($tabla)){
$nomarchivo=$carpeta."Modelo_".$tabla;
	$abrir=fopen($nomarchivo.$extension,"w");
	$texto.='<?php '.PHP_EOL;
	$texto.='/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */'.PHP_EOL;
	$texto.='class '.$clase.'{'.PHP_EOL;
	$texto.='//Constructor'.PHP_EOL;
	$texto.='public function '.$clase.'(){}'.PHP_EOL;
	$texto.='//Atributos'.PHP_EOL;
	for($i=0;$i<count($aatri);$i++){
	$texto.='private $'.$aatri[$i].';'.PHP_EOL;
	}
	$texto.='//Propiedades'.PHP_EOL;
	for($i=0;$i<count($aatri);$i++){
$texto.='public function set'.$aatri[$i].'($'.$aatri[$i].'_){ $this->'.$aatri[$i].'=$'.$aatri[$i].'_;}'.PHP_EOL;
	$texto.='public function get'.$aatri[$i].'(){ return $this->'.$aatri[$i].';}'.PHP_EOL;
	}
	$texto.='//Métodos'.PHP_EOL;
	$texto.='//Método Insertar'.PHP_EOL;
	//Inicia Metodo Registrar
	$texto.='public function Insertar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta;'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//comenzamos a insertar Registros
	$texto.='$consulta="Insert into '.$tabla.' values(';
		for($i=0;$i<count($aatri);$i++){
	$concat.="'".'$this->'.$aatri[$i]."',";
	}
	$texto.=substr($concat,0,-1);
	$texto.=')";'.PHP_EOL;
	$texto.='$rpta=$con->MetodoRegistrar($consulta);'.PHP_EOL;
	//fin de comenzar a insertar
	$texto.=PHP_EOL;
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	//metodo Listar
	$texto.='//Método Listar'.PHP_EOL;
	$texto.='public function Listar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta=array();'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//Listamos
	$texto.='$consulta="'.$cListar.'";'.PHP_EOL;	
	$texto.='$rpta=$con->Listar($consulta);'.PHP_EOL;
	//fin de listar
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	// fin del metodo Listar}
	$texto.='//Método Buscar por ID'.PHP_EOL;
	$texto.='public function Buscar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta=array();'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//Listamos
	$texto.='$consulta= "select * from '.$tabla.' where '.$aatri[0]."='".'$this->'.$aatri[0]."'".'";'.PHP_EOL;
	$texto.='$rpta=$con->Listar($consulta);'.PHP_EOL;
	//fin de listar
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	
	
	//metodo Consulta Simple
	$texto.='//Método Listar'.PHP_EOL;
	$texto.='public function ListadoSimple_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta=array();'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//Listamos
	$texto.='$consulta= "select * from '.$tabla.'";'.PHP_EOL;	
	$texto.='$rpta=$con->Listar($consulta);'.PHP_EOL;
	//fin de listar
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	// fin del metodo Listar}
	
	//metodo Eliminar(Actualizar Estado)
	$texto.='//Método Eliminar(Actualizar Estado)'.PHP_EOL;
	$texto.='public function Eliminar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta;'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//Listamos
	$texto.='$consulta="Update '.$tabla.' set estado='."'E' where ".$aatri[0]."='".'$this->'.$aatri[0]."'".'";'.PHP_EOL;	
		$texto.='$rpta=$con->MetodoRegistrar($consulta);'.PHP_EOL;
	//fin de listar
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	// fin del metodo actualizar}
	//metodo Recuperar(Actualizar Estado)
	$texto.='//Método Recuperar'.PHP_EOL;
	$texto.='public function Recuperar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta;'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//Listamos
	$texto.='$consulta="Update '.$tabla.' set estado='."'A' where ".$aatri[0]."='".'$this->'.$aatri[0]."'".'";'.PHP_EOL;	
		$texto.='$rpta=$con->MetodoRegistrar($consulta);'.PHP_EOL;
	//fin de listar
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	// fin del metodo actualizar}
	
	$texto.='//Método Actualizar'.PHP_EOL;
	//Inicia Metodo Actualizar
	$texto.='public function Actualizar_'.$tabla.'(){'.PHP_EOL;
	$texto.='$rpta;'.PHP_EOL;
	$texto.='try{'.PHP_EOL;
	$texto.="include_once 'conexion.php';".PHP_EOL;
	$texto.='$con=new Conexion();'.PHP_EOL;
	//comenzamos a actualizar los elementos
	$concat='$consulta="Update '.$tabla.' set ';
		for($z=1;$z<count($aatri);$z++){
	$concat.=$aatri[$z]."='".'$this->'.$aatri[$z]."',";
	}
	$concat=substr($concat,0,-1);
	$concat.=" where ".$aatri[0]."='".'$this->'.$aatri[0]."'".'";';
	$texto.=$concat.PHP_EOL;
	$texto.='$rpta=$con->MetodoRegistrar($consulta);'.PHP_EOL;
	//fin de comenzar a actualizar
	$texto.=PHP_EOL;
	$texto.='}catch(exception $e){'.PHP_EOL;
	$texto.=' $rpta=$e->getMessage();}'.PHP_EOL;
	$texto.='return $rpta;'.PHP_EOL;
	$texto.='}'.PHP_EOL;
	
	
	$texto.='}'.PHP_EOL;
	$texto.='?>';
	fwrite($abrir,$texto);
	fclose($abrir);
	return  "Clase Generada Correctamente";
}
}
?>