<div id="divActualizar_perrelacion">
<form id="frmActualizar_perrelacion" name="frmRegistrar_perrelacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perrelacion</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerRelTipo_">nPerRelTipo : </label><input type="text" name="nPerRelTipo_" id="nPerRelTipo_" value="<?php echo $nPerRelTipo;?>"/></fieldset>
<fieldset><label for="cPerJuridica_">cPerJuridica : </label><input type="text" name="cPerJuridica_" id="cPerJuridica_" value="<?php echo $cPerJuridica;?>"/></fieldset>
<fieldset><label for="dPerRelacion_">dPerRelacion : </label><input type="text" name="dPerRelacion_" id="dPerRelacion_" value="<?php echo $dPerRelacion;?>"/></fieldset>
<fieldset><label for="cPerObservacion_">cPerObservacion : </label><input type="text" name="cPerObservacion_" id="cPerObservacion_" value="<?php echo $cPerObservacion;?>"/></fieldset>
<fieldset><label for="nPerRelEstado_">nPerRelEstado : </label><input type="text" name="nPerRelEstado_" id="nPerRelEstado_" value="<?php echo $nPerRelEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>