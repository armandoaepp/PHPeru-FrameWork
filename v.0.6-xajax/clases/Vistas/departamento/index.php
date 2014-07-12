<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_departamento.php"; 
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
  $titulo= "Nuevo departamento";
  $rpta=CRegistrar_departamento();
  $contenido="Registrar_departamento.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_departamento();
  $rptamo=CBuscar_departamento($_GET["id"]);
  $DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];
  $DepartamentoNombre=$rptamo["cuerpo"][0]["DepartamentoNombre"];
  $PaisId=$rptamo["cuerpo"][0]["PaisId"];
  $UbigeoDepa=$rptamo["cuerpo"][0]["UbigeoDepa"];
  $contenido="Actualizar_departamento.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_departamento();
  header("Location: ../departamento");
break;
case "Recuperar":
  $rpta=CRecuperar_departamento();
break;
case "Listar":
       $titulo="Listar departamento";
       $data=CListar_departamento();
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
      $Listar_departamento=$cix->ImprimeTableP("tabladepartamento",$data,"?","?",10,$page,5);
   // $Listar_departamento=$cix->ImprimeTablePOB("tabladepartamento",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_departamento.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_departamento=CListadoSimple_departamento();
break;
case "Buscar":
 $rpta=CBuscar_departamento();
break;
case "Nuevo":
 $titulo= "Nuevo departamento";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_departamento.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_departamento($_GET["id"]);
 $DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];
 $DepartamentoNombre=$rptamo["cuerpo"][0]["DepartamentoNombre"];
 $PaisId=$rptamo["cuerpo"][0]["PaisId"];
 $UbigeoDepa=$rptamo["cuerpo"][0]["UbigeoDepa"];
 $titulo= "Actualizar departamento";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_departamento.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>