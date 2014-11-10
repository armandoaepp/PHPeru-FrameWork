<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_msjemail.php"; 
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
  $titulo= "Nuevo msjemail";
  $rpta=CRegistrar_msjemail();
  $contenido="Registrar_msjemail.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_msjemail();
  $rptamo=CBuscar_msjemail($_GET["id"]);
  $idmsjemail=$rptamo["cuerpo"][0]["idmsjemail"];
  $idproceso=$rptamo["cuerpo"][0]["idproceso"];
  $idtipomensaje=$rptamo["cuerpo"][0]["idtipomensaje"];
  $item=$rptamo["cuerpo"][0]["item"];
  $email=$rptamo["cuerpo"][0]["email"];
  $asunto=$rptamo["cuerpo"][0]["asunto"];
  $mensaje=$rptamo["cuerpo"][0]["mensaje"];
  $cabecera=$rptamo["cuerpo"][0]["cabecera"];
  $fechareg=$rptamo["cuerpo"][0]["fechareg"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_msjemail.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_msjemail();
  header("Location: ../msjemail");
break;
case "Recuperar":
  $rpta=CRecuperar_msjemail();
break;
case "Listar":
       $titulo="Listar msjemail";
       $data=CListar_msjemail();
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
      $Listar_msjemail=$cix->ImprimeTableP("tablamsjemail",$data,"?","?",10,$page,5);
   // $Listar_msjemail=$cix->ImprimeTablePOB("tablamsjemail",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_msjemail.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_msjemail=CListadoSimple_msjemail();
break;
case "Buscar":
 $rpta=CBuscar_msjemail();
break;
case "Nuevo":
 $titulo= "Nuevo msjemail";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_msjemail.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_msjemail($_GET["id"]);
 $idmsjemail=$rptamo["cuerpo"][0]["idmsjemail"];
 $idproceso=$rptamo["cuerpo"][0]["idproceso"];
 $idtipomensaje=$rptamo["cuerpo"][0]["idtipomensaje"];
 $item=$rptamo["cuerpo"][0]["item"];
 $email=$rptamo["cuerpo"][0]["email"];
 $asunto=$rptamo["cuerpo"][0]["asunto"];
 $mensaje=$rptamo["cuerpo"][0]["mensaje"];
 $cabecera=$rptamo["cuerpo"][0]["cabecera"];
 $fechareg=$rptamo["cuerpo"][0]["fechareg"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar msjemail";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_msjemail.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>