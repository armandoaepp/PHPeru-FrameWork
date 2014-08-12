<div id="divActualizar_distrito">
<form id="frmActualizar_distrito" name="frmRegistrar_distrito" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Distrito</legend>
<fieldset><label for="nDisCodigo_">nDisCodigo : </label><input type="text" name="nDisCodigo_" id="nDisCodigo_" value="<?php echo $nDisCodigo;?>"/></fieldset>
<fieldset><label for="cDisDescripcion_">cDisDescripcion : </label><input type="text" name="cDisDescripcion_" id="cDisDescripcion_" value="<?php echo $cDisDescripcion;?>"/></fieldset>
<fieldset><label for="nProCodigo_">nProCodigo : </label><input type="text" name="nProCodigo_" id="nProCodigo_" value="<?php echo $nProCodigo;?>"/></fieldset>
<fieldset><label for="cDisUbiCodigo_">cDisUbiCodigo : </label><input type="text" name="cDisUbiCodigo_" id="cDisUbiCodigo_" value="<?php echo $cDisUbiCodigo;?>"/></fieldset>
<fieldset><label for="nDisEstado_">nDisEstado : </label><input type="text" name="nDisEstado_" id="nDisEstado_" value="<?php echo $nDisEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>