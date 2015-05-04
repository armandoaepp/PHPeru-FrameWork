<?php 
# Clase Bean Generada  - Creado por @armandoaepp 
class BeanTransmision{
# Constructor
    public function __construct(){}
# Atributos
    private $idtransmision;
    private $idpersonajuridica;
    private $placa;
    private $longitud;
    private $latitud;
    private $direccion;
    private $velocidad;
    private $gpstime;
    private $panico;
    private $estado;
# METODOS
    public function setIdTransmision($idtransmision_){ $this->idtransmision=$idtransmision_;}
    public function getIdTransmision(){ return $this->idtransmision;}
    public function setIdPersonaJuridica($idpersonajuridica_){ $this->idpersonajuridica=$idpersonajuridica_;}
    public function getIdPersonaJuridica(){ return $this->idpersonajuridica;}
    public function setPlaca($placa_){ $this->placa=$placa_;}
    public function getPlaca(){ return $this->placa;}
    public function setLongitud($longitud_){ $this->longitud=$longitud_;}
    public function getLongitud(){ return $this->longitud;}
    public function setLatitud($latitud_){ $this->latitud=$latitud_;}
    public function getLatitud(){ return $this->latitud;}
    public function setDireccion($direccion_){ $this->direccion=$direccion_;}
    public function getDireccion(){ return $this->direccion;}
    public function setVelocidad($velocidad_){ $this->velocidad=$velocidad_;}
    public function getVelocidad(){ return $this->velocidad;}
    public function setGpsTime($gpstime_){ $this->gpstime=$gpstime_;}
    public function getGpsTime(){ return $this->gpstime;}
    public function setPanico($panico_){ $this->panico=$panico_;}
    public function getPanico(){ return $this->panico;}
    public function setEstado($estado_){ $this->estado=$estado_;}
    public function getEstado(){ return $this->estado;}
}
?>