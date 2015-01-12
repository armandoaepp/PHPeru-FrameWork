<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_textopregunta.php"; 
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
  $titulo= "Nuevo textopregunta";
  $rpta=CRegistrar_textopregunta();
  $contenido="Registrar_textopregunta.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_textopregunta();
  $rptamo=CBuscar_textopregunta($_GET["id"]);
  $TextoPreguntaId=$rptamo["cuerpo"][0]["TextoPreguntaId"];
  $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
  $TextoId=$rptamo["cuerpo"][0]["TextoId"];
  $contenido="Actualizar_textopregunta.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_textopregunta();
  header("Location: ../textopregunta");
break;
case "Recuperar":
  $rpta=CRecuperar_textopregunta();
break;
case "Listar":
       $titulo="Listar textopregunta";
       $data=CListar_textopregunta();
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
      $Listar_textopregunta=$cix->ImprimeTableP("tablatextopregunta",$data,"?","?",10,$page,5);
   // $Listar_textopregunta=$cix->ImprimeTablePOB("tablatextopregunta",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_textopregunta.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_textopregunta=CListadoSimple_textopregunta();
break;
case "Buscar":
 $rpta=CBuscar_textopregunta();
break;
case "Nuevo":
 $titulo= "Nuevo textopregunta";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_textopregunta.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_textopregunta($_GET["id"]);
 $TextoPreguntaId=$rptamo["cuerpo"][0]["TextoPreguntaId"];
 $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
 $TextoId=$rptamo["cuerpo"][0]["TextoId"];
 $titulo= "Actualizar textopregunta";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_textopregunta.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>