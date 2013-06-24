<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="row">
     <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY <a href="https://twitter.com/armandoaepp" target="_blank">@armandoaepp</a></h3>
     <div class="grid">
     <ul class="list-separate text-right">
         <li class="titulo"><?php echo $titulo;?></li>
         <li><a href="?accion=Exportar&type=pdf" class="btn" target="_blank"><i class="icon-pdf"></i></a></li>
         <li><a href="?accion=Exportar&type=xls" class="btn"><i class="icon-excel"></i></a></li>
         <li><a href="?accion=Exportar&type=doc" class="btn"><i class="icon-word"></i></a></li>
         <li><a href="?accion=Exportar&type=html" class="btn"><i class="icon-html"></i></a></li>
         <li><a href="?accion=Listar" class="btn">Listar</a></li>
         <li><a href="?accion=Nuevo" class="btn" >Nuevo</a></li>   
      </ul>
     <?php @include_once($contenido);?>
 </div>
</div>
</body>
</html>