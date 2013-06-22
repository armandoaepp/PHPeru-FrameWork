<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>

<div class="row">

    <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY @EPP</h3>
   
    <div><a href="?accion=Listar">Listar</a> <a href="?accion=Nuevo">Nuevo</a></div>

    <h2><?php echo $titulo;?></h2><br />

    <?php @include_once($contenido);?>
    
</div>

</body>

</html>