<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_respuestausuario.php"; 
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
  $titulo= "Nuevo respuestausuario";
  $rpta=CRegistrar_respuestausuario();
  $contenido="Registrar_respuestausuario.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_respuestausuario();
  $rptamo=CBuscar_respuestausuario($_GET["id"]);
  $RespuestaUsuarioId=$rptamo["cuerpo"][0]["RespuestaUsuarioId"];
  $RespuestaUsuario=$rptamo["cuerpo"][0]["RespuestaUsuario"];
  $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
  $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
  $contenido="Actualizar_respuestausuario.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_respuestausuario();
  header("Location: ../respuestausuario");
break;
case "Recuperar":
  $rpta=CRecuperar_respuestausuario();
break;
case "Listar":
       $titulo="Listar respuestausuario";
       $data=CListar_respuestausuario();
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
      $Listar_respuestausuario=$cix->ImprimeTableP("tablarespuestausuario",$data,"?","?",10,$page,5);
   // $Listar_respuestausuario=$cix->ImprimeTablePOB("tablarespuestausuario",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_respuestausuario.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_respuestausuario=CListadoSimple_respuestausuario();
break;
case "Buscar":
 $rpta=CBuscar_respuestausuario();
break;
case "Nuevo":
 $titulo= "Nuevo respuestausuario";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_respuestausuario.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_respuestausuario($_GET["id"]);
 $RespuestaUsuarioId=$rptamo["cuerpo"][0]["RespuestaUsuarioId"];
 $RespuestaUsuario=$rptamo["cuerpo"][0]["RespuestaUsuario"];
 $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
 $SimulacroId=$rptamo["cuerpo"][0]["SimulacroId"];
 $titulo= "Actualizar respuestausuario";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_respuestausuario.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>