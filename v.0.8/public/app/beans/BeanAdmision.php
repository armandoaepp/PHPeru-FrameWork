<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanAdmision{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $imagen;
    private $requisitos;
    private $horarios;
    private $inversion;
    private $email;

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

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setRequisitos($requisitos_)
    {
        $this->requisitos = Validation::validate( $requisitos_ );
    }

    public function getRequisitos()
    {
        return $this->requisitos;
    }

    public function setHorarios($horarios_)
    {
        $this->horarios = Validation::validate( $horarios_ );
    }

    public function getHorarios()
    {
        return $this->horarios;
    }

    public function setInversion($inversion_)
    {
        $this->inversion = Validation::validate( $inversion_ );
    }

    public function getInversion()
    {
        return $this->inversion;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

}
?>