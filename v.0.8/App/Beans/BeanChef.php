<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanChef{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $subtitulo;
    private $resumen;
    private $descripcion;
    private $imagen;
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

    public function setTitulo($titulo_)
    {
        $this->titulo = Validation::validate( $titulo_ );
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setSubtitulo($subtitulo_)
    {
        $this->subtitulo = Validation::validate( $subtitulo_ );
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function setResumen($resumen_)
    {
        $this->resumen = Validation::validate( $resumen_ );
    }

    public function getResumen()
    {
        return $this->resumen;
    }

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
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