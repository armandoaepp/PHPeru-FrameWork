<div id="divActualizar_provincia">
<form id="frmActualizar_provincia" name="frmRegistrar_provincia" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Provincia</legend>
<fieldset><label for="ProvinciaId_">ProvinciaId : </label><input type="text" name="ProvinciaId_" id="ProvinciaId_" value="<?php echo $ProvinciaId;?>"/></fieldset>
<fieldset><label for="ProvinciaNombre_">ProvinciaNombre : </label><input type="text" name="ProvinciaNombre_" id="ProvinciaNombre_" value="<?php echo $ProvinciaNombre;?>"/></fieldset>
<fieldset><label for="DepartamentoId_">DepartamentoId : </label><input type="text" name="DepartamentoId_" id="DepartamentoId_" value="<?php echo $DepartamentoId;?>"/></fieldset>
<fieldset><label for="ubigeoProv_">ubigeoProv : </label><input type="text" name="ubigeoProv_" id="ubigeoProv_" value="<?php echo $ubigeoProv;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>