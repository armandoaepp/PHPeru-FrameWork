<div id="divRegistrar_universidad">
<form id="frmRegistrar_universidad" name="frmRegistrar_universidad" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Universidad</legend>
<p><label for="ID_UNIVERSIDAD_">ID_UNIVERSIDAD : </label><input type="text" name="ID_UNIVERSIDAD_" id="ID_UNIVERSIDAD_" value=""/></p>
<p><label for="UNIV_COD_">UNIV_COD : </label><input type="text" name="UNIV_COD_" id="UNIV_COD_" value=""/></p>
<p><label for="NOMBRE_UNIV_">NOMBRE_UNIV : </label><input type="text" name="NOMBRE_UNIV_" id="NOMBRE_UNIV_" value=""/></p>
<p><label for="CIUDAD_">CIUDAD : </label><input type="text" name="CIUDAD_" id="CIUDAD_" value=""/></p>
<p><label for="MUNICIPIO_">MUNICIPIO : </label><input type="text" name="MUNICIPIO_" id="MUNICIPIO_" value=""/></p>
<p><label for="COD_POSTAL_">COD_POSTAL : </label><input type="text" name="COD_POSTAL_" id="COD_POSTAL_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>