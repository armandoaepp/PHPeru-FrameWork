<?php 
# Class Model Generada - ByPower @armandaepp 
class Chef extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM chef";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_chef)
    {
        try{
            $id = $bean_chef->getId();
            $titulo = $bean_chef->getTitulo();
            $subtitulo = $bean_chef->getSubtitulo();
            $resumen = $bean_chef->getResumen();
            $descripcion = $bean_chef->getDescripcion();
            $imagen = $bean_chef->getImagen();
            $orden = $bean_chef->getOrden();
            $estado = $bean_chef->getEstado();
            $fecha = $bean_chef->getFecha();

            $this->query = "INSERT INTO chef
                            (
                                titulo,
                                subtitulo,
                                resumen,
                                descripcion,
                                imagen,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$titulo',
                                '$subtitulo',
                                '$resumen',
                                '$descripcion',
                                '$imagen',
                                '$orden',
                                '$estado',
                                '$fecha'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_chef)
    {
        try{
            $id = $bean_chef->getId();
            $titulo = $bean_chef->getTitulo();
            $subtitulo = $bean_chef->getSubtitulo();
            $resumen = $bean_chef->getResumen();
            $descripcion = $bean_chef->getDescripcion();
            $imagen = $bean_chef->getImagen();
            $orden = $bean_chef->getOrden();
            $estado = $bean_chef->getEstado();
            $fecha = $bean_chef->getFecha();

            $this->query = "UPDATE chef SET 
                                titulo = '$titulo,
                                subtitulo = '$subtitulo,
                                resumen = '$resumen,
                                descripcion = '$descripcion,
                                imagen = '$imagen,
                                orden = '$orden,
                                estado = '$estado,
                                fecha = '$fecha
                            WHERE id = '$id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_chef)
    {
        try{
            $id = $bean_chef->getId();
            $estado = $bean_chef->getEstado();

            $this->query = "UPDATE chef SET 
                                estado = '$estado'
                            WHERE id='$id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_chef)
    {
        try{
            $id = $bean_chef->getId();

            $this->query = "SELECT * FROM chef WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_chef)
    {
        try{
            $id = $bean_chef->getId();

            $this->query = "DELETE FROM chef WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>