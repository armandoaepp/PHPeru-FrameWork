<?php
class Conexion {
    private $BaseDatos;
    private $Servidor;
    private $Usuario;
    private $Clave;
    private $Conexion_ID; //conexion encargada de establecer la conexion, guardar
    private $Error = "";
    //Constructor de la clase Conexion
    function Conexion() {
        $this->BaseDatos = "apesi";
        $this->Servidor = "localhost";
        $this->Usuario = "root";
        $this->Clave = "";
    }
   //Metodo para conectarnos a la base de datos
    private function conectar() {
        $this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
        mysqli_set_charset($this->Conexion_ID, "utf8");// para resolver los problemas de las tildes y ñ
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexion.";
            return 0; // salta hasta el final de la funcion conectar            
        }
        if (!@mysqli_select_db($this->Conexion_ID, $this->BaseDatos)) { //@ evitar errores con /
            $this->Error = "Imposible abrir " . $this->BaseDatos;
            return 0;
        }
        return $this->Conexion_ID;
    }
 
    //@EPP->metodo Listar (encapculado los nombres de la tabla de la base de datos mas los  registros  )
    public function Listar($consulta) {
        //Le decimos que la locacion es lenguaje espaÃ±ol
        setlocale(LC_CTYPE, 'es');
        //La sentencia a ejecutar
        try {
            //Obtenemos la conexion     
            $this->conectar();
             $col = array();
             $registros = array();
            //Eecutamos la sentencia
            $rs = @mysqli_query($this->Conexion_ID, $consulta);
            //Creamos un array que almacenara los datos de la sentencia
            if (@mysqli_num_rows($rs) > 0) {
                //columnas
                $col = array();
                // mysqli_fetch_fields permite saber el nombre de cada columna
                $regi = @mysqli_fetch_fields($rs);
                foreach($regi as $k => $dato) {
                    $col[] = $dato->name; /*$col[]: almacena los nombres de cada columna*/
                }
                //fin columnas
                $registros = array(); /*$registros: permite almacenar cada fila*/
                //Recorremos el resultado de la consulta y lo almacenamos en el array
                while ($reg = @mysqli_fetch_array($rs)) {
                    array_push($registros, $reg);               
                }
                //Liberamos recursos
                mysqli_free_result($rs);
                mysqli_close($this->Conexion_ID);
            }
            
            // $data: almacena las columnas y las filas en un array
            $data = array("columnas" => $col, "cuerpo" => $registros);
            
            }
        catch(exception $e) {
            try { mysqli_free_result($rs);}
            catch(exception $e) { }
            try { mysqli_close($this->Conexion_ID); }
            catch(exception $e) {}
        }
        return $data;
    }
    //fin del metodo Listar
    //@EPP->metodo Listar :: //devuelve un conjunto de datos(solo registros)
    public function ListarFilas($consulta) {
        //Le decimos que la locacion es lenguaje espaÃ±ol
        setlocale(LC_CTYPE, 'es');
        //La sentencia a ejecutar
        try {
            //Obtenemos la conexion
            $this->conectar();
            //Ejecutamos la sentencia
            $rs = mysqli_query($this->Conexion_ID, $consulta);
            //Creamos un array que almacenara los datos de la sentencia
            if (mysqli_num_rows($rs) > 0) {
               // echo "Numero de FILASS :  " . mysqli_num_rows($rs);
                $registros = array();
                //Recorremos el resultado de la consulta y lo almacenamos en el array
                while ($reg = mysqli_fetch_array($rs)) { //por cada fila que recorra me almacena en un array
                    array_push($registros, $reg); //pasar elementos de un arreglo a otro:: Matris
                    
                }
                //Liberamos recursos
                mysqli_free_result($rs); //liberara los recursos de mysql
                mysqli_close($this->Conexion_ID);
            }
        }
        catch(exception $e) {
            try { mysqli_free_result($rs); //para no tener que sobrecargar
            }catch(exception $e) {  }
            try { mysqli_close($this->Conexion_ID); }
            catch(exception $e) {}
        }
        return $registros;
    }  //fin del metodo Listar
     
     
    //metodo registrar mediante $metodo=query
    public function MetodoRegistrar($metodo) {
        $rpta;
        try {
            $this->conectar();// llamo a la funcion conectar() 
            $res = mysqli_query($this->Conexion_ID, $metodo);// ejecuta la consulta $metodo contiene el query a ejecurtar en la base de datos
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $rpta =0;// "Consulta Ejecutada Correctamente";
            }
            mysqli_close($this->Conexion_ID);// ciero la conexion 
        }
        catch(exception $e) {
            try { mysqli_close($this->Conexion_ID);
            }catch(exception $e1) {$rpta = "Error";}
        }
        return $rpta;
    }
    
     public function MetodoReg_Output($metodo) { //insertar,actualizar,eliminar--si retornan un mensaje;
        // procedimientos almacenados que devuelven un valor,::$metodo::parametro procedimiento a ejecutar
        $rpta;
        try {
            $this->conectar();
            $res = mysqli_query($this->Conexion_ID, $metodo);
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $msj = mysqli_fetch_array($res);
                $rpta = $msj[0]; //es una sola fila, y una sola columna valor de retorno del procedimiento
                
            }
            mysqli_close($this->Conexion_ID);
        }
        catch(exception $e) {
            try { mysqli_close($this->Conexion_ID);
            } catch(exception $e1) {$rpta = "Error";}
        }
        return $rpta;
    }
    
    //insertar un Registro y Devolver el ID autoincremen 
     public function MetodoReg_Output_ID($sql) { 
        $rpta = "";
        try {
            $this->conectar();
            $res = mysqli_query($this->Conexion_ID, $sql);
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $ID = mysqli_insert_id($this->Conexion_ID);// mysqli_fetch_array($res);
                $rpta = $ID; //es una sola fila, y una sola columna valor de retorno del procedimiento
                //echo " rpta = $ID";
            }
            mysqli_close($this->Conexion_ID);
        }
        catch(exception $e) {
            try { mysqli_close($this->Conexion_ID);
            }catch(exception $e1) { $rpta = "Error";}
        }
        return $rpta;
    }
} // fin de clase

?>
