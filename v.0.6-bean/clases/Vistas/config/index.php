<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_config.php"; 
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
  $titulo= "Nuevo config";
  $rpta=CRegistrar_config();
  $contenido="Registrar_config.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_config();
  $rptamo=CBuscar_config($_GET["id"]);
  $idconfig=$rptamo["cuerpo"][0]["idconfig"];
  $idtipoentidad=$rptamo["cuerpo"][0]["idtipoentidad"];
  $idvalor=$rptamo["cuerpo"][0]["idvalor"];
  $valor=$rptamo["cuerpo"][0]["valor"];
  $referencia=$rptamo["cuerpo"][0]["referencia"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_config.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_config();
  header("Location: ../config");
break;
case "Recuperar":
  $rpta=CRecuperar_config();
break;
case "Listar":
       $titulo="Listar config";
       $data=CListar_config();
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
      $Listar_config=$cix->ImprimeTableP("tablaconfig",$data,"?","?",10,$page,5);
   // $Listar_config=$cix->ImprimeTablePOB("tablaconfig",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_config.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_config=CListadoSimple_config();
break;
case "Buscar":
 $rpta=CBuscar_config();
break;
case "Nuevo":
 $titulo= "Nuevo config";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_config.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_config($_GET["id"]);
 $idconfig=$rptamo["cuerpo"][0]["idconfig"];
 $idtipoentidad=$rptamo["cuerpo"][0]["idtipoentidad"];
 $idvalor=$rptamo["cuerpo"][0]["idvalor"];
 $valor=$rptamo["cuerpo"][0]["valor"];
 $referencia=$rptamo["cuerpo"][0]["referencia"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar config";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_config.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>