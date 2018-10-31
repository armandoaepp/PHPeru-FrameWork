<?php
Class ClsConexion
{
    // private static $db_host = 'localhost';
    // private static $db_user = 'dccorpcop';
    // private static $db_pass = 's!mETV8ABX';
    // protected $db_name      = 'dccorpcop_web';

    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    protected $db_name      = 'escuelac_w_ne16';

    protected $db_driver = 'mysql';

    protected $query     = '';
    protected $rows      = array();
    protected $conn      = null  ;
    protected $status_exe = false ;

    # Conectar a la base de datos utilizamos la libreria pdo
    private function open_connection()
    {
        $cadena=$this->db_driver.":host=".self::$db_host.";dbname=" .$this->db_name;
        $this->conn = new PDO($cadena,self::$db_user,self::$db_pass);
        # para manejar errores y excepcciones especiales para el manejo de transacciones
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # codificacion utf-8
        $this->conn->query("SET NAMES 'utf8'");
    }

    # Desconectar la base de datos
    private function close_connection()
    {
        $this->conn = null;
    }


    /**
     * [execute_query EJECUTAR UN QUERY DEL ITPO INSERT , DELETE , UPDATE , SELECT]
     * @return [type] [SI ES UN SELECT RETORNO UN ARRAY CON DATOS LOS CUALES PUEDEN SER ACCEDIDOS POR LOS NOMBRES DE COLUMNAS]
     */
    protected function execute_query()
    {
        $rows = array();
        $this->status_exe = false ;
        # conn si es nulo inicializamos la conexion
        if( $this->conn == null )
        {
            $this->open_connection();
        }

        $stm = $this->conn->prepare($this->query);

        $this->status_exe = $stm->execute() ;


        if($this->status_exe)
        {
            # Verificacmos si el resultado tiene columnas para no tener problemas con los INSERT, UPDATE o DELETE
            # esto para que el metodo de conexion no duelva error cuando se trabaja con transacciones
            $column_count = $stm->columnCount() ;
            if ($column_count > 0)
            {
                # solo se accede por nombres de columnas y facil convertir en json
                $rows  = $stm->fetchAll(PDO::FETCH_ASSOC) ;
            }

        }
        $this->rows =  $rows ;

    }
    # Iniciar un transaccion
    public function beginTransaction()
    {
        if( $this->conn == null )
        {
            # nos conectamos
                $this->open_connection();
            # iniciamos la transaccion
                $this->conn->beginTransaction();
        }
        elseif( $this->conn != null )
        {
            # iniciamos la transaccion
                $this->conn->beginTransaction();
        }
    }

    # si a tenido existo hacemos un commit para volcar los datos
    public function commit()
    {
        $this->conn->commit();
        $this->close_connection();
    }
    # si hay errores para dehacer el volcado de datos
    public function rollback()
    {
        $this->conn->rollback();
        $this->close_connection();
    }

    # este metoo nos siver para iniciar la conexion desde una capa externa al models
    # trabajar con multiples clases para transacciones
    public function get_connection()
    {
        $this->open_connection() ;
        return $this->conn;
    }
    # retornar el query para log
    public function get_query()
    {
        $sql = $this->query ;
        return $sql ;
    }

    #return only row
    protected function execute_find()
    {
        try{
            $rows = array();

            $this->execute_query();

            if(count($this->rows) > 0 )
            {
                $rows = $this->rows[0] ;
            }

            $this->rows =  $rows ;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }

    }

    // retornar el ID insertador
    protected function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }

}