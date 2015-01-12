<div id="divActualizar_respuesta">
<form id="frmActualizar_respuesta" name="frmRegistrar_respuesta" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Respuesta</legend>
<fieldset><label for="RespuestaId_">RespuestaId : </label><input type="text" name="RespuestaId_" id="RespuestaId_" value="<?php echo $RespuestaId;?>"/></fieldset>
<fieldset><label for="Respuesta_">Respuesta : </label><input type="text" name="Respuesta_" id="Respuesta_" value="<?php echo $Respuesta;?>"/></fieldset>
<fieldset><label for="PreguntaId_">PreguntaId : </label><input type="text" name="PreguntaId_" id="PreguntaId_" value="<?php echo $PreguntaId;?>"/></fieldset>
<fieldset><label for="RespuestaPuntaje_">RespuestaPuntaje : </label><input type="text" name="RespuestaPuntaje_" id="RespuestaPuntaje_" value="<?php echo $RespuestaPuntaje;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>