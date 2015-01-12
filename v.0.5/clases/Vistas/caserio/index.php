<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_caserio.php"; 
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
  $titulo= "Nuevo caserio";
  $rpta=CRegistrar_caserio();
  $contenido="Registrar_caserio.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_caserio();
  $rptamo=CBuscar_caserio($_GET["id"]);
  $nCasCodigo=$rptamo["cuerpo"][0]["nCasCodigo"];
  $cCasDescripcion=$rptamo["cuerpo"][0]["cCasDescripcion"];
  $nDisCodigo=$rptamo["cuerpo"][0]["nDisCodigo"];
  $nCasEstado=$rptamo["cuerpo"][0]["nCasEstado"];
  $contenido="Actualizar_caserio.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_caserio();
  header("Location: ../caserio");
break;
case "Recuperar":
  $rpta=CRecuperar_caserio();
break;
case "Listar":
       $titulo="Listar caserio";
       $data=CListar_caserio();
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
      $Listar_caserio=$cix->ImprimeTableP("tablacaserio",$data,"?","?",10,$page,5);
   // $Listar_caserio=$cix->ImprimeTablePOB("tablacaserio",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_caserio.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_caserio=CListadoSimple_caserio();
break;
case "Buscar":
 $rpta=CBuscar_caserio();
break;
case "Nuevo":
 $titulo= "Nuevo caserio";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_caserio.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_caserio($_GET["id"]);
 $nCasCodigo=$rptamo["cuerpo"][0]["nCasCodigo"];
 $cCasDescripcion=$rptamo["cuerpo"][0]["cCasDescripcion"];
 $nDisCodigo=$rptamo["cuerpo"][0]["nDisCodigo"];
 $nCasEstado=$rptamo["cuerpo"][0]["nCasEstado"];
 $titulo= "Actualizar caserio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_caserio.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>