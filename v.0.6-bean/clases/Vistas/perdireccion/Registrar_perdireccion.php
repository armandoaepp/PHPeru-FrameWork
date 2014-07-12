<div id="divRegistrar_perdireccion">
<form id="frmRegistrar_perdireccion" name="frmRegistrar_perdireccion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Perdireccion</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nUbiCodigo_">nUbiCodigo : </label><input type="text" name="nUbiCodigo_" id="nUbiCodigo_" value=""/></fieldset>
<fieldset><label for="nPerDirTipo_">nPerDirTipo : </label><input type="text" name="nPerDirTipo_" id="nPerDirTipo_" value=""/></fieldset>
<fieldset><label for="cPerDirDescripcion_">cPerDirDescripcion : </label><input type="text" name="cPerDirDescripcion_" id="cPerDirDescripcion_" value=""/></fieldset>
<fieldset><label for="cPerDirGlosa_">cPerDirGlosa : </label><input type="text" name="cPerDirGlosa_" id="cPerDirGlosa_" value=""/></fieldset>
<fieldset><label for="nPerDirEstado_">nPerDirEstado : </label><input type="text" name="nPerDirEstado_" id="nPerDirEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>