<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_negociacion.php"; 
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
  $titulo= "Nuevo negociacion";
  $rpta=CRegistrar_negociacion();
  $contenido="Registrar_negociacion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_negociacion();
  $rptamo=CBuscar_negociacion($_GET["id"]);
  $idnegociacion=$rptamo["cuerpo"][0]["idnegociacion"];
  $importe=$rptamo["cuerpo"][0]["importe"];
  $fecha=$rptamo["cuerpo"][0]["fecha"];
  $okcliente=$rptamo["cuerpo"][0]["okcliente"];
  $oktransp=$rptamo["cuerpo"][0]["oktransp"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
  $idoperador=$rptamo["cuerpo"][0]["idoperador"];
  $idusuario=$rptamo["cuerpo"][0]["idusuario"];
  $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
  $contenido="Actualizar_negociacion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_negociacion();
  header("Location: ../negociacion");
break;
case "Recuperar":
  $rpta=CRecuperar_negociacion();
break;
case "Listar":
       $titulo="Listar negociacion";
       $data=CListar_negociacion();
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
      $Listar_negociacion=$cix->ImprimeTableP("tablanegociacion",$data,"?","?",10,$page,5);
   // $Listar_negociacion=$cix->ImprimeTablePOB("tablanegociacion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_negociacion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_negociacion=CListadoSimple_negociacion();
break;
case "Buscar":
 $rpta=CBuscar_negociacion();
break;
case "Nuevo":
 $titulo= "Nuevo negociacion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_negociacion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_negociacion($_GET["id"]);
 $idnegociacion=$rptamo["cuerpo"][0]["idnegociacion"];
 $importe=$rptamo["cuerpo"][0]["importe"];
 $fecha=$rptamo["cuerpo"][0]["fecha"];
 $okcliente=$rptamo["cuerpo"][0]["okcliente"];
 $oktransp=$rptamo["cuerpo"][0]["oktransp"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
 $idoperador=$rptamo["cuerpo"][0]["idoperador"];
 $idusuario=$rptamo["cuerpo"][0]["idusuario"];
 $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
 $titulo= "Actualizar negociacion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_negociacion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>