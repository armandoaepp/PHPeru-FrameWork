<div id="divActualizar_operador">
<form id="frmActualizar_operador" name="frmRegistrar_operador" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Operador</legend>
<fieldset><label for="idoperador_">idoperador : </label><input type="text" name="idoperador_" id="idoperador_" value="<?php echo $idoperador;?>"/></fieldset>
<fieldset><label for="nombre_">nombre : </label><input type="text" name="nombre_" id="nombre_" value="<?php echo $nombre;?>"/></fieldset>
<fieldset><label for="nom_operador_">nom_operador : </label><input type="text" name="nom_operador_" id="nom_operador_" value="<?php echo $nom_operador;?>"/></fieldset>
<fieldset><label for="pass_operador_">pass_operador : </label><input type="text" name="pass_operador_" id="pass_operador_" value="<?php echo $pass_operador;?>"/></fieldset>
<fieldset><label for="telefono1_">telefono1 : </label><input type="text" name="telefono1_" id="telefono1_" value="<?php echo $telefono1;?>"/></fieldset>
<fieldset><label for="telefono2_">telefono2 : </label><input type="text" name="telefono2_" id="telefono2_" value="<?php echo $telefono2;?>"/></fieldset>
<fieldset><label for="telefono3_">telefono3 : </label><input type="text" name="telefono3_" id="telefono3_" value="<?php echo $telefono3;?>"/></fieldset>
<fieldset><label for="codubigeo_">codubigeo : </label><input type="text" name="codubigeo_" id="codubigeo_" value="<?php echo $codubigeo;?>"/></fieldset>
<fieldset><label for="fechareg_">fechareg : </label><input type="text" name="fechareg_" id="fechareg_" value="<?php echo $fechareg;?>"/></fieldset>
<fieldset><label for="idtransp_">idtransp : </label><input type="text" name="idtransp_" id="idtransp_" value="<?php echo $idtransp;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset><label for="superusuario_">superusuario : </label><input type="text" name="superusuario_" id="superusuario_" value="<?php echo $superusuario;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>