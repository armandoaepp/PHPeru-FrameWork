<div id="divRegistrar_usuario">
<form id="frmRegistrar_usuario" name="frmRegistrar_usuario" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Usuario</legend>
<fieldset><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></fieldset>
<fieldset><label for="UsuarioNick_">UsuarioNick : </label><input type="text" name="UsuarioNick_" id="UsuarioNick_" value=""/></fieldset>
<fieldset><label for="UsuarioPassword_">UsuarioPassword : </label><input type="text" name="UsuarioPassword_" id="UsuarioPassword_" value=""/></fieldset>
<fieldset><label for="PersonaId_">PersonaId : </label><input type="text" name="PersonaId_" id="PersonaId_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>