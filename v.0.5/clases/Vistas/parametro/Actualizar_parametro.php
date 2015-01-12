<div id="divActualizar_parametro">
<form id="frmActualizar_parametro" name="frmRegistrar_parametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Parametro</legend>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value="<?php echo $nParCodigo;?>"/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value="<?php echo $nParClase;?>"/></fieldset>
<fieldset><label for="cParJerarquia_">cParJerarquia : </label><input type="text" name="cParJerarquia_" id="cParJerarquia_" value="<?php echo $cParJerarquia;?>"/></fieldset>
<fieldset><label for="cParNombre_">cParNombre : </label><input type="text" name="cParNombre_" id="cParNombre_" value="<?php echo $cParNombre;?>"/></fieldset>
<fieldset><label for="cParDescripcion_">cParDescripcion : </label><input type="text" name="cParDescripcion_" id="cParDescripcion_" value="<?php echo $cParDescripcion;?>"/></fieldset>
<fieldset><label for="nParEstado_">nParEstado : </label><input type="text" name="nParEstado_" id="nParEstado_" value="<?php echo $nParEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>