<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $titulo;?></title>
<link href="../css/estilo_frms.css" rel="stylesheet" type="text/css"/>
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<table width="1056" height="252" border="0">

  <tr>

    <td height="45">PHPERU - APLICACIONES PHP-MVC CREATED BY @EPP</td>

  </tr>

  <tr>

    <td height="24"><a href="?accion=Listar">Listar</a> <a href="?accion=Nuevo">Nuevo</a></td>

  </tr>

  <tr>

    <td valign="top">

    <h2><?php echo $titulo;?></h2><br />

    <?php @include_once($contenido);?>

    </td>

  </tr>

</table>

</body>

</html>