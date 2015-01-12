<div id="divActualizar_alternativa">
<form id="frmActualizar_alternativa" name="frmRegistrar_alternativa" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Alternativa</legend>
<fieldset><label for="AlternativaId_">AlternativaId : </label><input type="text" name="AlternativaId_" id="AlternativaId_" value="<?php echo $AlternativaId;?>"/></fieldset>
<fieldset><label for="AlternativaA_">AlternativaA : </label><input type="text" name="AlternativaA_" id="AlternativaA_" value="<?php echo $AlternativaA;?>"/></fieldset>
<fieldset><label for="AlternativaB_">AlternativaB : </label><input type="text" name="AlternativaB_" id="AlternativaB_" value="<?php echo $AlternativaB;?>"/></fieldset>
<fieldset><label for="AlternativaC_">AlternativaC : </label><input type="text" name="AlternativaC_" id="AlternativaC_" value="<?php echo $AlternativaC;?>"/></fieldset>
<fieldset><label for="AlternativaD_">AlternativaD : </label><input type="text" name="AlternativaD_" id="AlternativaD_" value="<?php echo $AlternativaD;?>"/></fieldset>
<fieldset><label for="AlternativaE_">AlternativaE : </label><input type="text" name="AlternativaE_" id="AlternativaE_" value="<?php echo $AlternativaE;?>"/></fieldset>
<fieldset><label for="PreguntaId_">PreguntaId : </label><input type="text" name="PreguntaId_" id="PreguntaId_" value="<?php echo $PreguntaId;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>