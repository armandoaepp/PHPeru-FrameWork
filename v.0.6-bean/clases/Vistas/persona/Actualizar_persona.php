<div id="divActualizar_persona">
<form id="frmActualizar_persona" name="frmRegistrar_persona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Persona</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="cPerNombre_">cPerNombre : </label><input type="text" name="cPerNombre_" id="cPerNombre_" value="<?php echo $cPerNombre;?>"/></fieldset>
<fieldset><label for="cPerApellidos_">cPerApellidos : </label><input type="text" name="cPerApellidos_" id="cPerApellidos_" value="<?php echo $cPerApellidos;?>"/></fieldset>
<fieldset><label for="dPerNacimiento_">dPerNacimiento : </label><input type="text" name="dPerNacimiento_" id="dPerNacimiento_" value="<?php echo $dPerNacimiento;?>"/></fieldset>
<fieldset><label for="nPerTipo_">nPerTipo : </label><input type="text" name="nPerTipo_" id="nPerTipo_" value="<?php echo $nPerTipo;?>"/></fieldset>
<fieldset><label for="nPerEstado_">nPerEstado : </label><input type="text" name="nPerEstado_" id="nPerEstado_" value="<?php echo $nPerEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>