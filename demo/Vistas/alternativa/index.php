<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_alternativa.php"; 
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
  $titulo= "Nuevo alternativa";
  $rpta=CRegistrar_alternativa();
  $contenido="Registrar_alternativa.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_alternativa();
  $rptamo=CBuscar_alternativa($_GET["id"]);
  $AlternativaId=$rptamo["cuerpo"][0]["AlternativaId"];
  $AlternativaA=$rptamo["cuerpo"][0]["AlternativaA"];
  $AlternativaB=$rptamo["cuerpo"][0]["AlternativaB"];
  $AlternativaC=$rptamo["cuerpo"][0]["AlternativaC"];
  $AlternativaD=$rptamo["cuerpo"][0]["AlternativaD"];
  $AlternativaE=$rptamo["cuerpo"][0]["AlternativaE"];
  $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
  $contenido="Actualizar_alternativa.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_alternativa();
  header("Location: ../alternativa");
break;
case "Recuperar":
  $rpta=CRecuperar_alternativa();
break;
case "Listar":
       $titulo="Listar alternativa";
       $data=CListar_alternativa();
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
      $Listar_alternativa=$cix->ImprimeTableP("tablaalternativa",$data,"?","?",10,$page,5);
   // $Listar_alternativa=$cix->ImprimeTablePOB("tablaalternativa",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_alternativa.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_alternativa=CListadoSimple_alternativa();
break;
case "Buscar":
 $rpta=CBuscar_alternativa();
break;
case "Nuevo":
 $titulo= "Nuevo alternativa";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_alternativa.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_alternativa($_GET["id"]);
 $AlternativaId=$rptamo["cuerpo"][0]["AlternativaId"];
 $AlternativaA=$rptamo["cuerpo"][0]["AlternativaA"];
 $AlternativaB=$rptamo["cuerpo"][0]["AlternativaB"];
 $AlternativaC=$rptamo["cuerpo"][0]["AlternativaC"];
 $AlternativaD=$rptamo["cuerpo"][0]["AlternativaD"];
 $AlternativaE=$rptamo["cuerpo"][0]["AlternativaE"];
 $PreguntaId=$rptamo["cuerpo"][0]["PreguntaId"];
 $titulo= "Actualizar alternativa";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_alternativa.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>