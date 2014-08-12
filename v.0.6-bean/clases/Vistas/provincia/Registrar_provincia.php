<div id="divRegistrar_provincia">
<form id="frmRegistrar_provincia" name="frmRegistrar_provincia" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Provincia</legend>
<fieldset><label for="nProCodigo_">nProCodigo : </label><input type="text" name="nProCodigo_" id="nProCodigo_" value=""/></fieldset>
<fieldset><label for="cProDescripcion_">cProDescripcion : </label><input type="text" name="cProDescripcion_" id="cProDescripcion_" value=""/></fieldset>
<fieldset><label for="nDepCodigo_">nDepCodigo : </label><input type="text" name="nDepCodigo_" id="nDepCodigo_" value=""/></fieldset>
<fieldset><label for="cProUbiCodigo_">cProUbiCodigo : </label><input type="text" name="cProUbiCodigo_" id="cProUbiCodigo_" value=""/></fieldset>
<fieldset><label for="nProEstado_">nProEstado : </label><input type="text" name="nProEstado_" id="nProEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>