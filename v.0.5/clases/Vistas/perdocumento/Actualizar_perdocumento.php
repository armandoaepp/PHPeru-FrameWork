<div id="divActualizar_perdocumento">
<form id="frmActualizar_perdocumento" name="frmRegistrar_perdocumento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perdocumento</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerDocTipo_">nPerDocTipo : </label><input type="text" name="nPerDocTipo_" id="nPerDocTipo_" value="<?php echo $nPerDocTipo;?>"/></fieldset>
<fieldset><label for="cPerDocNumero_">cPerDocNumero : </label><input type="text" name="cPerDocNumero_" id="cPerDocNumero_" value="<?php echo $cPerDocNumero;?>"/></fieldset>
<fieldset><label for="dPerDocCaducidad_">dPerDocCaducidad : </label><input type="text" name="dPerDocCaducidad_" id="dPerDocCaducidad_" value="<?php echo $dPerDocCaducidad;?>"/></fieldset>
<fieldset><label for="nPerDocCategoria_">nPerDocCategoria : </label><input type="text" name="nPerDocCategoria_" id="nPerDocCategoria_" value="<?php echo $nPerDocCategoria;?>"/></fieldset>
<fieldset><label for="nPerDocEstado_">nPerDocEstado : </label><input type="text" name="nPerDocEstado_" id="nPerDocEstado_" value="<?php echo $nPerDocEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>