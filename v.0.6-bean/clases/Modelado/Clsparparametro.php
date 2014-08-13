<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clsparparametro extends ClsConexion {
# Método Insertar
public function Set_parparametro($bean_parparametro)
{
$nParSrcCodigo = $bean_parparametro->getnParSrcCodigo;
$nParSrcClase = $bean_parparametro->getnParSrcClase;
$nParDstCodigo = $bean_parparametro->getnParDstCodigo;
$nParDstClase = $bean_parparametro->getnParDstClase;
$cValor = $bean_parparametro->getcValor;
$nParParEstado = $bean_parparametro->getnParParEstado;

$this->query = "CALL usp_Set_parparametro('$nParSrcCodigo','$nParSrcClase','$nParDstCodigo','$nParDstClase','$cValor','$nParParEstado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
//Método Actualizar
public function Upd_parparametro($bean_parparametro)
{
$nParSrcCodigo = $bean_parparametro->getnParSrcCodigo;
$nParSrcClase = $bean_parparametro->getnParSrcClase;
$nParDstCodigo = $bean_parparametro->getnParDstCodigo;
$nParDstClase = $bean_parparametro->getnParDstClase;
$cValor = $bean_parparametro->getcValor;
$nParParEstado = $bean_parparametro->getnParParEstado;

$this->query = "CALL usp_Set_parparametro('$nParSrcCodigo','$nParSrcClase','$nParDstCodigo','$nParDstClase','$cValor','$nParParEstado')";
$this->execute_query();
$data = $this->rows ;

}
//Método Eliminar(Actualizar Estado)
public function Upd_parparametro_Estado($bean_parparametro)
{
$nParSrcCodigo = $bean_parparametro->getnParSrcCodigo;
$nParParEstado = $bean_parparametro->getnParParEstado;

$this->query = "CALL usp_Set_parparametro('$nParSrcCodigo','$nParParEstado')";
$this->execute_query();
$data = $this->rows ;
}
//Método Buscar por ID
public function Get_parparametroby_nParSrcCodigo($bean_parparametro)
{
$nParSrcCodigo = $bean_parparametro->getnParSrcCodigo;

$this->query = "CALL usp_Set_parparametro('$nParSrcCodigo')";
$this->execute_query();
$data = $this->rows ;
}
}
?>