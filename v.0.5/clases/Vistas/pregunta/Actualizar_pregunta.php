<div id="divActualizar_pregunta">
<form id="frmActualizar_pregunta" name="frmRegistrar_pregunta" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pregunta</legend>
<fieldset><label for="PreguntaId_">PreguntaId : </label><input type="text" name="PreguntaId_" id="PreguntaId_" value="<?php echo $PreguntaId;?>"/></fieldset>
<fieldset><label for="PreguntaNumero_">PreguntaNumero : </label><input type="text" name="PreguntaNumero_" id="PreguntaNumero_" value="<?php echo $PreguntaNumero;?>"/></fieldset>
<fieldset><label for="Pregunta_">Pregunta : </label><input type="text" name="Pregunta_" id="Pregunta_" value="<?php echo $Pregunta;?>"/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value="<?php echo $SimulacroId;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>