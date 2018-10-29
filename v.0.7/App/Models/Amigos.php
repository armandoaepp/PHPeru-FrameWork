<?php 
# Clase Generada - Creado por @armandaepp 
class Amigos extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}


# Método getALl
public function getAll($bean_amigos)
{
try{

$this->query = "SELECT * FROM amigos";

$this->execute_query();

$data = $this->rows ;

return $data;

}catch(exception $e){

 throw new Exception($e->getMessage());

}
}
# Método SAVE
public function save($bean_amigos)
{
try{

$titulo = $bean_amigos->getTitulo();
$imagen = $bean_amigos->getImagen();
$imagen_2 = $bean_amigos->getImagen_2();
$email = $bean_amigos->getEmail();
$orden = $bean_amigos->getOrden();
$estado = $bean_amigos->getEstado();
$fecha = $bean_amigos->getFecha();

$consulta="INSERT INTO amigos
VALUES(
'$titulo',
'$imagen',
'$imagen_2',
'$email',
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
public function update($bean_amigos)
{
try{

$id = $bean_amigos->getId();
$titulo = $bean_amigos->getTitulo();
$imagen = $bean_amigos->getImagen();
$imagen_2 = $bean_amigos->getImagen_2();
$email = $bean_amigos->getEmail();
$orden = $bean_amigos->getOrden();
$estado = $bean_amigos->getEstado();
$fecha = $bean_amigos->getFecha();

$consulta="UPDATE amigos SET titulo = '$titulo,
imagen = '$imagen,
imagen_2 = '$imagen_2,
email = '$email,
orden = '$orden,
estado = '$estado,
fecha = '$fecha
 WHERE id='$id'";
$this->execute_query();

$data = $this->status_exe  ;

return $data;

}catch(exception $e){

 throw new Exception($e->getMessage());

 }

}

# Método updateEstado(Actualizar Estado)
public function updateEstado($bean_amigos)
{
try{
$id = $bean_amigos->getId();
$fecha = $bean_amigos->getFecha();

$this->query = "UPDATE amigos SET fecha = 'fecha WHERE id='$id'";
$this->execute_query();
$data = $this->rows ;
return $data;
$this->execute_query();

$data = $this->status_exe  ;

return $data;

}catch(exception $e){

 throw new Exception($e->getMessage());

 }
}

# Método Buscar por ID
public function getById($bean_amigos)
{
try{
$id = $bean_amigos->getId();

$this->query = "SELECT * FROM amigos WHERE id='id'";

$this->execute_find();

$data = $this->rows ;

return $data;

}catch(exception $e){

 throw new Exception($e->getMessage());

 }
}
# Método deleteById
public function deleteById($bean_amigos)
{
try{
$id = $bean_amigos->getId();

$this->query = "DELETE FROM amigos WHERE id='$id'";
$this->execute_query();
$data = $this->rows ;
return $data;
$this->execute_query();

$data = $this->status_exe  ;

return $data;

}catch(exception $e){

 throw new Exception($e->getMessage());

 }
}


}
?>