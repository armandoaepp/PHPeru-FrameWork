<div id="divRegistrar_caserio">
<form id="frmRegistrar_caserio" name="frmRegistrar_caserio" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Caserio</legend>
<fieldset><label for="nCasCodigo_">nCasCodigo : </label><input type="text" name="nCasCodigo_" id="nCasCodigo_" value=""/></fieldset>
<fieldset><label for="cCasDescripcion_">cCasDescripcion : </label><input type="text" name="cCasDescripcion_" id="cCasDescripcion_" value=""/></fieldset>
<fieldset><label for="nDisCodigo_">nDisCodigo : </label><input type="text" name="nDisCodigo_" id="nDisCodigo_" value=""/></fieldset>
<fieldset><label for="nCasEstado_">nCasEstado : </label><input type="text" name="nCasEstado_" id="nCasEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>