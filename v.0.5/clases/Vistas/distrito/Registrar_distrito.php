<div id="divRegistrar_distrito">
<form id="frmRegistrar_distrito" name="frmRegistrar_distrito" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Distrito</legend>
<fieldset><label for="nDisCodigo_">nDisCodigo : </label><input type="text" name="nDisCodigo_" id="nDisCodigo_" value=""/></fieldset>
<fieldset><label for="cDisDescripcion_">cDisDescripcion : </label><input type="text" name="cDisDescripcion_" id="cDisDescripcion_" value=""/></fieldset>
<fieldset><label for="nProCodigo_">nProCodigo : </label><input type="text" name="nProCodigo_" id="nProCodigo_" value=""/></fieldset>
<fieldset><label for="nDisEstado_">nDisEstado : </label><input type="text" name="nDisEstado_" id="nDisEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>