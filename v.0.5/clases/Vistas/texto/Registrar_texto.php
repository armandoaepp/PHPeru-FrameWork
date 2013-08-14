<div id="divRegistrar_texto">
<form id="frmRegistrar_texto" name="frmRegistrar_texto" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Texto</legend>
<fieldset><label for="TextoId_">TextoId : </label><input type="text" name="TextoId_" id="TextoId_" value=""/></fieldset>
<fieldset><label for="TextoTitulo_">TextoTitulo : </label><input type="text" name="TextoTitulo_" id="TextoTitulo_" value=""/></fieldset>
<fieldset><label for="Texto_">Texto : </label><input type="text" name="Texto_" id="Texto_" value=""/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value=""/></fieldset>
<fieldset><label for="TextoEstado_">TextoEstado : </label><input type="text" name="TextoEstado_" id="TextoEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>