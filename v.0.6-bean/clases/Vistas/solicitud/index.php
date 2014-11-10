<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_solicitud.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $titulo= "Nuevo solicitud";
  $rpta=CRegistrar_solicitud();
  $contenido="Registrar_solicitud.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_solicitud();
  $rptamo=CBuscar_solicitud($_GET["id"]);
  $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
  $fecha_ini=$rptamo["cuerpo"][0]["fecha_ini"];
  $fecha_fin=$rptamo["cuerpo"][0]["fecha_fin"];
  $peso=$rptamo["cuerpo"][0]["peso"];
  $volumen=$rptamo["cuerpo"][0]["volumen"];
  $direccion_origen=$rptamo["cuerpo"][0]["direccion_origen"];
  $ref_dirorigen=$rptamo["cuerpo"][0]["ref_dirorigen"];
  $direccion_destino=$rptamo["cuerpo"][0]["direccion_destino"];
  $ref_dirdestino=$rptamo["cuerpo"][0]["ref_dirdestino"];
  $puntuacion=$rptamo["cuerpo"][0]["puntuacion"];
  $importe=$rptamo["cuerpo"][0]["importe"];
  $comision=$rptamo["cuerpo"][0]["comision"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $fechareg=$rptamo["cuerpo"][0]["fechareg"];
  $idusuario=$rptamo["cuerpo"][0]["idusuario"];
  $tipopago=$rptamo["cuerpo"][0]["tipopago"];
  $tipotiempo=$rptamo["cuerpo"][0]["tipotiempo"];
  $cantiempo=$rptamo["cuerpo"][0]["cantiempo"];
  $ubigeo_origen=$rptamo["cuerpo"][0]["ubigeo_origen"];
  $ubigeo_destino=$rptamo["cuerpo"][0]["ubigeo_destino"];
  $idoperador=$rptamo["cuerpo"][0]["idoperador"];
  $descripcion=$rptamo["cuerpo"][0]["descripcion"];
  $idproducto=$rptamo["cuerpo"][0]["idproducto"];
  $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
  $oferta_inicial=$rptamo["cuerpo"][0]["oferta_inicial"];
  $urgente=$rptamo["cuerpo"][0]["urgente"];
  $contenido="Actualizar_solicitud.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_solicitud();
  header("Location: ../solicitud");
break;
case "Recuperar":
  $rpta=CRecuperar_solicitud();
break;
case "Listar":
       $titulo="Listar solicitud";
       $data=CListar_solicitud();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
/*
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{
         $busca=""; }
*/
      $Listar_solicitud=$cix->ImprimeTableP("tablasolicitud",$data,"?","?",10,$page,5);
   // $Listar_solicitud=$cix->ImprimeTablePOB("tablasolicitud",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_solicitud.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_solicitud=CListadoSimple_solicitud();
break;
case "Buscar":
 $rpta=CBuscar_solicitud();
break;
case "Nuevo":
 $titulo= "Nuevo solicitud";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_solicitud.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_solicitud($_GET["id"]);
 $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
 $fecha_ini=$rptamo["cuerpo"][0]["fecha_ini"];
 $fecha_fin=$rptamo["cuerpo"][0]["fecha_fin"];
 $peso=$rptamo["cuerpo"][0]["peso"];
 $volumen=$rptamo["cuerpo"][0]["volumen"];
 $direccion_origen=$rptamo["cuerpo"][0]["direccion_origen"];
 $ref_dirorigen=$rptamo["cuerpo"][0]["ref_dirorigen"];
 $direccion_destino=$rptamo["cuerpo"][0]["direccion_destino"];
 $ref_dirdestino=$rptamo["cuerpo"][0]["ref_dirdestino"];
 $puntuacion=$rptamo["cuerpo"][0]["puntuacion"];
 $importe=$rptamo["cuerpo"][0]["importe"];
 $comision=$rptamo["cuerpo"][0]["comision"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $fechareg=$rptamo["cuerpo"][0]["fechareg"];
 $idusuario=$rptamo["cuerpo"][0]["idusuario"];
 $tipopago=$rptamo["cuerpo"][0]["tipopago"];
 $tipotiempo=$rptamo["cuerpo"][0]["tipotiempo"];
 $cantiempo=$rptamo["cuerpo"][0]["cantiempo"];
 $ubigeo_origen=$rptamo["cuerpo"][0]["ubigeo_origen"];
 $ubigeo_destino=$rptamo["cuerpo"][0]["ubigeo_destino"];
 $idoperador=$rptamo["cuerpo"][0]["idoperador"];
 $descripcion=$rptamo["cuerpo"][0]["descripcion"];
 $idproducto=$rptamo["cuerpo"][0]["idproducto"];
 $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
 $oferta_inicial=$rptamo["cuerpo"][0]["oferta_inicial"];
 $urgente=$rptamo["cuerpo"][0]["urgente"];
 $titulo= "Actualizar solicitud";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_solicitud.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>