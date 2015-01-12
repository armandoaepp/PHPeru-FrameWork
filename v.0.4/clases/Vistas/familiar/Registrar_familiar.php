<div id="divRegistrar_familiar">
<form id="frmRegistrar_familiar" name="frmRegistrar_familiar" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Familiar</legend>
<p><label for="FamiliarId_">FamiliarId : </label><input type="text" name="FamiliarId_" id="FamiliarId_" value=""/></p>
<p><label for="FamiliarApellido_">FamiliarApellido : </label><input type="text" name="FamiliarApellido_" id="FamiliarApellido_" value=""/></p>
<p><label for="FamiliarNombre_">FamiliarNombre : </label><input type="text" name="FamiliarNombre_" id="FamiliarNombre_" value=""/></p>
<p><label for="FamiliarSexo_">FamiliarSexo : </label><input type="text" name="FamiliarSexo_" id="FamiliarSexo_" value=""/></p>
<p><label for="FamiliarFechaNac_">FamiliarFechaNac : </label><input type="text" name="FamiliarFechaNac_" id="FamiliarFechaNac_" value=""/></p>
<p><label for="FamiliarParentesco_">FamiliarParentesco : </label><input type="text" name="FamiliarParentesco_" id="FamiliarParentesco_" value=""/></p>
<p><label for="FamiliarOcupacion_">FamiliarOcupacion : </label><input type="text" name="FamiliarOcupacion_" id="FamiliarOcupacion_" value=""/></p>
<p><label for="ProductorId_">ProductorId : </label><input type="text" name="ProductorId_" id="ProductorId_" value=""/></p>
<p><label for="EducacionId_">EducacionId : </label><input type="text" name="EducacionId_" id="EducacionId_" value=""/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>