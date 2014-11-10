<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_operador.php"; 
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
  $titulo= "Nuevo operador";
  $rpta=CRegistrar_operador();
  $contenido="Registrar_operador.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_operador();
  $rptamo=CBuscar_operador($_GET["id"]);
  $idoperador=$rptamo["cuerpo"][0]["idoperador"];
  $nombre=$rptamo["cuerpo"][0]["nombre"];
  $nom_operador=$rptamo["cuerpo"][0]["nom_operador"];
  $pass_operador=$rptamo["cuerpo"][0]["pass_operador"];
  $telefono1=$rptamo["cuerpo"][0]["telefono1"];
  $telefono2=$rptamo["cuerpo"][0]["telefono2"];
  $telefono3=$rptamo["cuerpo"][0]["telefono3"];
  $codubigeo=$rptamo["cuerpo"][0]["codubigeo"];
  $fechareg=$rptamo["cuerpo"][0]["fechareg"];
  $idtransp=$rptamo["cuerpo"][0]["idtransp"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $superusuario=$rptamo["cuerpo"][0]["superusuario"];
  $contenido="Actualizar_operador.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_operador();
  header("Location: ../operador");
break;
case "Recuperar":
  $rpta=CRecuperar_operador();
break;
case "Listar":
       $titulo="Listar operador";
       $data=CListar_operador();
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
      $Listar_operador=$cix->ImprimeTableP("tablaoperador",$data,"?","?",10,$page,5);
   // $Listar_operador=$cix->ImprimeTablePOB("tablaoperador",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_operador.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_operador=CListadoSimple_operador();
break;
case "Buscar":
 $rpta=CBuscar_operador();
break;
case "Nuevo":
 $titulo= "Nuevo operador";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_operador.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_operador($_GET["id"]);
 $idoperador=$rptamo["cuerpo"][0]["idoperador"];
 $nombre=$rptamo["cuerpo"][0]["nombre"];
 $nom_operador=$rptamo["cuerpo"][0]["nom_operador"];
 $pass_operador=$rptamo["cuerpo"][0]["pass_operador"];
 $telefono1=$rptamo["cuerpo"][0]["telefono1"];
 $telefono2=$rptamo["cuerpo"][0]["telefono2"];
 $telefono3=$rptamo["cuerpo"][0]["telefono3"];
 $codubigeo=$rptamo["cuerpo"][0]["codubigeo"];
 $fechareg=$rptamo["cuerpo"][0]["fechareg"];
 $idtransp=$rptamo["cuerpo"][0]["idtransp"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $superusuario=$rptamo["cuerpo"][0]["superusuario"];
 $titulo= "Actualizar operador";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_operador.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>