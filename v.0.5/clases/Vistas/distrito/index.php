<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_distrito.php"; 
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
  $titulo= "Nuevo distrito";
  $rpta=CRegistrar_distrito();
  $contenido="Registrar_distrito.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_distrito();
  $rptamo=CBuscar_distrito($_GET["id"]);
  $nDisCodigo=$rptamo["cuerpo"][0]["nDisCodigo"];
  $cDisDescripcion=$rptamo["cuerpo"][0]["cDisDescripcion"];
  $nProCodigo=$rptamo["cuerpo"][0]["nProCodigo"];
  $nDisEstado=$rptamo["cuerpo"][0]["nDisEstado"];
  $contenido="Actualizar_distrito.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_distrito();
  header("Location: ../distrito");
break;
case "Recuperar":
  $rpta=CRecuperar_distrito();
break;
case "Listar":
       $titulo="Listar distrito";
       $data=CListar_distrito();
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
      $Listar_distrito=$cix->ImprimeTableP("tabladistrito",$data,"?","?",10,$page,5);
   // $Listar_distrito=$cix->ImprimeTablePOB("tabladistrito",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_distrito.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_distrito=CListadoSimple_distrito();
break;
case "Buscar":
 $rpta=CBuscar_distrito();
break;
case "Nuevo":
 $titulo= "Nuevo distrito";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_distrito.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_distrito($_GET["id"]);
 $nDisCodigo=$rptamo["cuerpo"][0]["nDisCodigo"];
 $cDisDescripcion=$rptamo["cuerpo"][0]["cDisDescripcion"];
 $nProCodigo=$rptamo["cuerpo"][0]["nProCodigo"];
 $nDisEstado=$rptamo["cuerpo"][0]["nDisEstado"];
 $titulo= "Actualizar distrito";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_distrito.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>