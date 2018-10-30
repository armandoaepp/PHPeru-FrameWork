<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsGeocoder extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_geocoder($bean_geocoder)
    {
        $idgeocoder = $bean_geocoder->getIdGeocoder();
        $idcellocator = $bean_geocoder->getIdCellocator();
        $longuitud = $bean_geocoder->getLonguitud();
        $latidud = $bean_geocoder->getLatidud();
        $address = $bean_geocoder->getAddress();
        $referencia = $bean_geocoder->getReferencia();

        $this->query = "CALL usp_set_geocoder('$idgeocoder','$idcellocator','$longuitud','$latidud','$address','$referencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_geocoder($bean_geocoder)
    {
        $idgeocoder = $bean_geocoder->getIdGeocoder();
        $idcellocator = $bean_geocoder->getIdCellocator();
        $longuitud = $bean_geocoder->getLonguitud();
        $latidud = $bean_geocoder->getLatidud();
        $address = $bean_geocoder->getAddress();
        $referencia = $bean_geocoder->getReferencia();

        $this->query = "CALL usp_upd_geocoder('$idgeocoder','$idcellocator','$longuitud','$latidud','$address','$referencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_geocoder_estado($bean_geocoder)
    {
        $idgeocoder = $bean_geocoder->getIdGeocoder();
        $referencia = $bean_geocoder->getReferencia();

        $this->query = "CALL usp_upd_geocoder_estado('$idgeocoder','$referencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_geocoder_by_idgeocoder($bean_geocoder)
    {
        $idgeocoder = $bean_geocoder->getIdGeocoder();

        $this->query = "CALL usp_get_geocoder_by_idgeocoder('$idgeocoder')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_geocoder()
    {
        $this->query = "CALL usp_get_geocoder()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>