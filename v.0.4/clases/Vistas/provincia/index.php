<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_provincia.php"; 
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
  $titulo= "Nuevo provincia";
  $rpta=CRegistrar_provincia();
  $contenido="Registrar_provincia.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_provincia();
  $rptamo=CBuscar_provincia($_GET["id"]);
  $ProvinciaId=$rptamo["cuerpo"][0]["ProvinciaId"];
  $ProvinciaNombre=$rptamo["cuerpo"][0]["ProvinciaNombre"];
  $DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];
  $ubigeoProv=$rptamo["cuerpo"][0]["ubigeoProv"];
  $contenido="Actualizar_provincia.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_provincia();
  header("Location: ../provincia");
break;
case "Recuperar":
  $rpta=CRecuperar_provincia();
break;
case "Listar":
       $titulo="Listar provincia";
       $data=CListar_provincia();
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
      $Listar_provincia=$cix->ImprimeTableP("tablaprovincia",$data,"?","?",10,$page,5);
   // $Listar_provincia=$cix->ImprimeTablePOB("tablaprovincia",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_provincia.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_provincia=CListadoSimple_provincia();
break;
case "Buscar":
 $rpta=CBuscar_provincia();
break;
case "Nuevo":
 $titulo= "Nuevo provincia";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_provincia.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_provincia($_GET["id"]);
 $ProvinciaId=$rptamo["cuerpo"][0]["ProvinciaId"];
 $ProvinciaNombre=$rptamo["cuerpo"][0]["ProvinciaNombre"];
 $DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];
 $ubigeoProv=$rptamo["cuerpo"][0]["ubigeoProv"];
 $titulo= "Actualizar provincia";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_provincia.php";
 require_once "../layout.php";
break;
case "Exportar":
 $NomnbreArchivo="Lista_provincia";
 $data=CListadoSimple_provincia();
if(count($data["cuerpo"])>0){
  $concat='table" border="1';
 $data_provincia=$cix->ImprimeTable("tablapais",$data,"","",  $concat);
 include_once "../cixexportar.php"; 
 if(isset($_GET["type"])){
   $tipo=$_GET["type"];
     switch($tipo){
       case "pdf":
         Exportar_PDF( $data_provincia);
       break;
       case "xls":
         Exportar_EXCEL( $data_provincia,$NomnbreArchivo);
       break;
       case "doc":
         Exportar_WORD( $data_provincia,$NomnbreArchivo);
       break;
       case "html":
         Exportar_HTML( $data_provincia,$NomnbreArchivo);
       break;
     }
 }
}
break;
}
ob_flush();
?>