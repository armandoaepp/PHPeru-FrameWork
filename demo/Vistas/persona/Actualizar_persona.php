<div id="divActualizar_persona">
<form id="frmActualizar_persona" name="frmRegistrar_persona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Persona</legend>
<fieldset><label for="PersonaId_">PersonaId : </label><input type="text" name="PersonaId_" id="PersonaId_" value="<?php echo $PersonaId;?>"/></fieldset>
<fieldset><label for="PersonaApellido_">PersonaApellido : </label><input type="text" name="PersonaApellido_" id="PersonaApellido_" value="<?php echo $PersonaApellido;?>"/></fieldset>
<fieldset><label for="PersonaNombre_">PersonaNombre : </label><input type="text" name="PersonaNombre_" id="PersonaNombre_" value="<?php echo $PersonaNombre;?>"/></fieldset>
<fieldset><label for="PersonaEmail_">PersonaEmail : </label><input type="text" name="PersonaEmail_" id="PersonaEmail_" value="<?php echo $PersonaEmail;?>"/></fieldset>
<fieldset><label for="PersonaTelefono_">PersonaTelefono : </label><input type="text" name="PersonaTelefono_" id="PersonaTelefono_" value="<?php echo $PersonaTelefono;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>