<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_respuesta.php"; 
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
  $titulo= "Nuevo respuesta";
  $rpta=CRegistrar_respuesta();
  $contenido="Registrar_respuesta.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_respuesta();
  $rptamo=CBuscar_respuesta($_GET["id"]);
  $RespuestaId=$rptamo["cuerpo"][0]["RespuestaId"];
  $Respuesta=$rptamo["cuerpo"][0]["Respuesta"];
  $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
  $RespuestaPuntaje=$rptamo["cuerpo"][0]["RespuestaPuntaje"];
  $contenido="Actualizar_respuesta.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_respuesta();
  header("Location: ../respuesta");
break;
case "Recuperar":
  $rpta=CRecuperar_respuesta();
break;
case "Listar":
       $titulo="Listar respuesta";
       $data=CListar_respuesta();
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
      $Listar_respuesta=$cix->ImprimeTableP("tablarespuesta",$data,"?","?",10,$page,5);
   // $Listar_respuesta=$cix->ImprimeTablePOB("tablarespuesta",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_respuesta.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_respuesta=CListadoSimple_respuesta();
break;
case "Buscar":
 $rpta=CBuscar_respuesta();
break;
case "Nuevo":
 $titulo= "Nuevo respuesta";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_respuesta.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_respuesta($_GET["id"]);
 $RespuestaId=$rptamo["cuerpo"][0]["RespuestaId"];
 $Respuesta=$rptamo["cuerpo"][0]["Respuesta"];
 $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
 $RespuestaPuntaje=$rptamo["cuerpo"][0]["RespuestaPuntaje"];
 $titulo= "Actualizar respuesta";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_respuesta.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>