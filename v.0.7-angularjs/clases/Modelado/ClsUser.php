<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsUser extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_user($bean_user)
    {
        $user_id = $bean_user->getUser_id();
        $nombre = $bean_user->getNombre();
        $apellidos = $bean_user->getApellidos();
        $email = $bean_user->getEmail();
        $password = $bean_user->getPassword();
        $estado = $bean_user->getEstado();
        $created_up = $bean_user->getCreated_up();

        $this->query = "CALL usp_set_user('$user_id','$nombre','$apellidos','$email','$password','$estado','$created_up')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_user($bean_user)
    {
        $user_id = $bean_user->getUser_id();
        $nombre = $bean_user->getNombre();
        $apellidos = $bean_user->getApellidos();
        $email = $bean_user->getEmail();
        $password = $bean_user->getPassword();
        $estado = $bean_user->getEstado();
        $created_up = $bean_user->getCreated_up();

        $this->query = "CALL usp_upd_user('$user_id','$nombre','$apellidos','$email','$password','$estado','$created_up')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_user_estado($bean_user)
    {
        $user_id = $bean_user->getUser_id();
        $created_up = $bean_user->getCreated_up();

        $this->query = "CALL usp_upd_user_estado('$user_id','$created_up')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_user_by_user_id($bean_user)
    {
        $user_id = $bean_user->getUser_id();

        $this->query = "CALL usp_get_user_by_user_id('$user_id')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_user()
    {
        $this->query = "CALL usp_get_user()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>