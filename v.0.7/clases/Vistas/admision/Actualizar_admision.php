<div id="divActualizar_admision">
<form id="frmActualizar_admision" name="frmRegistrar_admision" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Admision</legend>
<fieldset><label for="id_">id : </label><input type="text" name="id_" id="id_" value="<?php echo $id;?>"/></fieldset>
<fieldset><label for="titulo_">titulo : </label><input type="text" name="titulo_" id="titulo_" value="<?php echo $titulo;?>"/></fieldset>
<fieldset><label for="imagen_">imagen : </label><input type="text" name="imagen_" id="imagen_" value="<?php echo $imagen;?>"/></fieldset>
<fieldset><label for="requisitos_">requisitos : </label><input type="text" name="requisitos_" id="requisitos_" value="<?php echo $requisitos;?>"/></fieldset>
<fieldset><label for="horarios_">horarios : </label><input type="text" name="horarios_" id="horarios_" value="<?php echo $horarios;?>"/></fieldset>
<fieldset><label for="inversion_">inversion : </label><input type="text" name="inversion_" id="inversion_" value="<?php echo $inversion;?>"/></fieldset>
<fieldset><label for="email_">email : </label><input type="text" name="email_" id="email_" value="<?php echo $email;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>