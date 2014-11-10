<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_invitacion.php"; 
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
  $titulo= "Nuevo invitacion";
  $rpta=CRegistrar_invitacion();
  $contenido="Registrar_invitacion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_invitacion();
  $rptamo=CBuscar_invitacion($_GET["id"]);
  $idinvitacion=$rptamo["cuerpo"][0]["idinvitacion"];
  $idcliente=$rptamo["cuerpo"][0]["idcliente"];
  $tipocliente=$rptamo["cuerpo"][0]["tipocliente"];
  $glosa=$rptamo["cuerpo"][0]["glosa"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_invitacion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_invitacion();
  header("Location: ../invitacion");
break;
case "Recuperar":
  $rpta=CRecuperar_invitacion();
break;
case "Listar":
       $titulo="Listar invitacion";
       $data=CListar_invitacion();
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
      $Listar_invitacion=$cix->ImprimeTableP("tablainvitacion",$data,"?","?",10,$page,5);
   // $Listar_invitacion=$cix->ImprimeTablePOB("tablainvitacion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_invitacion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_invitacion=CListadoSimple_invitacion();
break;
case "Buscar":
 $rpta=CBuscar_invitacion();
break;
case "Nuevo":
 $titulo= "Nuevo invitacion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_invitacion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_invitacion($_GET["id"]);
 $idinvitacion=$rptamo["cuerpo"][0]["idinvitacion"];
 $idcliente=$rptamo["cuerpo"][0]["idcliente"];
 $tipocliente=$rptamo["cuerpo"][0]["tipocliente"];
 $glosa=$rptamo["cuerpo"][0]["glosa"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar invitacion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_invitacion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>