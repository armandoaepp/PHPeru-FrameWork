<div id="divActualizar_trabajo">
<form id="frmActualizar_trabajo" name="frmRegistrar_trabajo" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Trabajo</legend>
<p><label for="ID_TRABAJO_">ID_TRABAJO : </label><input type="text" name="ID_TRABAJO_" id="ID_TRABAJO_" value="<?php echo $ID_TRABAJO;?>"/></p>
<p><label for="TRABAJO_COD_">TRABAJO_COD : </label><input type="text" name="TRABAJO_COD_" id="TRABAJO_COD_" value="<?php echo $TRABAJO_COD;?>"/></p>
<p><label for="NOMBRE_TRAB_">NOMBRE_TRAB : </label><input type="text" name="NOMBRE_TRAB_" id="NOMBRE_TRAB_" value="<?php echo $NOMBRE_TRAB;?>"/></p>
<p><label for="SALARIO_MIN_">SALARIO_MIN : </label><input type="text" name="SALARIO_MIN_" id="SALARIO_MIN_" value="<?php echo $SALARIO_MIN;?>"/></p>
<p><label for="SALARIO_MAX_">SALARIO_MAX : </label><input type="text" name="SALARIO_MAX_" id="SALARIO_MAX_" value="<?php echo $SALARIO_MAX;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>