<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class ClsAdmin extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_admin($bean_admin)
{
$idadmin = $bean_admin->getIdadmin();
$usertrans = $bean_admin->getUsertrans();
$clavetrans = $bean_admin->getClavetrans();

$this->query = "CALL usp_set_admin('$idadmin','$usertrans','$clavetrans')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_admin($bean_admin)
{
$idadmin = $bean_admin->getIdadmin();
$usertrans = $bean_admin->getUsertrans();
$clavetrans = $bean_admin->getClavetrans();

$this->query = "CALL usp_upd_admin('$idadmin','$usertrans','$clavetrans')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_admin_estado($bean_admin)
{
$idadmin = $bean_admin->getIdadmin();
$clavetrans = $bean_admin->getClavetrans();

$this->query = "CALL usp_upd_admin_Estado('$idadmin','$clavetrans')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_admin_by_idadmin($bean_admin)
{
$idadmin = $bean_admin->getIdadmin();

$this->query = "CALL usp_get_admin_by_idadmin('$idadmin')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_admin()
{

$this->query = "CALL usp_get_admin();$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>