<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_usuario.php"; 
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
  $titulo= "Nuevo usuario";
  $rpta=CRegistrar_usuario();
  $contenido="Registrar_usuario.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_usuario();
  $rptamo=CBuscar_usuario($_GET["id"]);
  $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
  $UsuarioNick=$rptamo["cuerpo"][0]["UsuarioNick"];
  $UsuarioPassword=$rptamo["cuerpo"][0]["UsuarioPassword"];
  $PersonaId=$rptamo["cuerpo"][0]["PersonaId"];
  $contenido="Actualizar_usuario.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_usuario();
  header("Location: ../usuario");
break;
case "Recuperar":
  $rpta=CRecuperar_usuario();
break;
case "Listar":
       $titulo="Listar usuario";
       $data=CListar_usuario();
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
      $Listar_usuario=$cix->ImprimeTableP("tablausuario",$data,"?","?",10,$page,5);
   // $Listar_usuario=$cix->ImprimeTablePOB("tablausuario",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_usuario.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_usuario=CListadoSimple_usuario();
break;
case "Buscar":
 $rpta=CBuscar_usuario();
break;
case "Nuevo":
 $titulo= "Nuevo usuario";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_usuario.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_usuario($_GET["id"]);
 $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
 $UsuarioNick=$rptamo["cuerpo"][0]["UsuarioNick"];
 $UsuarioPassword=$rptamo["cuerpo"][0]["UsuarioPassword"];
 $PersonaId=$rptamo["cuerpo"][0]["PersonaId"];
 $titulo= "Actualizar usuario";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_usuario.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>