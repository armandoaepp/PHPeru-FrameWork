<div id="divRegistrar_persona">
<form id="frmRegistrar_persona" name="frmRegistrar_persona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Persona</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="cPerNombre_">cPerNombre : </label><input type="text" name="cPerNombre_" id="cPerNombre_" value=""/></fieldset>
<fieldset><label for="cPerApellidos_">cPerApellidos : </label><input type="text" name="cPerApellidos_" id="cPerApellidos_" value=""/></fieldset>
<fieldset><label for="dPerNacimiento_">dPerNacimiento : </label><input type="text" name="dPerNacimiento_" id="dPerNacimiento_" value=""/></fieldset>
<fieldset><label for="nPerTipo_">nPerTipo : </label><input type="text" name="nPerTipo_" id="nPerTipo_" value=""/></fieldset>
<fieldset><label for="nPerEstado_">nPerEstado : </label><input type="text" name="nPerEstado_" id="nPerEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>