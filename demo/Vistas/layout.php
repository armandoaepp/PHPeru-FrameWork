<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
<link href="../css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div class="row">
     <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY <a href="https://twitter.com/armandoaepp">@armandoaepp</a></h3>
     <?php include_once("../menu.php");?>
     <div class="grid space-min-top">
     <ul class="list-separate text-right">
         <li class="titulo"><?php echo $titulo;?></li>
         <li><a href="?accion=Listar" class="btn">Listar</a></li>
         <li><a href="?accion=Nuevo" class="btn" >Nuevo</a></li>   
      </ul>
     <?php @include_once($contenido);?>
 </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/nav-responsive.js"></script>

</body>
</html>