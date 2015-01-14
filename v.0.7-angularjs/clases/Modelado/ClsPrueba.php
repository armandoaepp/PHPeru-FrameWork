<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsPrueba extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_prueba($bean_prueba)
{
$id = $bean_prueba->getId();
$Nombres = $bean_prueba->getNombres();
$Apellidos = $bean_prueba->getApellidos();

$this->query = "CALL usp_set_prueba('$id','$Nombres','$Apellidos')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_prueba($bean_prueba)
{
$id = $bean_prueba->getId();
$Nombres = $bean_prueba->getNombres();
$Apellidos = $bean_prueba->getApellidos();

$this->query = "CALL usp_upd_prueba('$id','$Nombres','$Apellidos')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_prueba_estado($bean_prueba)
{
$id = $bean_prueba->getId();
$Apellidos = $bean_prueba->getApellidos();

$this->query = "CALL usp_upd_prueba_estado('$id','$Apellidos')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_prueba_by_id($bean_prueba)
{
$id = $bean_prueba->getId();

$this->query = "CALL usp_get_prueba_by_id('$id')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_prueba()
{
$this->query = "CALL usp_get_prueba()";
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>