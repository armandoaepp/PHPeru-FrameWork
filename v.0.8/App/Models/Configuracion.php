<?php 
# Class Model Generada - ByPower @armandaepp 
class Configuracion extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM configuracion";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_configuracion)
    {
        try{
            $id = $bean_configuracion->getId();
            $titulo = $bean_configuracion->getTitulo();
            $horario = $bean_configuracion->getHorario();
            $direccion = $bean_configuracion->getDireccion();
            $email = $bean_configuracion->getEmail();
            $telefono = $bean_configuracion->getTelefono();
            $facebook = $bean_configuracion->getFacebook();
            $youtube = $bean_configuracion->getYoutube();
            $instagram = $bean_configuracion->getInstagram();
            $mapa = $bean_configuracion->getMapa();
            $popup = $bean_configuracion->getPopup();
            $show_popup = $bean_configuracion->getShow_popup();

            $this->query = "INSERT INTO configuracion
                            (
                                titulo,
                                horario,
                                direccion,
                                email,
                                telefono,
                                facebook,
                                youtube,
                                instagram,
                                mapa,
                                popup,
                                show_popup
                            )
                            VALUES(
                                '$titulo',
                                '$horario',
                                '$direccion',
                                '$email',
                                '$telefono',
                                '$facebook',
                                '$youtube',
                                '$instagram',
                                '$mapa',
                                '$popup',
                                '$show_popup'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_configuracion)
    {
        try{
            $id = $bean_configuracion->getId();
            $titulo = $bean_configuracion->getTitulo();
            $horario = $bean_configuracion->getHorario();
            $direccion = $bean_configuracion->getDireccion();
            $email = $bean_configuracion->getEmail();
            $telefono = $bean_configuracion->getTelefono();
            $facebook = $bean_configuracion->getFacebook();
            $youtube = $bean_configuracion->getYoutube();
            $instagram = $bean_configuracion->getInstagram();
            $mapa = $bean_configuracion->getMapa();
            $popup = $bean_configuracion->getPopup();
            $show_popup = $bean_configuracion->getShow_popup();

            $this->query = "UPDATE configuracion SET 
                                titulo = '$titulo,
                                horario = '$horario,
                                direccion = '$direccion,
                                email = '$email,
                                telefono = '$telefono,
                                facebook = '$facebook,
                                youtube = '$youtube,
                                instagram = '$instagram,
                                mapa = '$mapa,
                                popup = '$popup,
                                show_popup = '$show_popup
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
    public function updateEstado($bean_configuracion)
    {
        try{
            $id = $bean_configuracion->getId();
            $estado = $bean_configuracion->getEstado();

            $this->query = "UPDATE configuracion SET 
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
    public function getById($bean_configuracion)
    {
        try{
            $id = $bean_configuracion->getId();

            $this->query = "SELECT * FROM configuracion WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_configuracion)
    {
        try{
            $id = $bean_configuracion->getId();

            $this->query = "DELETE FROM configuracion WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>