<div id="divActualizar_docvigencia">
<form id="frmActualizar_docvigencia" name="frmRegistrar_docvigencia" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docvigencia</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="dFecha_">dFecha : </label><input type="text" name="dFecha_" id="dFecha_" value="<?php echo $dFecha;?>"/></fieldset>
<fieldset><label for="dFechaFin_">dFechaFin : </label><input type="text" name="dFechaFin_" id="dFechaFin_" value="<?php echo $dFechaFin;?>"/></fieldset>
<fieldset><label for="dHora_">dHora : </label><input type="text" name="dHora_" id="dHora_" value="<?php echo $dHora;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>