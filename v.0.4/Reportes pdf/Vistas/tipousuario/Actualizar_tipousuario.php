<div id="divActualizar_tipousuario">
<form id="frmActualizar_tipousuario" name="frmRegistrar_tipousuario" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipousuario</legend>
<p><label for="TipoUsuarioId_">TipoUsuarioId : </label><input type="text" name="TipoUsuarioId_" id="TipoUsuarioId_" value="<?php echo $TipoUsuarioId;?>"/></p>
<p><label for="TipoUsuario_">TipoUsuario : </label><input type="text" name="TipoUsuario_" id="TipoUsuario_" value="<?php echo $TipoUsuario;?>"/></p>
<p><label for="TipoUsuarioEstado_">TipoUsuarioEstado : </label><input type="text" name="TipoUsuarioEstado_" id="TipoUsuarioEstado_" value="<?php echo $TipoUsuarioEstado;?>"/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>