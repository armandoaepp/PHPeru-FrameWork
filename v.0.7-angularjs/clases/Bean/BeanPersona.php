<?php 
# Clase Bean Generada  - Creado por @armandoaepp 
  class BeanPersona{
# Constructor
     public function __construct(){}
# Atributos
    private $idpersona;
    private $nombre;
    private $nacimiento;
    private $tipo;
    private $estado;
# METODOS
    public function setIdPersona($idpersona_){ $this->idpersona=$idpersona_;}
    public function getIdPersona(){ return $this->idpersona;}
    public function setNombre($nombre_){ $this->nombre=$nombre_;}
    public function getNombre(){ return $this->nombre;}
    public function setNacimiento($nacimiento_){ $this->nacimiento=$nacimiento_;}
    public function getNacimiento(){ return $this->nacimiento;}
    public function setTipo($tipo_){ $this->tipo=$tipo_;}
    public function getTipo(){ return $this->tipo;}
    public function setEstado($estado_){ $this->estado=$estado_;}
    public function getEstado(){ return $this->estado;}
}
?>