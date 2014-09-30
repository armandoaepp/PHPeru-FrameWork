<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clscategoria extends ClsConexion {
	# Método Insertar
	public function get_categoria($bean_categoria)
	{		

		$this->query = "CALL usp_get_categoria()";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}

# Método Insertar
	public function set_categoria($bean_categoria)
	{
		$idcategoria = $bean_categoria->getIdCategoria();
		$categoria = $bean_categoria->getCategoria();

		$this->query = "CALL usp_set_categoria('$idcategoria','$categoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}

# Método Actualizar
	public function upd_categoria($bean_categoria)
	{
		$idcategoria = $bean_categoria->getIdcategoria();
		$categoria = $bean_categoria->getCategoria();

		$this->query = "CALL usp_upd_categoria('$idcategoria','$categoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método Buscar por ID
	public function get_categoria_by_idcategoria($bean_categoria)
	{
		$idcategoria = $bean_categoria->getIdcategoria();
		$this->query = "CALL usp_get_categoria_by_idcategoria('$idcategoria')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
}
?>