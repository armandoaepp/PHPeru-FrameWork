<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_documento.php"; 
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
  $titulo= "Nuevo documento";
  $rpta=CRegistrar_documento();
  $contenido="Registrar_documento.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_documento();
  $rptamo=CBuscar_documento($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $dDocFecha=$rptamo["cuerpo"][0]["dDocFecha"];
  $cDocObservacion=$rptamo["cuerpo"][0]["cDocObservacion"];
  $nDocTipo=$rptamo["cuerpo"][0]["nDocTipo"];
  $nDocEstado=$rptamo["cuerpo"][0]["nDocEstado"];
  $contenido="Actualizar_documento.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_documento();
  header("Location: ../documento");
break;
case "Recuperar":
  $rpta=CRecuperar_documento();
break;
case "Listar":
       $titulo="Listar documento";
       $data=CListar_documento();
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
      $Listar_documento=$cix->ImprimeTableP("tabladocumento",$data,"?","?",10,$page,5);
   // $Listar_documento=$cix->ImprimeTablePOB("tabladocumento",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_documento.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_documento=CListadoSimple_documento();
break;
case "Buscar":
 $rpta=CBuscar_documento();
break;
case "Nuevo":
 $titulo= "Nuevo documento";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_documento.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_documento($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $dDocFecha=$rptamo["cuerpo"][0]["dDocFecha"];
 $cDocObservacion=$rptamo["cuerpo"][0]["cDocObservacion"];
 $nDocTipo=$rptamo["cuerpo"][0]["nDocTipo"];
 $nDocEstado=$rptamo["cuerpo"][0]["nDocEstado"];
 $titulo= "Actualizar documento";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_documento.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>