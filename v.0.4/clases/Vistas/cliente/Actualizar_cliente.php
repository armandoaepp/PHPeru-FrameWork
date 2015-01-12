<div id="divActualizar_cliente">
<form id="frmActualizar_cliente" name="frmRegistrar_cliente" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Cliente</legend>
<p><label for="ClienteId_">ClienteId : </label><input type="text" name="ClienteId_" id="ClienteId_" value="<?php echo $ClienteId;?>"/></p>
<p><label for="ClienteNombre_">ClienteNombre : </label><input type="text" name="ClienteNombre_" id="ClienteNombre_" value="<?php echo $ClienteNombre;?>"/></p>
<p><label for="ClienteRepresentante_">ClienteRepresentante : </label><input type="text" name="ClienteRepresentante_" id="ClienteRepresentante_" value="<?php echo $ClienteRepresentante;?>"/></p>
<p><label for="ClienteEmail_">ClienteEmail : </label><input type="text" name="ClienteEmail_" id="ClienteEmail_" value="<?php echo $ClienteEmail;?>"/></p>
<p><label for="ClienteFax_">ClienteFax : </label><input type="text" name="ClienteFax_" id="ClienteFax_" value="<?php echo $ClienteFax;?>"/></p>
<p><label for="ClienteDireccion_">ClienteDireccion : </label><input type="text" name="ClienteDireccion_" id="ClienteDireccion_" value="<?php echo $ClienteDireccion;?>"/></p>
<p><label for="ClienteCodigoPostal_">ClienteCodigoPostal : </label><input type="text" name="ClienteCodigoPostal_" id="ClienteCodigoPostal_" value="<?php echo $ClienteCodigoPostal;?>"/></p>
<p><label for="ClienteNota_">ClienteNota : </label><input type="text" name="ClienteNota_" id="ClienteNota_" value="<?php echo $ClienteNota;?>"/></p>
<p><label for="ClienteTelefono_">ClienteTelefono : </label><input type="text" name="ClienteTelefono_" id="ClienteTelefono_" value="<?php echo $ClienteTelefono;?>"/></p>
<p><label for="ClienteMovil_">ClienteMovil : </label><input type="text" name="ClienteMovil_" id="ClienteMovil_" value="<?php echo $ClienteMovil;?>"/></p>
<p><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value="<?php echo $PaisId;?>"/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>