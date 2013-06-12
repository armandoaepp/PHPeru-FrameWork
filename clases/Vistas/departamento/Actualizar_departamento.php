<div id="divActualizar_departamento">
<form id="frmActualizar_departamento" name="frmRegistrar_departamento" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Departamento</legend>
<p><label for="ID_DEPARTAMENTO_">ID_DEPARTAMENTO : </label><input type="text" name="ID_DEPARTAMENTO_" id="ID_DEPARTAMENTO_" value="<?php echo $ID_DEPARTAMENTO;?>"/></p>
<p><label for="DPTO_COD_">DPTO_COD : </label><input type="text" name="DPTO_COD_" id="DPTO_COD_" value="<?php echo $DPTO_COD;?>"/></p>
<p><label for="NOMBRE_DPTO_">NOMBRE_DPTO : </label><input type="text" name="NOMBRE_DPTO_" id="NOMBRE_DPTO_" value="<?php echo $NOMBRE_DPTO;?>"/></p>
<p><label for="JEFE_">JEFE : </label><input type="text" name="JEFE_" id="JEFE_" value="<?php echo $JEFE;?>"/></p>
<p><label for="PRESUPUESTO_">PRESUPUESTO : </label><input type="text" name="PRESUPUESTO_" id="PRESUPUESTO_" value="<?php echo $PRESUPUESTO;?>"/></p>
<p><label for="PRES_ACTUAL_">PRES_ACTUAL : </label><input type="text" name="PRES_ACTUAL_" id="PRES_ACTUAL_" value="<?php echo $PRES_ACTUAL;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>