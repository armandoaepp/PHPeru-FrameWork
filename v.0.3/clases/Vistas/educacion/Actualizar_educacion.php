<div id="divActualizar_educacion">
<form id="frmActualizar_educacion" name="frmRegistrar_educacion" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Educacion</legend>
<p><label for="EducacionId_">EducacionId : </label><input type="text" name="EducacionId_" id="EducacionId_" value="<?php echo $EducacionId;?>"/></p>
<p><label for="EducacionNivel_">EducacionNivel : </label><input type="text" name="EducacionNivel_" id="EducacionNivel_" value="<?php echo $EducacionNivel;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>