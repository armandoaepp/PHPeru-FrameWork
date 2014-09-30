<div id="divRegistrar_tipopago">
<form id="frmRegistrar_tipopago" name="frmRegistrar_tipopago" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Tipopago</legend>
<fieldset><label for="id_tipo_pago_">id_tipo_pago : </label><input type="text" name="id_tipo_pago_" id="id_tipo_pago_" value=""/></fieldset>
<fieldset><label for="tipo_pago_">tipo_pago : </label><input type="text" name="tipo_pago_" id="tipo_pago_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>