<div id="divActualizar_departamento">
<form id="frmActualizar_departamento" name="frmRegistrar_departamento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Departamento</legend>
<fieldset><label for="nDepCodigo_">nDepCodigo : </label><input type="text" name="nDepCodigo_" id="nDepCodigo_" value="<?php echo $nDepCodigo;?>"/></fieldset>
<fieldset><label for="cDepDescripcion_">cDepDescripcion : </label><input type="text" name="cDepDescripcion_" id="cDepDescripcion_" value="<?php echo $cDepDescripcion;?>"/></fieldset>
<fieldset><label for="nPaiCodigo_">nPaiCodigo : </label><input type="text" name="nPaiCodigo_" id="nPaiCodigo_" value="<?php echo $nPaiCodigo;?>"/></fieldset>
<fieldset><label for="nDepEstado_">nDepEstado : </label><input type="text" name="nDepEstado_" id="nDepEstado_" value="<?php echo $nDepEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>