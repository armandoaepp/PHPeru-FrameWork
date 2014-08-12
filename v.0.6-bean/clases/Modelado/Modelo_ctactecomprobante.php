<?php
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_ctactecomprobante{
//Constructor
	public function Clase_ctactecomprobante(){}
//Atributos
	private $cCtaCteRecibo;
	private $nCtaCteComCodigo;
	private $cCtaCteComNumero;
	private $nCtaCteTipoPago;
	private $cPerCodigo;
//Propiedades
	public function setcCtaCteRecibo($cCtaCteRecibo_){ $this->cCtaCteRecibo=$cCtaCteRecibo_;}
	public function getcCtaCteRecibo(){ return $this->cCtaCteRecibo;}
	public function setnCtaCteComCodigo($nCtaCteComCodigo_){ $this->nCtaCteComCodigo=$nCtaCteComCodigo_;}
	public function getnCtaCteComCodigo(){ return $this->nCtaCteComCodigo;}
	public function setcCtaCteComNumero($cCtaCteComNumero_){ $this->cCtaCteComNumero=$cCtaCteComNumero_;}
	public function getcCtaCteComNumero(){ return $this->cCtaCteComNumero;}
	public function setnCtaCteTipoPago($nCtaCteTipoPago_){ $this->nCtaCteTipoPago=$nCtaCteTipoPago_;}
	public function getnCtaCteTipoPago(){ return $this->nCtaCteTipoPago;}
	public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
	public function getcPerCodigo(){ return $this->cPerCodigo;}
//Métodos
//Método Insertar
	public function Insertar_ctactecomprobante(){
		$rpta;
		try{
			include_once 'conexion.php';
			$con=new Conexion();
			$consulta="Insert into ctactecomprobante values('$this->cCtaCteRecibo','$this->nCtaCteComCodigo','$this->cCtaCteComNumero','$this->nCtaCteTipoPago','$this->cPerCodigo')";
			$rpta=$con->MetodoRegistrar($consulta);

		}catch(exception $e){
			$rpta=$e->getMessage();}
			return $rpta;
		}
//Método Listar
		public function Listar_ctactecomprobante(){
			$rpta=array();
			try{
				include_once 'conexion.php';
				$con=new Conexion();
				$consulta="Select ctactecomprobante.cCtaCteRecibo As 'cCtaCteRecibo',ctactecomprobante.nCtaCteComCodigo As 'nCtaCteComCodigo',ctactecomprobante.cCtaCteComNumero As 'cCtaCteComNumero',ctactecomprobante.nCtaCteTipoPago As 'nCtaCteTipoPago',ctactecomprobante.cPerCodigo As 'cPerCodigo' from ctactecomprobante";
				$rpta=$con->Listar($consulta);
			}catch(exception $e){
				$rpta=$e->getMessage();}
				return $rpta;
			}
//Método Buscar por ID
			public function Buscar_ctactecomprobante(){
				$rpta=array();
				try{
					include_once 'conexion.php';
					$con=new Conexion();
					$consulta= "SELECT * FROM ctactecomprobante WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
					$rpta=$con->Listar($consulta);
				}catch(exception $e){
					$rpta=$e->getMessage();}
					return $rpta;
				}
//Método Listar
				public function ListadoSimple_ctactecomprobante(){
					$rpta=array();
					try{
						include_once 'conexion.php';
						$con=new Conexion();
						$consulta= "SELECT * FROM ctactecomprobante";
						$rpta=$con->Listar($consulta);
					}catch(exception $e){
						$rpta=$e->getMessage();}
						return $rpta;
					}
//Método Eliminar(Actualizar Estado)
					public function Eliminar_ctactecomprobante(){
						$rpta;
						try{
							include_once 'conexion.php';
							$con=new Conexion();
							$consulta="UPDATE ctactecomprobante SET ctactecomprobanteEstado='E' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
							$rpta=$con->MetodoRegistrar($consulta);
						}catch(exception $e){
							$rpta=$e->getMessage();}
							return $rpta;
						}
//Método Recuperar
						public function Recuperar_ctactecomprobante(){
							$rpta;
							try{
								include_once 'conexion.php';
								$con=new Conexion();
								$consulta="UPDATE ctactecomprobante SET ctactecomprobanteEstado='A' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
								$rpta=$con->MetodoRegistrar($consulta);
							}catch(exception $e){
								$rpta=$e->getMessage();}
								return $rpta;
							}
//Método Actualizar
							public function Actualizar_ctactecomprobante(){
								$rpta;
								try{
									include_once 'conexion.php';
									$con=new Conexion();
									$consulta="UPDATE ctactecomprobante SET nCtaCteComCodigo='$this->nCtaCteComCodigo',cCtaCteComNumero='$this->cCtaCteComNumero',nCtaCteTipoPago='$this->nCtaCteTipoPago',cPerCodigo='$this->cPerCodigo' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
									$rpta=$con->MetodoRegistrar($consulta);

								}catch(exception $e){
									$rpta=$e->getMessage();}
									return $rpta;
								}
							}
							?>