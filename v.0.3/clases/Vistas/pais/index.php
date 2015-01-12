<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_pais.php"; 
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
  $titulo= "Nuevo pais";
  $rpta=CRegistrar_pais();
  $contenido="Registrar_pais.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_pais();
  $rptamo=CBuscar_pais($_GET["id"]);
  $PaisId=$rptamo["cuerpo"][0]["PaisId"];
  $PaisNombre=$rptamo["cuerpo"][0]["PaisNombre"];
  $contenido="Actualizar_pais.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_pais();
  header("Location: ../pais");
break;
case "Recuperar":
  $rpta=CRecuperar_pais();
break;
case "Listar":
       $titulo="Listar pais";
       $data=CListar_pais();
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
      $Listar_pais=$cix->ImprimeTableP("tablapais",$data,"?","?",10,$page,5);
   // $Listar_pais=$cix->ImprimeTablePOB("tablapais",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_pais.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_pais=CListadoSimple_pais();
break;
case "Buscar":
 $rpta=CBuscar_pais();
break;
case "Nuevo":
 $titulo= "Nuevo pais";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_pais.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_pais($_GET["id"]);
 $PaisId=$rptamo["cuerpo"][0]["PaisId"];
 $PaisNombre=$rptamo["cuerpo"][0]["PaisNombre"];
 $titulo= "Actualizar pais";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_pais.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>