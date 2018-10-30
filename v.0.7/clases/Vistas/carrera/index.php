<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_carrera.php"; 
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
  $titulo= "Nuevo carrera";
  $rpta=CRegistrar_carrera();
  $contenido="Registrar_carrera.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_carrera();
  $rptamo=CBuscar_carrera($_GET["id"]);
  $id=$rptamo["cuerpo"][0]["id"];
  $titulo=$rptamo["cuerpo"][0]["titulo"];
  $descripcion=$rptamo["cuerpo"][0]["descripcion"];
  $slide=$rptamo["cuerpo"][0]["slide"];
  $imagen=$rptamo["cuerpo"][0]["imagen"];
  $presentacion=$rptamo["cuerpo"][0]["presentacion"];
  $porque=$rptamo["cuerpo"][0]["porque"];
  $donde=$rptamo["cuerpo"][0]["donde"];
  $certificacion=$rptamo["cuerpo"][0]["certificacion"];
  $titulos=$rptamo["cuerpo"][0]["titulos"];
  $inversion=$rptamo["cuerpo"][0]["inversion"];
  $titulacion=$rptamo["cuerpo"][0]["titulacion"];
  $detalleduracion=$rptamo["cuerpo"][0]["detalleduracion"];
  $detalledia=$rptamo["cuerpo"][0]["detalledia"];
  $detallehorario=$rptamo["cuerpo"][0]["detallehorario"];
  $detallelugar=$rptamo["cuerpo"][0]["detallelugar"];
  $detalleprecio=$rptamo["cuerpo"][0]["detalleprecio"];
  $detalleequipos=$rptamo["cuerpo"][0]["detalleequipos"];
  $detalleconsultas=$rptamo["cuerpo"][0]["detalleconsultas"];
  $detalledirigido=$rptamo["cuerpo"][0]["detalledirigido"];
  $aquien=$rptamo["cuerpo"][0]["aquien"];
  $temas=$rptamo["cuerpo"][0]["temas"];
  $nombreseo=$rptamo["cuerpo"][0]["nombreseo"];
  $orden=$rptamo["cuerpo"][0]["orden"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $fecha=$rptamo["cuerpo"][0]["fecha"];
  $contenido="Actualizar_carrera.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_carrera();
  header("Location: ../carrera");
break;
case "Recuperar":
  $rpta=CRecuperar_carrera();
break;
case "Listar":
       $titulo="Listar carrera";
       $data=CListar_carrera();
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
      $Listar_carrera=$cix->ImprimeTableP("tablacarrera",$data,"?","?",10,$page,5);
   // $Listar_carrera=$cix->ImprimeTablePOB("tablacarrera",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_carrera.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_carrera=CListadoSimple_carrera();
break;
case "Buscar":
 $rpta=CBuscar_carrera();
break;
case "Nuevo":
 $titulo= "Nuevo carrera";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_carrera.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_carrera($_GET["id"]);
 $id=$rptamo["cuerpo"][0]["id"];
 $titulo=$rptamo["cuerpo"][0]["titulo"];
 $descripcion=$rptamo["cuerpo"][0]["descripcion"];
 $slide=$rptamo["cuerpo"][0]["slide"];
 $imagen=$rptamo["cuerpo"][0]["imagen"];
 $presentacion=$rptamo["cuerpo"][0]["presentacion"];
 $porque=$rptamo["cuerpo"][0]["porque"];
 $donde=$rptamo["cuerpo"][0]["donde"];
 $certificacion=$rptamo["cuerpo"][0]["certificacion"];
 $titulos=$rptamo["cuerpo"][0]["titulos"];
 $inversion=$rptamo["cuerpo"][0]["inversion"];
 $titulacion=$rptamo["cuerpo"][0]["titulacion"];
 $detalleduracion=$rptamo["cuerpo"][0]["detalleduracion"];
 $detalledia=$rptamo["cuerpo"][0]["detalledia"];
 $detallehorario=$rptamo["cuerpo"][0]["detallehorario"];
 $detallelugar=$rptamo["cuerpo"][0]["detallelugar"];
 $detalleprecio=$rptamo["cuerpo"][0]["detalleprecio"];
 $detalleequipos=$rptamo["cuerpo"][0]["detalleequipos"];
 $detalleconsultas=$rptamo["cuerpo"][0]["detalleconsultas"];
 $detalledirigido=$rptamo["cuerpo"][0]["detalledirigido"];
 $aquien=$rptamo["cuerpo"][0]["aquien"];
 $temas=$rptamo["cuerpo"][0]["temas"];
 $nombreseo=$rptamo["cuerpo"][0]["nombreseo"];
 $orden=$rptamo["cuerpo"][0]["orden"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $fecha=$rptamo["cuerpo"][0]["fecha"];
 $titulo= "Actualizar carrera";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_carrera.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>