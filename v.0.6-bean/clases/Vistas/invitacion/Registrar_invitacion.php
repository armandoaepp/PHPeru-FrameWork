<div id="divRegistrar_invitacion">
<form id="frmRegistrar_invitacion" name="frmRegistrar_invitacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Invitacion</legend>
<fieldset><label for="idinvitacion_">idinvitacion : </label><input type="text" name="idinvitacion_" id="idinvitacion_" value=""/></fieldset>
<fieldset><label for="idcliente_">idcliente : </label><input type="text" name="idcliente_" id="idcliente_" value=""/></fieldset>
<fieldset><label for="tipocliente_">tipocliente : </label><input type="text" name="tipocliente_" id="tipocliente_" value=""/></fieldset>
<fieldset><label for="glosa_">glosa : </label><input type="text" name="glosa_" id="glosa_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>