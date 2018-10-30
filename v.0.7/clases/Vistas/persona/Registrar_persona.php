<div id="divRegistrar_persona">
<form id="frmRegistrar_persona" name="frmRegistrar_persona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Persona</legend>
<fieldset><label for="idpersona_">idpersona : </label><input type="text" name="idpersona_" id="idpersona_" value=""/></fieldset>
<fieldset><label for="nombre_">nombre : </label><input type="text" name="nombre_" id="nombre_" value=""/></fieldset>
<fieldset><label for="nacimiento_">nacimiento : </label><input type="text" name="nacimiento_" id="nacimiento_" value=""/></fieldset>
<fieldset><label for="tipo_">tipo : </label><input type="text" name="tipo_" id="tipo_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>