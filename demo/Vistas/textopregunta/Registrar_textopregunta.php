<div id="divRegistrar_textopregunta">
<form id="frmRegistrar_textopregunta" name="frmRegistrar_textopregunta" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Textopregunta</legend>
<fieldset><label for="TextoPreguntaId_">TextoPreguntaId : </label><input type="text" name="TextoPreguntaId_" id="TextoPreguntaId_" value=""/></fieldset>
<fieldset><label for="PreguntaId_">PreguntaId : </label><input type="text" name="PreguntaId_" id="PreguntaId_" value=""/></fieldset>
<fieldset><label for="TextoId_">TextoId : </label><input type="text" name="TextoId_" id="TextoId_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>