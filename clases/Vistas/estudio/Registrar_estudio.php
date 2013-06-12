<div id="divRegistrar_estudio">
<form id="frmRegistrar_estudio" name="frmRegistrar_estudio" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Estudio</legend>
<p><label for="ID_ESTUDIO_">ID_ESTUDIO : </label><input type="text" name="ID_ESTUDIO_" id="ID_ESTUDIO_" value=""/></p>
<p><label for="EMPLEADO_DNI_">EMPLEADO_DNI : </label><input type="text" name="EMPLEADO_DNI_" id="EMPLEADO_DNI_" value=""/></p>
<p><label for="UNIVERSIDAD_">UNIVERSIDAD : </label><input type="text" name="UNIVERSIDAD_" id="UNIVERSIDAD_" value=""/></p>
<p><label for="AÑO_">AÑO : </label><input type="text" name="AÑO_" id="AÑO_" value=""/></p>
<p><label for="GRADO_">GRADO : </label><input type="text" name="GRADO_" id="GRADO_" value=""/></p>
<p><label for="ESPECIALIDAD_">ESPECIALIDAD : </label><input type="text" name="ESPECIALIDAD_" id="ESPECIALIDAD_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>