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
			# 1  PROCEDURE SET
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
					$texto.='	INSERT INTO  '.$tabla.'('.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					$texto.= $concat1;
					$texto.= PHP_EOL.'	)'.PHP_EOL ;
					$texto.='	VALUES('.PHP_EOL ;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat2.= "		".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat2.= "		".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.=substr($concat,0,-1);
					$texto.= $concat2 ;
					$texto.= PHP_EOL.'	);'.PHP_EOL;

				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;

				$texto.= PHP_EOL;

			# 2 PROCEDURE UPDATE
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
					$texto.='	UPDATE '.$tabla.' SET'.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"]." = ".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"]." = ".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					$texto.= $concat1.PHP_EOL;
					$texto.='	WHERE ' ;
					$texto.= $tabla.".".$data["cuerpo"][0]["Field"]." = ".$data["cuerpo"][0]["Field"] .";" ;

					$texto.= PHP_EOL;
				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;

				$texto.= PHP_EOL;

			# 3 PROCEDURE CAMBIAR ESTADO
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$last = count($data["cuerpo"])-1 ;
				$texto.='CREATE PROCEDURE usp_upd_'.$tabla.'_estado('.$data["cuerpo"][0]["Field"] ." ".$data["cuerpo"][0]["Type"] .','.$data["cuerpo"][$last]["Field"] ." ".$data["cuerpo"][$last]["Type"] .') '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='	UPDATE '.$tabla.' SET'.PHP_EOL;

								$concat1.= "		".$tabla.".".$data["cuerpo"][count($data["cuerpo"])-1]["Field"]." = ".$data["cuerpo"][count($data["cuerpo"])-1]["Field"];
					$texto.= $concat1.PHP_EOL;
					$texto.='	WHERE ' ;
					$texto.= $tabla.".".$data["cuerpo"][0]["Field"]." = ".$data["cuerpo"][0]["Field"] .";" ;

					$texto.= PHP_EOL;

				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;
				$texto.= PHP_EOL;

			# 4 PROCEDURE SELECT BY ID
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_get_'.$tabla.'_by_'.$data["cuerpo"][0]["Field"].'('.$data["cuerpo"][0]["Field"] ." ".$data["cuerpo"][0]["Type"] .') '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='	SELECT '.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.= trim($concat1, ',');
					$texto.= $concat1.PHP_EOL ;
					$texto.='	FROM '.$tabla.PHP_EOL ;
					$texto.='	WHERE  '.$tabla.".".$data["cuerpo"][0]["Field"]. " = ".$data["cuerpo"][0]["Field"].";".PHP_EOL ;

				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;
				$texto.= PHP_EOL;

			# 5  PROCEDURE SELECT ALL
				$concat0 = '';
				$texto.='DELIMITER ;;'.PHP_EOL;;
				$texto.='CREATE PROCEDURE usp_get_'.$tabla.'() '.PHP_EOL;
				$texto.='BEGIN'.PHP_EOL;
					$concat1 = '';
					$concat2 = '';
					$texto.='	SELECT '.PHP_EOL;
						for($i=0;$i<count($data["cuerpo"]);$i++)
						{
							if(count($data["cuerpo"])==($i+1))
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"];
								break ;
							}else
							{
								$concat1.= "		".$tabla.".".$data["cuerpo"][$i]["Field"].",".PHP_EOL;
							}
						}
					// $texto.= trim($concat1, ',');
					$texto.= $concat1.PHP_EOL ;
					$texto.='	FROM '.$tabla.";".PHP_EOL ;
				$texto.='END;;'.PHP_EOL;
				$texto.='DELIMITER ;;'.PHP_EOL;
				$texto.= PHP_EOL;

		}

		fwrite($abrir,$texto);
		fclose($abrir);
		return  "Clase Generada Correctamente";
		}
}
?>