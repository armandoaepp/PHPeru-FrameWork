<div id="divActualizar_respuestausuario">
<form id="frmActualizar_respuestausuario" name="frmRegistrar_respuestausuario" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Respuestausuario</legend>
<fieldset><label for="RespuestaUsuarioId_">RespuestaUsuarioId : </label><input type="text" name="RespuestaUsuarioId_" id="RespuestaUsuarioId_" value="<?php echo $RespuestaUsuarioId;?>"/></fieldset>
<fieldset><label for="RespuestaUsuario_">RespuestaUsuario : </label><input type="text" name="RespuestaUsuario_" id="RespuestaUsuario_" value="<?php echo $RespuestaUsuario;?>"/></fieldset>
<fieldset><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value="<?php echo $UsuarioId;?>"/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value="<?php echo $SimulacroId;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>