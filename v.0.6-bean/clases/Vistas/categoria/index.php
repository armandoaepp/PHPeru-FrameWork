<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_categoria.php"; 
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
  $titulo= "Nuevo categoria";
  $rpta=CRegistrar_categoria();
  $contenido="Registrar_categoria.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_categoria();
  $rptamo=CBuscar_categoria($_GET["id"]);
  $idcategoria=$rptamo["cuerpo"][0]["idcategoria"];
  $categoria=$rptamo["cuerpo"][0]["categoria"];
  $contenido="Actualizar_categoria.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_categoria();
  header("Location: ../categoria");
break;
case "Recuperar":
  $rpta=CRecuperar_categoria();
break;
case "Listar":
       $titulo="Listar categoria";
       $data=CListar_categoria();
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
      $Listar_categoria=$cix->ImprimeTableP("tablacategoria",$data,"?","?",10,$page,5);
   // $Listar_categoria=$cix->ImprimeTablePOB("tablacategoria",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_categoria.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_categoria=CListadoSimple_categoria();
break;
case "Buscar":
 $rpta=CBuscar_categoria();
break;
case "Nuevo":
 $titulo= "Nuevo categoria";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_categoria.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_categoria($_GET["id"]);
 $idcategoria=$rptamo["cuerpo"][0]["idcategoria"];
 $categoria=$rptamo["cuerpo"][0]["categoria"];
 $titulo= "Actualizar categoria";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_categoria.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>