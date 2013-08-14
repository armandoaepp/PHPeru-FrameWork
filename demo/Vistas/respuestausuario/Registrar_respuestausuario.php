<div id="divRegistrar_respuestausuario">
<form id="frmRegistrar_respuestausuario" name="frmRegistrar_respuestausuario" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Respuestausuario</legend>
<fieldset><label for="RespuestaUsuarioId_">RespuestaUsuarioId : </label><input type="text" name="RespuestaUsuarioId_" id="RespuestaUsuarioId_" value=""/></fieldset>
<fieldset><label for="RespuestaUsuario_">RespuestaUsuario : </label><input type="text" name="RespuestaUsuario_" id="RespuestaUsuario_" value=""/></fieldset>
<fieldset><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></fieldset>
<fieldset><label for="SimulacroId_">SimulacroId : </label><input type="text" name="SimulacroId_" id="SimulacroId_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>