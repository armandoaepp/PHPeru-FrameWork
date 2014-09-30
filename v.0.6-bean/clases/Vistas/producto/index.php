<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_producto.php"; 
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
  $titulo= "Nuevo producto";
  $rpta=CRegistrar_producto();
  $contenido="Registrar_producto.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_producto();
  $rptamo=CBuscar_producto($_GET["id"]);
  $idproducto=$rptamo["cuerpo"][0]["idproducto"];
  $producto=$rptamo["cuerpo"][0]["producto"];
  $idcategoria=$rptamo["cuerpo"][0]["idcategoria"];
  $contenido="Actualizar_producto.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_producto();
  header("Location: ../producto");
break;
case "Recuperar":
  $rpta=CRecuperar_producto();
break;
case "Listar":
       $titulo="Listar producto";
       $data=CListar_producto();
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
      $Listar_producto=$cix->ImprimeTableP("tablaproducto",$data,"?","?",10,$page,5);
   // $Listar_producto=$cix->ImprimeTablePOB("tablaproducto",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_producto.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_producto=CListadoSimple_producto();
break;
case "Buscar":
 $rpta=CBuscar_producto();
break;
case "Nuevo":
 $titulo= "Nuevo producto";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_producto.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_producto($_GET["id"]);
 $idproducto=$rptamo["cuerpo"][0]["idproducto"];
 $producto=$rptamo["cuerpo"][0]["producto"];
 $idcategoria=$rptamo["cuerpo"][0]["idcategoria"];
 $titulo= "Actualizar producto";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_producto.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>