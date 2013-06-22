<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_base.php"; 
include_once "../cixajax.php"; 

$cix=new CixAJAX();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $rpta=CRegistrar_base();
  $contenido="Registrar_base.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_base();
  $rptamo=CBuscar_base($_GET["id"]);
  $BaseId=$rptamo["cuerpo"][0]["BaseId"];
  $BaseNombre=$rptamo["cuerpo"][0]["BaseNombre"];
  $contenido="Actualizar_base.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_base();
  header("Location: ../base");
break;
case "Recuperar":
  $rpta=CRecuperar_base();
break;
case "Listar":
       $titulo="Listar base";
       $data=CListar_base();
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
      $Listar_base=$cix->ImprimeTableP("tablabase",$data,"?","?",10,$page,5);
   // $Listar_base=$cix->ImprimeTablePOB("tablabase",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_base.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_base=CListadoSimple_base();
break;
case "Buscar":
 $rpta=CBuscar_base();
break;
case "Nuevo":
 $titulo= "Nuevo base";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_base.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_base($_GET["id"]);
 $BaseId=$rptamo["cuerpo"][0]["BaseId"];
 $BaseNombre=$rptamo["cuerpo"][0]["BaseNombre"];
 $titulo= "Actualizar base";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_base.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>