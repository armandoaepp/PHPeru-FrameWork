<div id="divActualizar_perdireccion">
<form id="frmActualizar_perdireccion" name="frmRegistrar_perdireccion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perdireccion</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nUbiCodigo_">nUbiCodigo : </label><input type="text" name="nUbiCodigo_" id="nUbiCodigo_" value="<?php echo $nUbiCodigo;?>"/></fieldset>
<fieldset><label for="nPerDirTipo_">nPerDirTipo : </label><input type="text" name="nPerDirTipo_" id="nPerDirTipo_" value="<?php echo $nPerDirTipo;?>"/></fieldset>
<fieldset><label for="cPerDirDescripcion_">cPerDirDescripcion : </label><input type="text" name="cPerDirDescripcion_" id="cPerDirDescripcion_" value="<?php echo $cPerDirDescripcion;?>"/></fieldset>
<fieldset><label for="cPerDirGlosa_">cPerDirGlosa : </label><input type="text" name="cPerDirGlosa_" id="cPerDirGlosa_" value="<?php echo $cPerDirGlosa;?>"/></fieldset>
<fieldset><label for="nPerDirEstado_">nPerDirEstado : </label><input type="text" name="nPerDirEstado_" id="nPerDirEstado_" value="<?php echo $nPerDirEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>