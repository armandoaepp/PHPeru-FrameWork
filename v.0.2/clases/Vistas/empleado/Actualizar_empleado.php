<div id="divActualizar_empleado">
<form id="frmActualizar_empleado" name="frmRegistrar_empleado" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Empleado</legend>
<p><label for="ID_EMPLEADOS_">ID_EMPLEADOS : </label><input type="text" name="ID_EMPLEADOS_" id="ID_EMPLEADOS_" value="<?php echo $ID_EMPLEADOS;?>"/></p>
<p><label for="DNI_">DNI : </label><input type="text" name="DNI_" id="DNI_" value="<?php echo $DNI;?>"/></p>
<p><label for="NOMBRE_">NOMBRE : </label><input type="text" name="NOMBRE_" id="NOMBRE_" value="<?php echo $NOMBRE;?>"/></p>
<p><label for="APELLIDO1_">APELLIDO1 : </label><input type="text" name="APELLIDO1_" id="APELLIDO1_" value="<?php echo $APELLIDO1;?>"/></p>
<p><label for="APELLIDO2_">APELLIDO2 : </label><input type="text" name="APELLIDO2_" id="APELLIDO2_" value="<?php echo $APELLIDO2;?>"/></p>
<p><label for="DIRECC1_">DIRECC1 : </label><input type="text" name="DIRECC1_" id="DIRECC1_" value="<?php echo $DIRECC1;?>"/></p>
<p><label for="DIRECC2_">DIRECC2 : </label><input type="text" name="DIRECC2_" id="DIRECC2_" value="<?php echo $DIRECC2;?>"/></p>
<p><label for="CIUDAD_">CIUDAD : </label><input type="text" name="CIUDAD_" id="CIUDAD_" value="<?php echo $CIUDAD;?>"/></p>
<p><label for="MUNICIPIO_">MUNICIPIO : </label><input type="text" name="MUNICIPIO_" id="MUNICIPIO_" value="<?php echo $MUNICIPIO;?>"/></p>
<p><label for="COD_POSTAL_">COD_POSTAL : </label><input type="text" name="COD_POSTAL_" id="COD_POSTAL_" value="<?php echo $COD_POSTAL;?>"/></p>
<p><label for="SEXO_">SEXO : </label><input type="text" name="SEXO_" id="SEXO_" value="<?php echo $SEXO;?>"/></p>
<p><label for="FECHA_NAC_">FECHA_NAC : </label><input type="text" name="FECHA_NAC_" id="FECHA_NAC_" value="<?php echo $FECHA_NAC;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>