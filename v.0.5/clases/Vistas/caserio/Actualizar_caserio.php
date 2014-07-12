<div id="divActualizar_caserio">
<form id="frmActualizar_caserio" name="frmRegistrar_caserio" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Caserio</legend>
<fieldset><label for="nCasCodigo_">nCasCodigo : </label><input type="text" name="nCasCodigo_" id="nCasCodigo_" value="<?php echo $nCasCodigo;?>"/></fieldset>
<fieldset><label for="cCasDescripcion_">cCasDescripcion : </label><input type="text" name="cCasDescripcion_" id="cCasDescripcion_" value="<?php echo $cCasDescripcion;?>"/></fieldset>
<fieldset><label for="nDisCodigo_">nDisCodigo : </label><input type="text" name="nDisCodigo_" id="nDisCodigo_" value="<?php echo $nDisCodigo;?>"/></fieldset>
<fieldset><label for="nCasEstado_">nCasEstado : </label><input type="text" name="nCasEstado_" id="nCasEstado_" value="<?php echo $nCasEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>