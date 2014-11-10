<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsMsjEmail extends ClsConexion {
# CONSTRUCT
	public function __construct($cnx  = null)
	{
		$this->conn = $cnx;
	}
# Método Insertar
	public function set_msjemail($bean_msjemail)
	{
		$idmsjemail = $bean_msjemail->getIdmsjemail();
		$idproceso = $bean_msjemail->getIdproceso();
		$idtipomensaje = $bean_msjemail->getIdtipomensaje();
		$item = $bean_msjemail->getItem();
		$email = $bean_msjemail->getEmail();
		$asunto = $bean_msjemail->getAsunto();
		$mensaje = $bean_msjemail->getMensaje();
		$cabecera = $bean_msjemail->getCabecera();
		$fechareg = $bean_msjemail->getFechareg();
		$estado = $bean_msjemail->getEstado();

		$this->query = "CALL usp_set_msjemail('$idmsjemail','$idproceso','$idtipomensaje','$item','$email','$asunto','$mensaje','$cabecera','$fechareg','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Actualizar
	public function upd_msjemail($bean_msjemail)
	{
		$idmsjemail = $bean_msjemail->getIdmsjemail();
		$idproceso = $bean_msjemail->getIdproceso();
		$idtipomensaje = $bean_msjemail->getIdtipomensaje();
		$item = $bean_msjemail->getItem();
		$email = $bean_msjemail->getEmail();
		$asunto = $bean_msjemail->getAsunto();
		$mensaje = $bean_msjemail->getMensaje();
		$cabecera = $bean_msjemail->getCabecera();
		$fechareg = $bean_msjemail->getFechareg();
		$estado = $bean_msjemail->getEstado();

		$this->query = "CALL usp_upd_msjemail('$idmsjemail','$idproceso','$idtipomensaje','$item','$email','$asunto','$mensaje','$cabecera','$fechareg','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Eliminar(Actualizar Estado)
	public function upd_msjemail_estado($bean_msjemail)
	{
		$idmsjemail = $bean_msjemail->getIdmsjemail();
		$estado = $bean_msjemail->getEstado();

		$this->query = "CALL usp_upd_msjemail_Estado('$idmsjemail','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método Buscar por ID
	public function get_msjemail_by_idmsjemail($bean_msjemail)
	{
		$idmsjemail = $bean_msjemail->getIdmsjemail();

		$this->query = "CALL usp_get_msjemail_by_idmsjemail('$idmsjemail')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método get Seleccionar todos
	public function get_msjemail()
	{
		$this->query = "CALL usp_get_msjemail();"$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
}
?>