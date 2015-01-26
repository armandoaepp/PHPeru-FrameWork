<?php 
# Clase Bean Generada  - Creado por @armandoaepp 
class BeanControl{
# Constructor
     public function __construct(){}
# Atributos
    private $idcontrol;
    private $idcontrolpadre;
    private $idtipocontrol;
    private $jerarquia;
    private $nombre;
    private $valor;
    private $descripcion;
    private $estado;
# METODOS
    public function setIdControl($idcontrol_){ $this->idcontrol=$idcontrol_;}
    public function getIdControl(){ return $this->idcontrol;}
    public function setIdControlPadre($idcontrolpadre_){ $this->idcontrolpadre=$idcontrolpadre_;}
    public function getIdControlPadre(){ return $this->idcontrolpadre;}
    public function setIdIipoControl($idtipocontrol_){ $this->idtipocontrol=$idtipocontrol_;}
    public function getIdIipoControl(){ return $this->idtipocontrol;}
    public function setJerarquia($jerarquia_){ $this->jerarquia=$jerarquia_;}
    public function getJerarquia(){ return $this->jerarquia;}
    public function setNombre($nombre_){ $this->nombre=$nombre_;}
    public function getNombre(){ return $this->nombre;}
    public function setValor($valor_){ $this->valor=$valor_;}
    public function getValor(){ return $this->valor;}
    public function setDescripcion($descripcion_){ $this->descripcion=$descripcion_;}
    public function getDescripcion(){ return $this->descripcion;}
    public function setEstado($estado_){ $this->estado=$estado_;}
    public function getEstado(){ return $this->estado;}
}
?>