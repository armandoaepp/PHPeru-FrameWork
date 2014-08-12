<div id="divActualizar_ctactedetalle">
<form id="frmActualizar_ctactedetalle" name="frmRegistrar_ctactedetalle" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Ctactedetalle</legend>
<fieldset><label for="cCtaCteRecibo_">cCtaCteRecibo : </label><input type="text" name="cCtaCteRecibo_" id="cCtaCteRecibo_" value="<?php echo $cCtaCteRecibo;?>"/></fieldset>
<fieldset><label for="Item_">Item : </label><input type="text" name="Item_" id="Item_" value="<?php echo $Item;?>"/></fieldset>
<fieldset><label for="nSerCodigo_">nSerCodigo : </label><input type="text" name="nSerCodigo_" id="nSerCodigo_" value="<?php echo $nSerCodigo;?>"/></fieldset>
<fieldset><label for="nCtaCteCantidad_">nCtaCteCantidad : </label><input type="text" name="nCtaCteCantidad_" id="nCtaCteCantidad_" value="<?php echo $nCtaCteCantidad;?>"/></fieldset>
<fieldset><label for="nMoneda_">nMoneda : </label><input type="text" name="nMoneda_" id="nMoneda_" value="<?php echo $nMoneda;?>"/></fieldset>
<fieldset><label for="fCtaCteTC_">fCtaCteTC : </label><input type="text" name="fCtaCteTC_" id="fCtaCteTC_" value="<?php echo $fCtaCteTC;?>"/></fieldset>
<fieldset><label for="fCtaCteIGV_">fCtaCteIGV : </label><input type="text" name="fCtaCteIGV_" id="fCtaCteIGV_" value="<?php echo $fCtaCteIGV;?>"/></fieldset>
<fieldset><label for="fCtaCteDetimporte_">fCtaCteDetimporte : </label><input type="text" name="fCtaCteDetimporte_" id="fCtaCteDetimporte_" value="<?php echo $fCtaCteDetimporte;?>"/></fieldset>
<fieldset><label for="dCtaCteDetRegistro_">dCtaCteDetRegistro : </label><input type="text" name="dCtaCteDetRegistro_" id="dCtaCteDetRegistro_" value="<?php echo $dCtaCteDetRegistro;?>"/></fieldset>
<fieldset><label for="nBieRegCodigo_">nBieRegCodigo : </label><input type="text" name="nBieRegCodigo_" id="nBieRegCodigo_" value="<?php echo $nBieRegCodigo;?>"/></fieldset>
<fieldset><label for="nCtaCtedetEstado_">nCtaCtedetEstado : </label><input type="text" name="nCtaCtedetEstado_" id="nCtaCtedetEstado_" value="<?php echo $nCtaCtedetEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>