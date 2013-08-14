<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_texto.php"; 
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
  $titulo= "Nuevo texto";
  $rpta=CRegistrar_texto();
  $contenido="Registrar_texto.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_texto();
  $rptamo=CBuscar_texto($_GET["id"]);
  $TextoId=$rptamo["cuerpo"][0]["TextoId"];
  $TextoTitulo=$rptamo["cuerpo"][0]["TextoTitulo"];
  $Texto=$rptamo["cuerpo"][0]["Texto"];
  $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
  $TextoEstado=$rptamo["cuerpo"][0]["TextoEstado"];
  $contenido="Actualizar_texto.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_texto();
  header("Location: ../texto");
break;
case "Recuperar":
  $rpta=CRecuperar_texto();
break;
case "Listar":
       $titulo="Listar texto";
       $data=CListar_texto();
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
      $Listar_texto=$cix->ImprimeTableP("tablatexto",$data,"?","?",10,$page,5);
   // $Listar_texto=$cix->ImprimeTablePOB("tablatexto",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_texto.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_texto=CListadoSimple_texto();
break;
case "Buscar":
 $rpta=CBuscar_texto();
break;
case "Nuevo":
 $titulo= "Nuevo texto";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_texto.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_texto($_GET["id"]);
 $TextoId=$rptamo["cuerpo"][0]["TextoId"];
 $TextoTitulo=$rptamo["cuerpo"][0]["TextoTitulo"];
 $Texto=$rptamo["cuerpo"][0]["Texto"];
 $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
 $TextoEstado=$rptamo["cuerpo"][0]["TextoEstado"];
 $titulo= "Actualizar texto";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_texto.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>