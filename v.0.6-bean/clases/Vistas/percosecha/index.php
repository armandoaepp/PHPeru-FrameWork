<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_percosecha.php"; 
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
  $titulo= "Nuevo percosecha";
  $rpta=CRegistrar_percosecha();
  $contenido="Registrar_percosecha.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_percosecha();
  $rptamo=CBuscar_percosecha($_GET["id"]);
  $nPerCosCodigo=$rptamo["cuerpo"][0]["nPerCosCodigo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nParcCodigo=$rptamo["cuerpo"][0]["nParcCodigo"];
  $nParcClase=$rptamo["cuerpo"][0]["nParcClase"];
  $nProdCodigo=$rptamo["cuerpo"][0]["nProdCodigo"];
  $nProdClase=$rptamo["cuerpo"][0]["nProdClase"];
  $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
  $cCosCodigo=$rptamo["cuerpo"][0]["cCosCodigo"];
  $fHectareas=$rptamo["cuerpo"][0]["fHectareas"];
  $fQuintales=$rptamo["cuerpo"][0]["fQuintales"];
  $fKilogramos=$rptamo["cuerpo"][0]["fKilogramos"];
  $cGlosa=$rptamo["cuerpo"][0]["cGlosa"];
  $nPerCosEstado=$rptamo["cuerpo"][0]["nPerCosEstado"];
  $contenido="Actualizar_percosecha.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_percosecha();
  header("Location: ../percosecha");
break;
case "Recuperar":
  $rpta=CRecuperar_percosecha();
break;
case "Listar":
       $titulo="Listar percosecha";
       $data=CListar_percosecha();
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
      $Listar_percosecha=$cix->ImprimeTableP("tablapercosecha",$data,"?","?",10,$page,5);
   // $Listar_percosecha=$cix->ImprimeTablePOB("tablapercosecha",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_percosecha.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_percosecha=CListadoSimple_percosecha();
break;
case "Buscar":
 $rpta=CBuscar_percosecha();
break;
case "Nuevo":
 $titulo= "Nuevo percosecha";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_percosecha.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_percosecha($_GET["id"]);
 $nPerCosCodigo=$rptamo["cuerpo"][0]["nPerCosCodigo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nParcCodigo=$rptamo["cuerpo"][0]["nParcCodigo"];
 $nParcClase=$rptamo["cuerpo"][0]["nParcClase"];
 $nProdCodigo=$rptamo["cuerpo"][0]["nProdCodigo"];
 $nProdClase=$rptamo["cuerpo"][0]["nProdClase"];
 $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
 $cCosCodigo=$rptamo["cuerpo"][0]["cCosCodigo"];
 $fHectareas=$rptamo["cuerpo"][0]["fHectareas"];
 $fQuintales=$rptamo["cuerpo"][0]["fQuintales"];
 $fKilogramos=$rptamo["cuerpo"][0]["fKilogramos"];
 $cGlosa=$rptamo["cuerpo"][0]["cGlosa"];
 $nPerCosEstado=$rptamo["cuerpo"][0]["nPerCosEstado"];
 $titulo= "Actualizar percosecha";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_percosecha.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>