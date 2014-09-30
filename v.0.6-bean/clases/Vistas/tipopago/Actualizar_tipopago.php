<div id="divActualizar_tipopago">
<form id="frmActualizar_tipopago" name="frmRegistrar_tipopago" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipopago</legend>
<fieldset><label for="id_tipo_pago_">id_tipo_pago : </label><input type="text" name="id_tipo_pago_" id="id_tipo_pago_" value="<?php echo $id_tipo_pago;?>"/></fieldset>
<fieldset><label for="tipo_pago_">tipo_pago : </label><input type="text" name="tipo_pago_" id="tipo_pago_" value="<?php echo $tipo_pago;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>