<div id="divActualizar_invitacion">
<form id="frmActualizar_invitacion" name="frmRegistrar_invitacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Invitacion</legend>
<fieldset><label for="idinvitacion_">idinvitacion : </label><input type="text" name="idinvitacion_" id="idinvitacion_" value="<?php echo $idinvitacion;?>"/></fieldset>
<fieldset><label for="idcliente_">idcliente : </label><input type="text" name="idcliente_" id="idcliente_" value="<?php echo $idcliente;?>"/></fieldset>
<fieldset><label for="tipocliente_">tipocliente : </label><input type="text" name="tipocliente_" id="tipocliente_" value="<?php echo $tipocliente;?>"/></fieldset>
<fieldset><label for="glosa_">glosa : </label><input type="text" name="glosa_" id="glosa_" value="<?php echo $glosa;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>