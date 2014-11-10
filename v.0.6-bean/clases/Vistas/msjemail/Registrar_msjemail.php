<div id="divRegistrar_msjemail">
<form id="frmRegistrar_msjemail" name="frmRegistrar_msjemail" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Msjemail</legend>
<fieldset><label for="idmsjemail_">idmsjemail : </label><input type="text" name="idmsjemail_" id="idmsjemail_" value=""/></fieldset>
<fieldset><label for="idproceso_">idproceso : </label><input type="text" name="idproceso_" id="idproceso_" value=""/></fieldset>
<fieldset><label for="idtipomensaje_">idtipomensaje : </label><input type="text" name="idtipomensaje_" id="idtipomensaje_" value=""/></fieldset>
<fieldset><label for="item_">item : </label><input type="text" name="item_" id="item_" value=""/></fieldset>
<fieldset><label for="email_">email : </label><input type="text" name="email_" id="email_" value=""/></fieldset>
<fieldset><label for="asunto_">asunto : </label><input type="text" name="asunto_" id="asunto_" value=""/></fieldset>
<fieldset><label for="mensaje_">mensaje : </label><input type="text" name="mensaje_" id="mensaje_" value=""/></fieldset>
<fieldset><label for="cabecera_">cabecera : </label><input type="text" name="cabecera_" id="cabecera_" value=""/></fieldset>
<fieldset><label for="fechareg_">fechareg : </label><input type="text" name="fechareg_" id="fechareg_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>