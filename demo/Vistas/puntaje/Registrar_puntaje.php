<div id="divRegistrar_puntaje">
<form id="frmRegistrar_puntaje" name="frmRegistrar_puntaje" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Puntaje</legend>
<fieldset><label for="PuntajeId_">PuntajeId : </label><input type="text" name="PuntajeId_" id="PuntajeId_" value=""/></fieldset>
<fieldset><label for="PuntajeTotal_">PuntajeTotal : </label><input type="text" name="PuntajeTotal_" id="PuntajeTotal_" value=""/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value=""/></fieldset>
<fieldset><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>