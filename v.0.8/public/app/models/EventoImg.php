<?php 
# Class Model Generada - ByPower @armandaepp 
class EventoImg extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM evento_img";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_evento_img)
    {
        try{
            $id = $bean_evento_img->getId();
            $imagen = $bean_evento_img->getImagen();
            $id_padre = $bean_evento_img->getIdPadre();
            $orden = $bean_evento_img->getOrden();
            $estado = $bean_evento_img->getEstado();
            $fecha = $bean_evento_img->getFecha();

            $this->query = "INSERT INTO evento_img
                            (
                                imagen,
                                id_padre,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$imagen',
                                '$id_padre',
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
    public function update($bean_evento_img)
    {
        try{
            $id = $bean_evento_img->getId();
            $imagen = $bean_evento_img->getImagen();
            $id_padre = $bean_evento_img->getIdPadre();
            $orden = $bean_evento_img->getOrden();
            $estado = $bean_evento_img->getEstado();
            $fecha = $bean_evento_img->getFecha();

            $this->query = "UPDATE evento_img SET 
                                imagen = '$imagen,
                                id_padre = '$id_padre,
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
    public function updateEstado($bean_evento_img)
    {
        try{
            $id = $bean_evento_img->getId();
            $estado = $bean_evento_img->getEstado();

            $this->query = "UPDATE evento_img SET 
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
    public function getById($bean_evento_img)
    {
        try{
            $id = $bean_evento_img->getId();

            $this->query = "SELECT * FROM evento_img WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_evento_img)
    {
        try{
            $id = $bean_evento_img->getId();

            $this->query = "DELETE FROM evento_img WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>