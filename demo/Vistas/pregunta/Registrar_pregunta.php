<div id="divRegistrar_pregunta">
<form id="frmRegistrar_pregunta" name="frmRegistrar_pregunta" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pregunta</legend>
<fieldset><label for="PreguntaId_">PreguntaId : </label><input type="text" name="PreguntaId_" id="PreguntaId_" value=""/></fieldset>
<fieldset><label for="PreguntaNumero_">PreguntaNumero : </label><input type="text" name="PreguntaNumero_" id="PreguntaNumero_" value=""/></fieldset>
<fieldset><label for="Pregunta_">Pregunta : </label><input type="text" name="Pregunta_" id="Pregunta_" value=""/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>