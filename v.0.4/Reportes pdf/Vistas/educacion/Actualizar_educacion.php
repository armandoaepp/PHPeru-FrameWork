<div id="divActualizar_educacion">
<form id="frmActualizar_educacion" name="frmRegistrar_educacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Educacion</legend>
<p><label for="EducacionId_">EducacionId : </label><input type="text" name="EducacionId_" id="EducacionId_" value="<?php echo $EducacionId;?>"/></p>
<p><label for="EducacionNivel_">EducacionNivel : </label><input type="text" name="EducacionNivel_" id="EducacionNivel_" value="<?php echo $EducacionNivel;?>"/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>