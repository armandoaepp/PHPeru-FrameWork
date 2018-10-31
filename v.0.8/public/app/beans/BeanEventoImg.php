<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanEventoImg{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $imagen;
    private $id_padre;
    private $orden;
    private $estado;
    private $fecha;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setIdPadre($id_padre_)
    {
        $this->id_padre = Validation::validate( $id_padre_ );
    }

    public function getIdPadre()
    {
        return $this->id_padre;
    }

    public function setOrden($orden_)
    {
        $this->orden = Validation::validate( $orden_ );
    }

    public function getOrden()
    {
        return $this->orden;
    }

    public function setEstado($estado_)
    {
        $this->estado = Validation::validate( $estado_ );
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setFecha($fecha_)
    {
        $this->fecha = Validation::validate( $fecha_ );
    }

    public function getFecha()
    {
        return $this->fecha;
    }

}
?>