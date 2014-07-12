<div id="divRegistrar_transaccion">
<form id="frmRegistrar_transaccion" name="frmRegistrar_transaccion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Transaccion</legend>
<fieldset><label for="cTraCodigo_">cTraCodigo : </label><input type="text" name="cTraCodigo_" id="cTraCodigo_" value=""/></fieldset>
<fieldset><label for="nOpeCodigo_">nOpeCodigo : </label><input type="text" name="nOpeCodigo_" id="nOpeCodigo_" value=""/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="dTraFecha_">dTraFecha : </label><input type="text" name="dTraFecha_" id="dTraFecha_" value=""/></fieldset>
<fieldset><label for="cComputer_">cComputer : </label><input type="text" name="cComputer_" id="cComputer_" value=""/></fieldset>
<fieldset><label for="cTraDescripcion_">cTraDescripcion : </label><input type="text" name="cTraDescripcion_" id="cTraDescripcion_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>