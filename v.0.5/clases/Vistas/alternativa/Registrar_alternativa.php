<?php 

	include_once("../simulacro/Controlador_simulacro.php");   
	include_once("../texto/Controlador_texto.php");   
	include_once("../cixfrm.php");
	$frm = new CixFRM();  
?>
<div id="divRegistrar_pregunta">
  <form id="frmRegistrar_pregunta" name="frmRegistrar_pregunta" class="hform" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Pregunta</legend>
      <fieldset>
        <label for="SimulacroId_">Simulacro : </label>
        <!-- <input type="text" name="SimulacroId_" id="SimulacroId_" value=""/> -->
        <select id="SimulacroId_" name="SimulacroId_" required="required" >
          <?php 

          $data=CListadoSimple_simulacro(); 
           $select=$frm->ImprimeCuerpoSelect($data,"SimulacroId", "SimulacroNombre");
           echo $select;
        ?>
        </select>
      </fieldset>
      <fieldset>
        <label for="PreguntaNumero_">Numero : </label>
        <input type="text" name="PreguntaNumero_" id="PreguntaNumero_" value=""/>
      </fieldset>
      <fieldset>
        <label for="Pregunta_">Pregunta : </label>
        <input type="text" name="Pregunta_" id="Pregunta_" value=""/>
      </fieldset>
      <fieldset><label for="AlternativaA_">A : </label><input type="text" name="AlternativaA_" id="AlternativaA_" value=""/></fieldset>
	<fieldset><label for="AlternativaB_">B : </label><input type="text" name="AlternativaB_" id="AlternativaB_" value=""/></fieldset>
	<fieldset><label for="AlternativaC_">C : </label><input type="text" name="AlternativaC_" id="AlternativaC_" value=""/></fieldset>
	<fieldset><label for="AlternativaD_">D : </label><input type="text" name="AlternativaD_" id="AlternativaD_" value=""/></fieldset>
	<fieldset><label for="AlternativaE_">E : </label><input type="text" name="AlternativaE_" id="AlternativaE_" value=""/></fieldset>
	<p class="borderbotton"></p>
	<fieldset>
		<label for="AlternativaE_">Titulo de Texto :</label>
		<select id="TextoId_" name="TextoId_"  >
		    <?php 
		      $dataT=CListadoSimple_texto(); 
		      $selectT=$frm->ImprimeCuerpoSelect($dataT,"TextoId", "TextoTitulo");
		      echo $selectT;
		    ?>
	   	</select>
	</fieldset>     
      <fieldset class="text-right">
        <button type="submit"  id="btregistrar">Registrar </button>
        <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button>
      </fieldset>
    </fieldset>
  </form>
</div>