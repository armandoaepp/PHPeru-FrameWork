<div id="divRegistrar_historial_salarial">
<form id="frmRegistrar_historial_salarial" name="frmRegistrar_historial_salarial" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Historial_salarial</legend>
<p><label for="ID_HISTORIAL_SALARIAL_">ID_HISTORIAL_SALARIAL : </label><input type="text" name="ID_HISTORIAL_SALARIAL_" id="ID_HISTORIAL_SALARIAL_" value=""/></p>
<p><label for="EMPLEADO_DNI_">EMPLEADO_DNI : </label><input type="text" name="EMPLEADO_DNI_" id="EMPLEADO_DNI_" value=""/></p>
<p><label for="SALARIO_">SALARIO : </label><input type="text" name="SALARIO_" id="SALARIO_" value=""/></p>
<p><label for="FECHA_COMIENZO_">FECHA_COMIENZO : </label><input type="text" name="FECHA_COMIENZO_" id="FECHA_COMIENZO_" value=""/></p>
<p><label for="FECHA_FIN_">FECHA_FIN : </label><input type="text" name="FECHA_FIN_" id="FECHA_FIN_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>