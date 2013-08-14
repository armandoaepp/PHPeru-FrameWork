<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_simulacro.php"; 
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
  $titulo= "Nuevo simulacro";
  $rpta=CRegistrar_simulacro();
  $contenido="Registrar_simulacro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_simulacro();
  $rptamo=CBuscar_simulacro($_GET["id"]);
  $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
  $SimulacroNumero=$rptamo["cuerpo"][0]["SimulacroNumero"];
  $SimulacroNombre=$rptamo["cuerpo"][0]["SimulacroNombre"];
  $SimulacroEstado=$rptamo["cuerpo"][0]["SimulacroEstado"];
  $contenido="Actualizar_simulacro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_simulacro();
  header("Location: ../simulacro");
break;
case "Recuperar":
  $rpta=CRecuperar_simulacro();
break;
case "Listar":
       $titulo="Listar simulacro";
       $data=CListar_simulacro();
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
      $Listar_simulacro=$cix->ImprimeTableP("tablasimulacro",$data,"?","?",10,$page,5);
   // $Listar_simulacro=$cix->ImprimeTablePOB("tablasimulacro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_simulacro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_simulacro=CListadoSimple_simulacro();
break;
case "Buscar":
 $rpta=CBuscar_simulacro();
break;
case "Nuevo":
 $titulo= "Nuevo simulacro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_simulacro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_simulacro($_GET["id"]);
 $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
 $SimulacroNumero=$rptamo["cuerpo"][0]["SimulacroNumero"];
 $SimulacroNombre=$rptamo["cuerpo"][0]["SimulacroNombre"];
 $SimulacroEstado=$rptamo["cuerpo"][0]["SimulacroEstado"];
 $titulo= "Actualizar simulacro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_simulacro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>