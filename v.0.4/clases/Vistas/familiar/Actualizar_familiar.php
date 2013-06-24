<div id="divActualizar_familiar">
<form id="frmActualizar_familiar" name="frmRegistrar_familiar" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Familiar</legend>
<p><label for="FamiliarId_">FamiliarId : </label><input type="text" name="FamiliarId_" id="FamiliarId_" value="<?php echo $FamiliarId;?>"/></p>
<p><label for="FamiliarApellido_">FamiliarApellido : </label><input type="text" name="FamiliarApellido_" id="FamiliarApellido_" value="<?php echo $FamiliarApellido;?>"/></p>
<p><label for="FamiliarNombre_">FamiliarNombre : </label><input type="text" name="FamiliarNombre_" id="FamiliarNombre_" value="<?php echo $FamiliarNombre;?>"/></p>
<p><label for="FamiliarSexo_">FamiliarSexo : </label><input type="text" name="FamiliarSexo_" id="FamiliarSexo_" value="<?php echo $FamiliarSexo;?>"/></p>
<p><label for="FamiliarFechaNac_">FamiliarFechaNac : </label><input type="text" name="FamiliarFechaNac_" id="FamiliarFechaNac_" value="<?php echo $FamiliarFechaNac;?>"/></p>
<p><label for="FamiliarParentesco_">FamiliarParentesco : </label><input type="text" name="FamiliarParentesco_" id="FamiliarParentesco_" value="<?php echo $FamiliarParentesco;?>"/></p>
<p><label for="FamiliarOcupacion_">FamiliarOcupacion : </label><input type="text" name="FamiliarOcupacion_" id="FamiliarOcupacion_" value="<?php echo $FamiliarOcupacion;?>"/></p>
<p><label for="ProductorId_">ProductorId : </label><input type="text" name="ProductorId_" id="ProductorId_" value="<?php echo $ProductorId;?>"/></p>
<p><label for="EducacionId_">EducacionId : </label><input type="text" name="EducacionId_" id="EducacionId_" value="<?php echo $EducacionId;?>"/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>