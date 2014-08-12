<div id="divActualizar_perubigeo">
<form id="frmActualizar_perubigeo" name="frmRegistrar_perubigeo" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perubigeo</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerUbiCodigo_">nPerUbiCodigo : </label><input type="text" name="nPerUbiCodigo_" id="nPerUbiCodigo_" value="<?php echo $nPerUbiCodigo;?>"/></fieldset>
<fieldset><label for="nPerUbiGlosa_">nPerUbiGlosa : </label><input type="text" name="nPerUbiGlosa_" id="nPerUbiGlosa_" value="<?php echo $nPerUbiGlosa;?>"/></fieldset>
<fieldset><label for="nPerUbiEstado_">nPerUbiEstado : </label><input type="text" name="nPerUbiEstado_" id="nPerUbiEstado_" value="<?php echo $nPerUbiEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>