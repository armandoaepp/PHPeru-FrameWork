<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docref.php"; 
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
  $titulo= "Nuevo docref";
  $rpta=CRegistrar_docref();
  $contenido="Registrar_docref.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docref();
  $rptamo=CBuscar_docref($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $cDocRefCodigo=$rptamo["cuerpo"][0]["cDocRefCodigo"];
  $contenido="Actualizar_docref.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docref();
  header("Location: ../docref");
break;
case "Recuperar":
  $rpta=CRecuperar_docref();
break;
case "Listar":
       $titulo="Listar docref";
       $data=CListar_docref();
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
      $Listar_docref=$cix->ImprimeTableP("tabladocref",$data,"?","?",10,$page,5);
   // $Listar_docref=$cix->ImprimeTablePOB("tabladocref",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docref.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docref=CListadoSimple_docref();
break;
case "Buscar":
 $rpta=CBuscar_docref();
break;
case "Nuevo":
 $titulo= "Nuevo docref";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docref.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docref($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $cDocRefCodigo=$rptamo["cuerpo"][0]["cDocRefCodigo"];
 $titulo= "Actualizar docref";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docref.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>