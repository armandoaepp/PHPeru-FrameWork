<div id="divActualizar_ctactecomprobante">
<form id="frmActualizar_ctactecomprobante" name="frmRegistrar_ctactecomprobante" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Ctactecomprobante</legend>
<fieldset><label for="cCtaCteRecibo_">cCtaCteRecibo : </label><input type="text" name="cCtaCteRecibo_" id="cCtaCteRecibo_" value="<?php echo $cCtaCteRecibo;?>"/></fieldset>
<fieldset><label for="nCtaCteComCodigo_">nCtaCteComCodigo : </label><input type="text" name="nCtaCteComCodigo_" id="nCtaCteComCodigo_" value="<?php echo $nCtaCteComCodigo;?>"/></fieldset>
<fieldset><label for="cCtaCteComNumero_">cCtaCteComNumero : </label><input type="text" name="cCtaCteComNumero_" id="cCtaCteComNumero_" value="<?php echo $cCtaCteComNumero;?>"/></fieldset>
<fieldset><label for="nCtaCteTipoPago_">nCtaCteTipoPago : </label><input type="text" name="nCtaCteTipoPago_" id="nCtaCteTipoPago_" value="<?php echo $nCtaCteTipoPago;?>"/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>