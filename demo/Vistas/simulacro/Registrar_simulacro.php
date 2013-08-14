<div id="divRegistrar_simulacro">
<form id="frmRegistrar_simulacro" name="frmRegistrar_simulacro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Simulacro</legend>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value=""/></fieldset>
<fieldset><label for="SimulacroNumero_">SimulacroNumero : </label><input type="text" name="SimulacroNumero_" id="SimulacroNumero_" value=""/></fieldset>
<fieldset><label for="SimulacroNombre_">SimulacroNombre : </label><input type="text" name="SimulacroNombre_" id="SimulacroNombre_" value=""/></fieldset>
<fieldset><label for="SimulacroEstado_">SimulacroEstado : </label><input type="text" name="SimulacroEstado_" id="SimulacroEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>