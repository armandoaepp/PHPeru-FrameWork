<div id="divRegistrar_pertelefono">
<form id="frmRegistrar_pertelefono" name="frmRegistrar_pertelefono" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pertelefono</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nPerTelTipo_">nPerTelTipo : </label><input type="text" name="nPerTelTipo_" id="nPerTelTipo_" value=""/></fieldset>
<fieldset><label for="nPerTelItem_">nPerTelItem : </label><input type="text" name="nPerTelItem_" id="nPerTelItem_" value=""/></fieldset>
<fieldset><label for="cPerTelNumero_">cPerTelNumero : </label><input type="text" name="cPerTelNumero_" id="cPerTelNumero_" value=""/></fieldset>
<fieldset><label for="nPerTelEstado_">nPerTelEstado : </label><input type="text" name="nPerTelEstado_" id="nPerTelEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>