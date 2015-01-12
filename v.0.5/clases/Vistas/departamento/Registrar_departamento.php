<div id="divRegistrar_departamento">
<form id="frmRegistrar_departamento" name="frmRegistrar_departamento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Departamento</legend>
<fieldset><label for="nDepCodigo_">nDepCodigo : </label><input type="text" name="nDepCodigo_" id="nDepCodigo_" value=""/></fieldset>
<fieldset><label for="cDepDescripcion_">cDepDescripcion : </label><input type="text" name="cDepDescripcion_" id="cDepDescripcion_" value=""/></fieldset>
<fieldset><label for="nPaiCodigo_">nPaiCodigo : </label><input type="text" name="nPaiCodigo_" id="nPaiCodigo_" value=""/></fieldset>
<fieldset><label for="nDepEstado_">nDepEstado : </label><input type="text" name="nDepEstado_" id="nDepEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>