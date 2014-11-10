<div id="divActualizar_msjemail">
<form id="frmActualizar_msjemail" name="frmRegistrar_msjemail" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Msjemail</legend>
<fieldset><label for="idmsjemail_">idmsjemail : </label><input type="text" name="idmsjemail_" id="idmsjemail_" value="<?php echo $idmsjemail;?>"/></fieldset>
<fieldset><label for="idproceso_">idproceso : </label><input type="text" name="idproceso_" id="idproceso_" value="<?php echo $idproceso;?>"/></fieldset>
<fieldset><label for="idtipomensaje_">idtipomensaje : </label><input type="text" name="idtipomensaje_" id="idtipomensaje_" value="<?php echo $idtipomensaje;?>"/></fieldset>
<fieldset><label for="item_">item : </label><input type="text" name="item_" id="item_" value="<?php echo $item;?>"/></fieldset>
<fieldset><label for="email_">email : </label><input type="text" name="email_" id="email_" value="<?php echo $email;?>"/></fieldset>
<fieldset><label for="asunto_">asunto : </label><input type="text" name="asunto_" id="asunto_" value="<?php echo $asunto;?>"/></fieldset>
<fieldset><label for="mensaje_">mensaje : </label><input type="text" name="mensaje_" id="mensaje_" value="<?php echo $mensaje;?>"/></fieldset>
<fieldset><label for="cabecera_">cabecera : </label><input type="text" name="cabecera_" id="cabecera_" value="<?php echo $cabecera;?>"/></fieldset>
<fieldset><label for="fechareg_">fechareg : </label><input type="text" name="fechareg_" id="fechareg_" value="<?php echo $fechareg;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>