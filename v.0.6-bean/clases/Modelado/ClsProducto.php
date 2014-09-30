<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clsproducto extends ClsConexion {
# Método Insertar
	public function set_producto($bean_producto)
	{
		$idproducto = $bean_producto->getIdProducto();
		$producto = $bean_producto->getProducto();
		$idcategoria = $bean_producto->getIdCategoria();

		$this->query = "CALL usp_set_producto('$idproducto','$producto','$idcategoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Actualizar
	public function upd_producto($bean_producto)
	{
		$idproducto = $bean_producto->getIdProducto();
		$producto = $bean_producto->getProducto();
		$idcategoria = $bean_producto->getIdCategoria();

		$this->query = "CALL usp_upd_producto('$idproducto','$producto','$idcategoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Eliminar(Actualizar Estado)
	public function upd_producto_Estado($bean_producto)
	{
		$idproducto = $bean_producto->getIdproducto();
		$idcategoria = $bean_producto->getIdcategoria();

		$this->query = "CALL usp_upd_producto_Estado('$idproducto','$idcategoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método Buscar por ID
	public function get_producto_by_idproducto($bean_producto)
	{
		$idproducto = $bean_producto->getIdproducto();

		$this->query = "CALL usp_get_producto_by_idproducto('$idproducto')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
}
?>