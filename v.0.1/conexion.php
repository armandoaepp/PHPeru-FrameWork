<?php
require_once 'config.php';
class Conexion{
	
    private $BaseDatos;
    private $Servidor;
    private $Usuario;
    private $Clave;
    private $Conexion_ID;
    private $Error = "";
    //Constructor de la clase Conexion
    function  Conexion() {
		$config= new config();
        $this->BaseDatos =$config->basededatos_;
        $this->Servidor = $config->servidor_;
        $this->Usuario = $config->usuario_;
        $this->Clave =$config->pass_;
    }
    //Metodo para conectarnos a la base de datos
    private function conectar() {
 $this->Conexion_ID = @mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexion.";
            return 0;
        }

        if (!@mysqli_select_db( $this->Conexion_ID,$this->BaseDatos)) {
            $this->Error = "Imposible abrir " . $this->BaseDatos;
            return 0;
        }
        return $this->Conexion_ID;
    }
	
public  function MetodoReg_Output($metodo) {
     $rpta;
	 try{
	 $this->conectar();
	 $res=mysqli_query($this->Conexion_ID,$metodo);
	 if(!$res){
	 $rpta="No Se Pudo Ejecutar la Consulta";
	 }else{
	 $msj=mysqli_fetch_array($res);
	 $rpta=$msj[0];
	 }
	 mysqli_close($this->Conexion_ID);
	 }catch(exception $e){
	 	try{mysqli_close($this->Conexion_ID);}
		catch(exception $e1){
		$rpta="Error";
		}
	 }
	 return $rpta;
    }
	//metodo registrar mediante query
	public  function MetodoRegistrar($metodo) {
     $rpta;
	 try{
	 $this->conectar();
	 $res=mysqli_query($this->Conexion_ID,$metodo);
	 if(!$res){
	 $rpta="No Se Pudo Ejecutar la Consulta";
	 }else{
	 $rpta="Consulta Ejecutada Correctamente";
	 }
	 mysqli_close($this->Conexion_ID);
	 }catch(exception $e){
	 	try{mysqli_close($this->Conexion_ID);}
		catch(exception $e1){
		$rpta="Error";
		}
	 }
	 return $rpta;
    }
	//metodo Listar
	public function Listar($consulta) {
        //Le decimos que la locacion es lenguaje español
        setlocale(LC_CTYPE, 'es');
        //La sentencia a ejecutar
        try {
            //Obtenemos la conexion
            $this->conectar();
            //Eecutamos la sentencia
 $rs = @mysqli_query($this->Conexion_ID,$consulta);
    //Creamos un array que almacenara los datos de la sentencia
        if(@mysqli_num_rows($rs)>0){
        	//columnas
        	$col=array();
        	$regi = @mysqli_fetch_fields($rs);
            foreach($regi as $k=>$dato){
            	$col[]=$dato->name;
        	}
           //fin columnas
			$registros = array();
            //Recorremos el resultado de la consulta y lo almacenamos en el array
            while ($reg = @mysqli_fetch_array($rs)) {
              array_push($registros, $reg);
            }
            //Liberamos recursos
            mysqli_free_result($rs);
            mysqli_close($this->Conexion_ID);
			}
			$data=array("columnas"=>$col,"cuerpo"=>$registros);
        } catch (exception $e) {
            try {
                mysqli_free_result($rs);
            } catch (exception $e) {

            }
            try {
                mysqli_close($this->Conexion_ID);
            } catch (exception $e) {
            }
        }
        return $data;
    }
	//fin del metodo Listar
	
}
?>
