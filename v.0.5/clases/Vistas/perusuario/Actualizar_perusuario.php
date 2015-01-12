<div id="divActualizar_perusuario">
<form id="frmActualizar_perusuario" name="frmRegistrar_perusuario" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perusuario</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="cPerUsuCodigo_">cPerUsuCodigo : </label><input type="text" name="cPerUsuCodigo_" id="cPerUsuCodigo_" value="<?php echo $cPerUsuCodigo;?>"/></fieldset>
<fieldset><label for="cPerUsuClave_">cPerUsuClave : </label><input type="text" name="cPerUsuClave_" id="cPerUsuClave_" value="<?php echo $cPerUsuClave;?>"/></fieldset>
<fieldset><label for="nPerUsuEstado_">nPerUsuEstado : </label><input type="text" name="nPerUsuEstado_" id="nPerUsuEstado_" value="<?php echo $nPerUsuEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>