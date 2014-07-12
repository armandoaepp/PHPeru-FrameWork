<?php
require_once 'config.php';
class Conexion
{ 
    private $Servidor;
    private $Usuario;
    private $Clave;
    private $BaseDatos;
    private $Conexion_ID;
    private $Error = "";
    
    //Constructor de la clase Conexion
    function Conexion()
    {
        $config          = new config();
        $this->Servidor  = $config->servidor_;
        $this->Usuario   = $config->usuario_;
        $this->Clave     = $config->pass_;
        $this->BaseDatos = $config->basededatos_;
    }
    //Metodo para conectarnos a la base de datos
    public function conectar()
    {
        $this->Conexion_ID = @new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
        $this->Conexion_ID->set_charset("utf8"); // para resolver los problemas de las tildes y ñ
        //Si sucede algún error la función muere e imprimir el error
        if ($this->Conexion_ID->connect_error) {
            $this->Error = "Error en la conexion : " . $this->Conexion_ID->connect_errno . "-" . $this->Conexion_ID->connect_error;
            echo $this->Error;
            return 0;
        }
        //Si nada sucede retornamos la conexión
        return $this->Conexion_ID;
    }
    //metodo Listar
    public function Listar($consulta)
    {
        //Le decimos que la locacion es lenguaje español
        setlocale(LC_CTYPE, 'es');
        //La sentencia a ejecutar
        try {
            //Obtenemos la conexion
            $this->conectar();
            //Eecutamos la sentencia
            $rs = $this->Conexion_ID->query($consulta);
            //Creamos un array que almacenara los datos de la sentencia
            $col  = array();
            $registros = array();
            if (($rs->num_rows) > 0) {
                //columnas                
                $regi = @$rs->fetch_fields();
                foreach ($regi as $k => $dato) {
                    $col[] = $dato->name;
                }
                //fin columnas               
                //Recorremos el resultado de la consulta y lo almacenamos en el array
                while ($reg = $rs->fetch_array()) {
                    array_push($registros, $reg);
                }
                //Liberamos recursos
                mysqli_free_result($rs);
                $this->Conexion_ID->close();
            }
            $data = array( "columnas" => $col,"cuerpo" => $registros);
        }
        catch (exception $e) {
            try {
                mysqli_free_result($rs);
            }
            catch (exception $e) {
            }
            try {
                $this->Conexion_ID->close();
            }
            catch (exception $e) {
            }
        }
        return $data;
    }
    //@EPP->metodo Listar :: //devuelve un conjunto de datos(solo registros)
    public function ListarFilas($consulta)
    {
        //Le decimos que la locacion es lenguaje espaÃ±ol
        setlocale(LC_CTYPE, 'es');
        //La sentencia a ejecutar
        try {
            //Obtenemos la conexion
            $this->conectar();
            //Ejecutamos la sentencia
            $rs = $this->Conexion_ID->query($consulta);
            //Creamos un array que almacenara los datos de la sentencia
            if (($rs->num_rows) > 0) {
                // echo "Numero de FILASS :  " . mysqli_num_rows($rs);
                $registros = array();
                //Recorremos el resultado de la consulta y lo almacenamos en el array
                while ($reg = $rs->fetch_array()) { //por cada fila que recorra me almacena en un array
                    array_push($registros, $reg); //pasar elementos de un arreglo a otro:: Matrix                    
                }
                //Liberamos recursos
                mysqli_free_result($rs); //liberara los recursos de mysql
                $this->Conexion_ID->close();
            }
        }
        catch (exception $e) {
            try { mysqli_free_result($rs); }//para no tener que sobrecargar
            catch (exception $e) {}
            try { $this->Conexion_ID->close();}
            catch (exception $e) {}
        }
        return $registros;
    }
    
    //metodo registrar mediante query
    public function MetodoRegistrar($consulta)
    {
        $rpta;
        try {
            $this->conectar();
            $sqlprepare = $this->Conexion_ID->prepare($consulta);
            $res        = $sqlprepare->execute();
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $rpta = "Consulta Ejecutada Correctamente";
            }
            $this->Conexion_ID->close();
        }
        catch (exception $e) {
            try {$this->Conexion_ID->close();}
            catch (exception $e1) { $rpta = "Error";}
        }
        return $rpta;
    }
    //insertar,actualizar,eliminar--si retornan un mensaje;
    public function MetodoReg_Output($consulta) 
    {
        // procedimientos almacenados que devuelven un valor,::$consulta::parametro procedimiento a ejecutar
        $rpta;
        try {
            $this->conectar();
            $res = $this->Conexion_ID->query($consulta);
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $msj  = $rs->fetch_array();
                $rpta = $msj[0]; //es una sola fila, y una sola columna valor de retorno del procedimiento                
            }
            $this->Conexion_ID->close();
        }
        catch (exception $e) {
            try {$this->Conexion_ID->close();}
            catch (exception $e1) { $rpta = "Error";}
        }
        return $rpta;
    }
    
    //insertar un Registro y Devolver el ID autoincremen 
    public function MetodoReg_Output_ID($consulta)
    {
        $rpta = "";
        try {
            $this->conectar();
            $sqlprepare = $this->Conexion_ID->prepare($consulta);
            $res        = $sqlprepare->execute();
            if (!$res) {
                $rpta = "No Se Pudo Ejecutar la Consulta";
            } else {
                $ID   = $this->Conexion_ID->insert_id; // mysqli_fetch_array($res);
                $rpta = $ID; //es una sola fila, y una sola columna valor de retorno del procedimiento
                //echo " rpta = $ID";
            }
            $this->Conexion_ID->close();
        }
        catch (exception $e) {
            try { $this->Conexion_ID->close();}
            catch (exception $e1) { $rpta = "Error";}
        }
        return $rpta;
    }
} // end class
?>
