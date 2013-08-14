<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_puntaje.php"; 
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
  $titulo= "Nuevo puntaje";
  $rpta=CRegistrar_puntaje();
  $contenido="Registrar_puntaje.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_puntaje();
  $rptamo=CBuscar_puntaje($_GET["id"]);
  $PuntajeId=$rptamo["cuerpo"][0]["PuntajeId"];
  $PuntajeTotal=$rptamo["cuerpo"][0]["PuntajeTotal"];
  $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
  $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
  $contenido="Actualizar_puntaje.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_puntaje();
  header("Location: ../puntaje");
break;
case "Recuperar":
  $rpta=CRecuperar_puntaje();
break;
case "Listar":
       $titulo="Listar puntaje";
       $data=CListar_puntaje();
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
      $Listar_puntaje=$cix->ImprimeTableP("tablapuntaje",$data,"?","?",10,$page,5);
   // $Listar_puntaje=$cix->ImprimeTablePOB("tablapuntaje",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_puntaje.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_puntaje=CListadoSimple_puntaje();
break;
case "Buscar":
 $rpta=CBuscar_puntaje();
break;
case "Nuevo":
 $titulo= "Nuevo puntaje";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_puntaje.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_puntaje($_GET["id"]);
 $PuntajeId=$rptamo["cuerpo"][0]["PuntajeId"];
 $PuntajeTotal=$rptamo["cuerpo"][0]["PuntajeTotal"];
 $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
 $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
 $titulo= "Actualizar puntaje";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_puntaje.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>