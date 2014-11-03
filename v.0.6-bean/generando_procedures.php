<?php
include_once "CPHPeru.php" ;



function generarprocedure($atri,$cListar,$tabla)
{
	$phperu= new PHPPeru() ;

	$carpeta="./clases/Procedure/";
	$extension=".sql";
	$texto = '';
	if(!empty($tabla))
	{
		$nomarchivo=$carpeta."Procedure_".$tabla;
		$abrir=fopen($nomarchivo.$extension,"w");

		$texto.='/* Procedures Generada desde Cix-PHP - by power @armandoaepp */'.PHP_EOL;

		$data =$phperu->ListarCampos($tabla);
		if(count($data["cuerpo"])>0)
		{
			# PROCEDURE SELECT ALL
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_get_'.$tabla.'() '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='SELECT '.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.= trim($concat1, ',');
					$texto.= $concat1.PHP_EOL ;
					$texto.='FROM '.$tabla.";".PHP_EOL ;
				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;
				$texto.= PHP_EOL;

			# PROCEDURE SET
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_set_'.$tabla.'( ';
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							$concat0.= $data["cuerpo"][$i]["Field"]." ".$data["cuerpo"][$i]["Type"].",";
						}
				$texto.= trim($concat0, ',');
				$texto.=' ) '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='INSERT INTO  '.$tabla.'('.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.= trim($concat1, ',');
					$texto.= $concat1;
					$texto.= PHP_EOL.')'.PHP_EOL ;
					$texto.='VALUES('.PHP_EOL ;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat2.= "	".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat2.= "	".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.=substr($concat,0,-1);
					$texto.= $concat2 ;
					$texto.= PHP_EOL.');'.PHP_EOL;

				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;

				$texto.= PHP_EOL;

			# PROCEDURE UPDATE
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_upd_'.$tabla.'( ';
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							$concat0.= $data["cuerpo"][$i]["Field"]." ".$data["cuerpo"][$i]["Type"].",";
						}
				$texto.= trim($concat0, ',');
				$texto.=' ) '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='UPDATE '.$tabla.' SET'.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"]." = ".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"]." = ".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					$texto.= $concat1.PHP_EOL;
					$texto.='WHERE ' ;
					$texto.= $tabla.".".$data["cuerpo"][0]["Field"]." = ".$data["cuerpo"][0]["Field"] .";" ;

					$texto.= PHP_EOL;
				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;

				$texto.= PHP_EOL;

			# PROCEDURE SELECT BY ID
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_get_'.$tabla.'_by_'.$data["cuerpo"][0]["Field"].'('.$data["cuerpo"][0]["Field"] ." ".$data["cuerpo"][0]["Type"] .') '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='SELECT '.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "	".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.= trim($concat1, ',');
					$texto.= $concat1.PHP_EOL ;
					$texto.='FROM '.$tabla.PHP_EOL ;
					$texto.='WHERE  '.$tabla.".".$data["cuerpo"][0]["Field"]. " = ".$data["cuerpo"][0]["Field"].";".PHP_EOL ;

				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;
				$texto.= PHP_EOL;

		}

	# atributos
	/*$atri=trim($atri);
	$romper=explode("*",$atri);
	$aatri=array();
	for($i=0;$i<count($romper);$i++)
	{
		if(trim($romper[$i])!="")
		{
			$aatri[]=$romper[$i];
		}
	}

	$carpeta="./clases/Procedure/";
	$extension=".sql";
	$texto = '';
	if(!empty($tabla)){
		$nomarchivo=$carpeta."Procedure_".$tabla;
		$abrir=fopen($nomarchivo.$extension,"w");

		$texto.='# Procedures Generada desde Cix-PHP - by power @armandoaepp '.PHP_EOL;


		$texto.='//Atributos'.PHP_EOL;
		for($i=0;$i<count($aatri);$i++){
			$texto.='private $'.$aatri[$i].';'.PHP_EOL;
		}

		$texto.='CREATE PROCEDURE usp_() '.PHP_EOL;
		$texto.='BEGIN'.PHP_EOL;
			$concat1 = '';
			$concat = '';
			$texto.='INSERT INTO  '.$tabla.'('.PHP_EOL;
				for($i=0;$i<count($aatri);$i++){
					$concat1.= $tabla.".".$aatri[$i].",".PHP_EOL;
				}
			$texto.= trim($concat1, ',');
			$texto.=	')'.PHP_EOL ;
			$texto.=' VALUES(';
			for($i=0;$i<count($aatri);$i++){
				$concat.= $aatri[$i].",";
			}
			$texto.=substr($concat,0,-1);
			$texto.=')";'.PHP_EOL;

		$texto.='END;'.PHP_EOL;*/
/*
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
		$texto.='$consulta="Update '.$tabla.' set Estado='."'E' where ".$aatri[0]."='".'$this->'.$aatri[0]."'".'";'.PHP_EOL;
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
		$texto.='?>';*/
		fwrite($abrir,$texto);
		fclose($abrir);
		return  "Clase Generada Correctamente";
		}
}
?>