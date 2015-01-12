<div id="divActualizar_texto">
<form id="frmActualizar_texto" name="frmRegistrar_texto" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Texto</legend>
<fieldset><label for="TextoId_">TextoId : </label><input type="text" name="TextoId_" id="TextoId_" value="<?php echo $TextoId;?>"/></fieldset>
<fieldset><label for="TextoTitulo_">TextoTitulo : </label><input type="text" name="TextoTitulo_" id="TextoTitulo_" value="<?php echo $TextoTitulo;?>"/></fieldset>
<fieldset><label for="Texto_">Texto : </label><input type="text" name="Texto_" id="Texto_" value="<?php echo $Texto;?>"/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label>
	<textarea name="SimulacroId_" id="SimulacroId_"> <?php echo $SimulacroId;?></textarea> </fieldset>
<fieldset><label for="TextoEstado_">TextoEstado : </label><input type="text" name="TextoEstado_" id="TextoEstado_" value="<?php echo $TextoEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>