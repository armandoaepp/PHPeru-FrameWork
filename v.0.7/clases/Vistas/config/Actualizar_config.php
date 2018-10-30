<div id="divActualizar_config">
<form id="frmActualizar_config" name="frmRegistrar_config" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Config</legend>
<fieldset><label for="idconfig_">idconfig : </label><input type="text" name="idconfig_" id="idconfig_" value="<?php echo $idconfig;?>"/></fieldset>
<fieldset><label for="idtipoentidad_">idtipoentidad : </label><input type="text" name="idtipoentidad_" id="idtipoentidad_" value="<?php echo $idtipoentidad;?>"/></fieldset>
<fieldset><label for="idvalor_">idvalor : </label><input type="text" name="idvalor_" id="idvalor_" value="<?php echo $idvalor;?>"/></fieldset>
<fieldset><label for="valor_">valor : </label><input type="text" name="valor_" id="valor_" value="<?php echo $valor;?>"/></fieldset>
<fieldset><label for="referencia_">referencia : </label><input type="text" name="referencia_" id="referencia_" value="<?php echo $referencia;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>