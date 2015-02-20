<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsPoligono extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_poligono($bean_poligono)
    {
        $idpoligono = $bean_poligono->getIdPoligono();
        $idpersona = $bean_poligono->getIdPersona();
        $tipopoligono = $bean_poligono->getTipoPoligono();
        $polix = $bean_poligono->getPoliX();
        $poliy = $bean_poligono->getPoliY();
        $geocerca = $bean_poligono->getGeoCerca();
        $fechareg = $bean_poligono->getFechaReg();
        $referencia = $bean_poligono->getReferencia();
        $estado = $bean_poligono->getEstado();

        $this->query = "CALL usp_set_poligono('$idpoligono','$idpersona','$tipopoligono','$polix','$poliy','$geocerca','$fechareg','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_poligono($bean_poligono)
    {
        $idpoligono = $bean_poligono->getIdPoligono();
        $idpersona = $bean_poligono->getIdPersona();
        $tipopoligono = $bean_poligono->getTipoPoligono();
        $polix = $bean_poligono->getPoliX();
        $poliy = $bean_poligono->getPoliY();
        $geocerca = $bean_poligono->getGeoCerca();
        $fechareg = $bean_poligono->getFechaReg();
        $referencia = $bean_poligono->getReferencia();
        $estado = $bean_poligono->getEstado();

        $this->query = "CALL usp_upd_poligono('$idpoligono','$idpersona','$tipopoligono','$polix','$poliy','$geocerca','$fechareg','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_poligono_estado($bean_poligono)
    {
        $idpoligono = $bean_poligono->getIdPoligono();
        $estado = $bean_poligono->getEstado();

        $this->query = "CALL usp_upd_poligono_estado('$idpoligono','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_poligono_by_idpoligono($bean_poligono)
    {
        $idpoligono = $bean_poligono->getIdPoligono();

        $this->query = "CALL usp_get_poligono_by_idpoligono('$idpoligono')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_poligono()
    {
        $this->query = "CALL usp_get_poligono()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>