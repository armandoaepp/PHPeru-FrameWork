<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_tipousuario.php"; 
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
  $rpta=CRegistrar_tipousuario();
  $contenido="Registrar_tipousuario.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_tipousuario();
  $rptamo=CBuscar_tipousuario($_GET["id"]);
  $TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
  $TipoUsuario=$rptamo["cuerpo"][0]["TipoUsuario"];
  $TipoUsuarioEstado=$rptamo["cuerpo"][0]["TipoUsuarioEstado"];
  $contenido="Actualizar_tipousuario.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_tipousuario();
  header("Location: ../tipousuario");
break;
case "Recuperar":
  $rpta=CRecuperar_tipousuario();
break;
case "Listar":
       $titulo="Listar tipousuario";
       $data=CListar_tipousuario();
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
      $Listar_tipousuario=$cix->ImprimeTableP("tablatipousuario",$data,"?","?",10,$page,5);
   // $Listar_tipousuario=$cix->ImprimeTablePOB("tablatipousuario",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_tipousuario.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipousuario=CListadoSimple_tipousuario();
break;
case "Buscar":
 $rpta=CBuscar_tipousuario();
break;
case "Nuevo":
 $titulo= "Nuevo tipousuario";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipousuario.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipousuario($_GET["id"]);
 $TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
 $TipoUsuario=$rptamo["cuerpo"][0]["TipoUsuario"];
 $TipoUsuarioEstado=$rptamo["cuerpo"][0]["TipoUsuarioEstado"];
 $titulo= "Actualizar tipousuario";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipousuario.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>