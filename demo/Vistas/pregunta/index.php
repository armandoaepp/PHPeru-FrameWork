<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_pregunta.php"; 
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
  $titulo= "Nuevo pregunta";
  $rpta=CRegistrar_pregunta();
  $contenido="Registrar_pregunta.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_pregunta();
  $rptamo=CBuscar_pregunta($_GET["id"]);
  $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
  $PreguntaNumero=$rptamo["cuerpo"][0]["PreguntaNumero"];
  $Pregunta=$rptamo["cuerpo"][0]["Pregunta"];
  $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
  $contenido="Actualizar_pregunta.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_pregunta();
  header("Location: ../pregunta");
break;
case "Recuperar":
  $rpta=CRecuperar_pregunta();
break;
case "Listar":
       $titulo="Listar pregunta";
       $data=CListar_pregunta();
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
      $Listar_pregunta=$cix->ImprimeTableP("tablapregunta",$data,"?","?",10,$page,5);
   // $Listar_pregunta=$cix->ImprimeTablePOB("tablapregunta",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_pregunta.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_pregunta=CListadoSimple_pregunta();
break;
case "Buscar":
 $rpta=CBuscar_pregunta();
break;
case "Nuevo":
 $titulo= "Nuevo pregunta";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_pregunta.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_pregunta($_GET["id"]);
 $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
 $PreguntaNumero=$rptamo["cuerpo"][0]["PreguntaNumero"];
 $Pregunta=$rptamo["cuerpo"][0]["Pregunta"];
 $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
 $titulo= "Actualizar pregunta";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_pregunta.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>