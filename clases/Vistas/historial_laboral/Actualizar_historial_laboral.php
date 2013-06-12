<div id="divActualizar_historial_laboral">
<form id="frmActualizar_historial_laboral" name="frmRegistrar_historial_laboral" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Historial_laboral</legend>
<p><label for="ID_HISTORIAL_LABORAL_">ID_HISTORIAL_LABORAL : </label><input type="text" name="ID_HISTORIAL_LABORAL_" id="ID_HISTORIAL_LABORAL_" value="<?php echo $ID_HISTORIAL_LABORAL;?>"/></p>
<p><label for="EMPLEADO_DNI_">EMPLEADO_DNI : </label><input type="text" name="EMPLEADO_DNI_" id="EMPLEADO_DNI_" value="<?php echo $EMPLEADO_DNI;?>"/></p>
<p><label for="TRAB_COD_">TRAB_COD : </label><input type="text" name="TRAB_COD_" id="TRAB_COD_" value="<?php echo $TRAB_COD;?>"/></p>
<p><label for="FECHA_INICIO_">FECHA_INICIO : </label><input type="text" name="FECHA_INICIO_" id="FECHA_INICIO_" value="<?php echo $FECHA_INICIO;?>"/></p>
<p><label for="FECHA_FIN_">FECHA_FIN : </label><input type="text" name="FECHA_FIN_" id="FECHA_FIN_" value="<?php echo $FECHA_FIN;?>"/></p>
<p><label for="DPTO_COD_">DPTO_COD : </label><input type="text" name="DPTO_COD_" id="DPTO_COD_" value="<?php echo $DPTO_COD;?>"/></p>
<p><label for="SUPERVISOR_DNI_">SUPERVISOR_DNI : </label><input type="text" name="SUPERVISOR_DNI_" id="SUPERVISOR_DNI_" value="<?php echo $SUPERVISOR_DNI;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>