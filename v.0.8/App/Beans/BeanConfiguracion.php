<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanConfiguracion{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $horario;
    private $direccion;
    private $email;
    private $telefono;
    private $facebook;
    private $youtube;
    private $instagram;
    private $mapa;
    private $popup;
    private $show_popup;

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

    public function setHorario($horario_)
    {
        $this->horario = Validation::validate( $horario_ );
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setDireccion($direccion_)
    {
        $this->direccion = Validation::validate( $direccion_ );
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefono($telefono_)
    {
        $this->telefono = Validation::validate( $telefono_ );
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setFacebook($facebook_)
    {
        $this->facebook = Validation::validate( $facebook_ );
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setYoutube($youtube_)
    {
        $this->youtube = Validation::validate( $youtube_ );
    }

    public function getYoutube()
    {
        return $this->youtube;
    }

    public function setInstagram($instagram_)
    {
        $this->instagram = Validation::validate( $instagram_ );
    }

    public function getInstagram()
    {
        return $this->instagram;
    }

    public function setMapa($mapa_)
    {
        $this->mapa = Validation::validate( $mapa_ );
    }

    public function getMapa()
    {
        return $this->mapa;
    }

    public function setPopup($popup_)
    {
        $this->popup = Validation::validate( $popup_ );
    }

    public function getPopup()
    {
        return $this->popup;
    }

    public function setShow_popup($show_popup_)
    {
        $this->show_popup = Validation::validate( $show_popup_ );
    }

    public function getShow_popup()
    {
        return $this->show_popup;
    }

}
?>