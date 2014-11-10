<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsInvitacion extends ClsConexion {
# CONSTRUCT
	public function __construct($cnx  = null)
	{
		$this->conn = $cnx;
	}
# Método Insertar
	public function set_invitacion($bean_invitacion)
	{
		$idinvitacion = $bean_invitacion->getIdinvitacion();
		$idcliente = $bean_invitacion->getIdcliente();
		$tipocliente = $bean_invitacion->getTipocliente();
		$glosa = $bean_invitacion->getGlosa();
		$estado = $bean_invitacion->getEstado();

		$this->query = "CALL usp_set_invitacion('$idinvitacion','$idcliente','$tipocliente','$glosa','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Actualizar
	public function upd_invitacion($bean_invitacion)
	{
		$idinvitacion = $bean_invitacion->getIdinvitacion();
		$idcliente = $bean_invitacion->getIdcliente();
		$tipocliente = $bean_invitacion->getTipocliente();
		$glosa = $bean_invitacion->getGlosa();
		$estado = $bean_invitacion->getEstado();

		$this->query = "CALL usp_upd_invitacion('$idinvitacion','$idcliente','$tipocliente','$glosa','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;

	}
# Método Eliminar(Actualizar Estado)
	public function upd_invitacion_estado($bean_invitacion)
	{
		$idinvitacion = $bean_invitacion->getIdinvitacion();
		$estado = $bean_invitacion->getEstado();

		$this->query = "CALL usp_upd_invitacion_Estado('$idinvitacion','$estado')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método Buscar por ID
	public function get_invitacion_by_idinvitacion($bean_invitacion)
	{
		$idinvitacion = $bean_invitacion->getIdinvitacion();

		$this->query = "CALL usp_get_invitacion_by_idinvitacion('$idinvitacion')";
		$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
# Método get Seleccionar todos
	public function get_invitacion()
	{
		$this->query = "CALL usp_get_invitacion();"$this->execute_query();
		$data = $this->rows ;
		return $data;
	}
}
