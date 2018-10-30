<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanCategoria{
    # Constructor
    public function __construct(){}

    # Atributos
    private $idcategoria;
    private $nombre;
    private $descripcion;
    private $visible;
    private $fechareg;
    private $url;
    private $imagen;
    private $publicar;
    private $estado;
    private $created_up;

    # METODOS
    public function setIdcategoria($idcategoria_)
    {
        $this->idcategoria = Validation::validate( $idcategoria_ );
    }

    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function setNombre($nombre_)
    {
        $this->nombre = Validation::validate( $nombre_ );
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setVisible($visible_)
    {
        $this->visible = Validation::validate( $visible_ );
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setFechareg($fechareg_)
    {
        $this->fechareg = Validation::validate( $fechareg_ );
    }

    public function getFechareg()
    {
        return $this->fechareg;
    }

    public function setUrl($url_)
    {
        $this->url = Validation::validate( $url_ );
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setPublicar($publicar_)
    {
        $this->publicar = Validation::validate( $publicar_ );
    }

    public function getPublicar()
    {
        return $this->publicar;
    }

    public function setEstado($estado_)
    {
        $this->estado = Validation::validate( $estado_ );
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setCreated_up($created_up_)
    {
        $this->created_up = Validation::validate( $created_up_ );
    }

    public function getCreated_up()
    {
        return $this->created_up;
    }

}
?>