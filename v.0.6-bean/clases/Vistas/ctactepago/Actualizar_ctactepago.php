<div id="divActualizar_ctactepago">
<form id="frmActualizar_ctactepago" name="frmRegistrar_ctactepago" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Ctactepago</legend>
<fieldset><label for="cCtaCteRecibo_">cCtaCteRecibo : </label><input type="text" name="cCtaCteRecibo_" id="cCtaCteRecibo_" value="<?php echo $cCtaCteRecibo;?>"/></fieldset>
<fieldset><label for="nCtaCtePagCodigo_">nCtaCtePagCodigo : </label><input type="text" name="nCtaCtePagCodigo_" id="nCtaCtePagCodigo_" value="<?php echo $nCtaCtePagCodigo;?>"/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerCtaCodigo_">nPerCtaCodigo : </label><input type="text" name="nPerCtaCodigo_" id="nPerCtaCodigo_" value="<?php echo $nPerCtaCodigo;?>"/></fieldset>
<fieldset><label for="nTurno_">nTurno : </label><input type="text" name="nTurno_" id="nTurno_" value="<?php echo $nTurno;?>"/></fieldset>
<fieldset><label for="nForPago_">nForPago : </label><input type="text" name="nForPago_" id="nForPago_" value="<?php echo $nForPago;?>"/></fieldset>
<fieldset><label for="nTipPago_">nTipPago : </label><input type="text" name="nTipPago_" id="nTipPago_" value="<?php echo $nTipPago;?>"/></fieldset>
<fieldset><label for="cCtaCtePagNroOperacion_">cCtaCtePagNroOperacion : </label><input type="text" name="cCtaCtePagNroOperacion_" id="cCtaCtePagNroOperacion_" value="<?php echo $cCtaCtePagNroOperacion;?>"/></fieldset>
<fieldset><label for="dCtaCtePagfecha_">dCtaCtePagfecha : </label><input type="text" name="dCtaCtePagfecha_" id="dCtaCtePagfecha_" value="<?php echo $dCtaCtePagfecha;?>"/></fieldset>
<fieldset><label for="CtaCtePagGlosa_">CtaCtePagGlosa : </label><input type="text" name="CtaCtePagGlosa_" id="CtaCtePagGlosa_" value="<?php echo $CtaCtePagGlosa;?>"/></fieldset>
<fieldset><label for="fCtaCtePagImporte_">fCtaCtePagImporte : </label><input type="text" name="fCtaCtePagImporte_" id="fCtaCtePagImporte_" value="<?php echo $fCtaCtePagImporte;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>