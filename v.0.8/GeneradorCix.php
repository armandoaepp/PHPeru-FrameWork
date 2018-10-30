
<form id="form1" name="form1" method="post" action="" onsubmit="return validar('form1','respuesta');">
  <table width="366" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2">Generador de Clases</td>
    </tr>
    <tr>
      <td width="140">Nombre de Clase:</td>
      <td width="220"><label>
        <input name="nombre_clase" type="text" id="nombre_clase" size="30" alt="requerido"  title="Ingrese el Nombre de la Clase" />
      </label></td>
    </tr>
    <tr>
      <td>Archivo:</td>
      <td><input name="archivo" type="text" id="archivo" size="30" alt="requerido"  title="Ingrese el Nombre del Archivo"/></td>
    </tr>
    <tr>
      <td>Atributos:</td>
      <td><input name="atributo" type="text" id="atributo" size="20"  />
      <input type="button" name="btatributo" id="btatributo" value="+" /></td>
    </tr>
    <tr>
      <td height="104">&nbsp;</td>
      <td><label>
        <select name="satributos" size="5" id="satributos">
        </select>
        <input type="button" name="bteliatri" id="bteliatri" value="-" />
      </label></td>
    </tr>
    <tr>
      <td>Metodos:</td>
      <td><input name="metodo" type="text" id="metodo" size="20" />
      <input type="button" name="btmetodo" id="btmetodo" value="+" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><select name="smetodos" size="5" id="smetodos">
      </select>
      <input type="button" name="btelimetodo" id="btelimetodo" value="-" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Generar" />
      <input type="reset" name="button2" id="button2" value="Limpiar" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div id="respuesta"></div></td>
    </tr>
  </table>
</form>
<script type="text/javascript" src="js/validacion.js">
</script>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/generador.js">
</script>
