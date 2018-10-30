<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanBuzon{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombres;
    private $telefono;
    private $email;
    private $mensaje;
    private $estado;
    private $fecha;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::Validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombres($nombres_)
    {
        $this->nombres = Validation::Validate( $nombres_ );
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setTelefono($telefono_)
    {
        $this->telefono = Validation::Validate( $telefono_ );
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::Validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setMensaje($mensaje_)
    {
        $this->mensaje = Validation::Validate( $mensaje_ );
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setEstado($estado_)
    {
        $this->estado = Validation::Validate( $estado_ );
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setFecha($fecha_)
    {
        $this->fecha = Validation::Validate( $fecha_ );
    }

    public function getFecha()
    {
        return $this->fecha;
    }

}
?>