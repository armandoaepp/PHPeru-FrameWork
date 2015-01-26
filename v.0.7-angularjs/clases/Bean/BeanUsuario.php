<?php 
# Clase Bean Generada  - Creado por @armandoaepp 
class BeanUsuario{
# Constructor
     public function __construct(){}
# Atributos
    private $idusuario;
    private $idpersona;
    private $idrol;
    private $idtiporelacion;
    private $usuario;
    private $clave;
    private $fecha;
    private $estado;
# METODOS
    public function setIdUsuario($idusuario_){ $this->idusuario=$idusuario_;}
    public function getIdUsuario(){ return $this->idusuario;}
    public function setIdPersona($idpersona_){ $this->idpersona=$idpersona_;}
    public function getIdPersona(){ return $this->idpersona;}
    public function setIdRol($idrol_){ $this->idrol=$idrol_;}
    public function getIdRol(){ return $this->idrol;}
    public function setIdTipoRelacion($idtiporelacion_){ $this->idtiporelacion=$idtiporelacion_;}
    public function getIdTipoRelacion(){ return $this->idtiporelacion;}
    public function setUsuario($usuario_){ $this->usuario=$usuario_;}
    public function getUsuario(){ return $this->usuario;}
    public function setClave($clave_){ $this->clave=$clave_;}
    public function getClave(){ return $this->clave;}
    public function setFecha($fecha_){ $this->fecha=$fecha_;}
    public function getFecha(){ return $this->fecha;}
    public function setEstado($estado_){ $this->estado=$estado_;}
    public function getEstado(){ return $this->estado;}
}
?>