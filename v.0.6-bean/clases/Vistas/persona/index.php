<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_persona.php"; 
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
  $titulo= "Nuevo persona";
  $rpta=CRegistrar_persona();
  $contenido="Registrar_persona.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_persona();
  $rptamo=CBuscar_persona($_GET["id"]);
  $idpersona=$rptamo["cuerpo"][0]["idpersona"];
  $nombre=$rptamo["cuerpo"][0]["nombre"];
  $nacimiento=$rptamo["cuerpo"][0]["nacimiento"];
  $tipo=$rptamo["cuerpo"][0]["tipo"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_persona.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_persona();
  header("Location: ../persona");
break;
case "Recuperar":
  $rpta=CRecuperar_persona();
break;
case "Listar":
       $titulo="Listar persona";
       $data=CListar_persona();
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
      $Listar_persona=$cix->ImprimeTableP("tablapersona",$data,"?","?",10,$page,5);
   // $Listar_persona=$cix->ImprimeTablePOB("tablapersona",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_persona.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_persona=CListadoSimple_persona();
break;
case "Buscar":
 $rpta=CBuscar_persona();
break;
case "Nuevo":
 $titulo= "Nuevo persona";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_persona.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_persona($_GET["id"]);
 $idpersona=$rptamo["cuerpo"][0]["idpersona"];
 $nombre=$rptamo["cuerpo"][0]["nombre"];
 $nacimiento=$rptamo["cuerpo"][0]["nacimiento"];
 $tipo=$rptamo["cuerpo"][0]["tipo"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar persona";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_persona.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>