<div id="divActualizar_amigos">
<form id="frmActualizar_amigos" name="frmRegistrar_amigos" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Amigos</legend>
<fieldset><label for="id_">id : </label><input type="text" name="id_" id="id_" value="<?php echo $id;?>"/></fieldset>
<fieldset><label for="titulo_">titulo : </label><input type="text" name="titulo_" id="titulo_" value="<?php echo $titulo;?>"/></fieldset>
<fieldset><label for="imagen_">imagen : </label><input type="text" name="imagen_" id="imagen_" value="<?php echo $imagen;?>"/></fieldset>
<fieldset><label for="imagen_2_">imagen_2 : </label><input type="text" name="imagen_2_" id="imagen_2_" value="<?php echo $imagen_2;?>"/></fieldset>
<fieldset><label for="email_">email : </label><input type="text" name="email_" id="email_" value="<?php echo $email;?>"/></fieldset>
<fieldset><label for="orden_">orden : </label><input type="text" name="orden_" id="orden_" value="<?php echo $orden;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset><label for="fecha_">fecha : </label><input type="text" name="fecha_" id="fecha_" value="<?php echo $fecha;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>