<div id="divActualizar_simulacro">
<form id="frmActualizar_simulacro" name="frmRegistrar_simulacro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Simulacro</legend>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value="<?php echo $SimulacroId;?>"/></fieldset>
<fieldset><label for="SimulacroNumero_">SimulacroNumero : </label><input type="text" name="SimulacroNumero_" id="SimulacroNumero_" value="<?php echo $SimulacroNumero;?>"/></fieldset>
<fieldset><label for="SimulacroNombre_">SimulacroNombre : </label><input type="text" name="SimulacroNombre_" id="SimulacroNombre_" value="<?php echo $SimulacroNombre;?>"/></fieldset>
<fieldset><label for="SimulacroEstado_">SimulacroEstado : </label><input type="text" name="SimulacroEstado_" id="SimulacroEstado_" value="<?php echo $SimulacroEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>