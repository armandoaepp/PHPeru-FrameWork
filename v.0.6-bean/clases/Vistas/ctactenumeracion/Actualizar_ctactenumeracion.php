<div id="divActualizar_ctactenumeracion">
<form id="frmActualizar_ctactenumeracion" name="frmRegistrar_ctactenumeracion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Ctactenumeracion</legend>
<fieldset><label for="cPerJuridica_">cPerJuridica : </label><input type="text" name="cPerJuridica_" id="cPerJuridica_" value="<?php echo $cPerJuridica;?>"/></fieldset>
<fieldset><label for="nComTipo_">nComTipo : </label><input type="text" name="nComTipo_" id="nComTipo_" value="<?php echo $nComTipo;?>"/></fieldset>
<fieldset><label for="nSerie_">nSerie : </label><input type="text" name="nSerie_" id="nSerie_" value="<?php echo $nSerie;?>"/></fieldset>
<fieldset><label for="Numero_">Numero : </label><input type="text" name="Numero_" id="Numero_" value="<?php echo $Numero;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>