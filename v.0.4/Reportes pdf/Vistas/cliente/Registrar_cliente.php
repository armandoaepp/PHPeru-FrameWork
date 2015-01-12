<div id="divRegistrar_cliente">
<form id="frmRegistrar_cliente" name="frmRegistrar_cliente" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Cliente</legend>
<p><label for="ClienteId_">ClienteId : </label><input type="text" name="ClienteId_" id="ClienteId_" value=""/></p>
<p><label for="ClienteNombre_">ClienteNombre : </label><input type="text" name="ClienteNombre_" id="ClienteNombre_" value=""/></p>
<p><label for="ClienteRepresentante_">ClienteRepresentante : </label><input type="text" name="ClienteRepresentante_" id="ClienteRepresentante_" value=""/></p>
<p><label for="ClienteEmail_">ClienteEmail : </label><input type="text" name="ClienteEmail_" id="ClienteEmail_" value=""/></p>
<p><label for="ClienteFax_">ClienteFax : </label><input type="text" name="ClienteFax_" id="ClienteFax_" value=""/></p>
<p><label for="ClienteDireccion_">ClienteDireccion : </label><input type="text" name="ClienteDireccion_" id="ClienteDireccion_" value=""/></p>
<p><label for="ClienteCodigoPostal_">ClienteCodigoPostal : </label><input type="text" name="ClienteCodigoPostal_" id="ClienteCodigoPostal_" value=""/></p>
<p><label for="ClienteNota_">ClienteNota : </label><input type="text" name="ClienteNota_" id="ClienteNota_" value=""/></p>
<p><label for="ClienteTelefono_">ClienteTelefono : </label><input type="text" name="ClienteTelefono_" id="ClienteTelefono_" value=""/></p>
<p><label for="ClienteMovil_">ClienteMovil : </label><input type="text" name="ClienteMovil_" id="ClienteMovil_" value=""/></p>
<p><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value=""/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>