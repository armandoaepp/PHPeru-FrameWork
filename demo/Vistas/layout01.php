<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="row">
     <h3>PHPERU - APLICACIONES PHP-MVC CREATED BY <a href="https://twitter.com/armandoaepp">@armandoaepp</a></h3>
     <nav class="nav">
     	<ul>
     		<li><a href="../simulacro">Simulacros</a></li>
     		<li><a href="../alternativa">Preguntas/Alternativas</a></li>
     		<li><a href="../texto">textos</a></li>
     		<li><a href="../respuesta">Respuestas</a></li>
     		<li><a href="../"></a></li>
     		<li><a href="../"></a></li>
     	</ul>
     </nav>
     <div class="grid space-min-top">
     <ul class="list-separate text-right">
         <li class="titulo"><?php echo $titulo;?></li>
         <li><a href="?accion=Listar" class="btn">Listar</a></li>
         <li><a href="?accion=Nuevo" class="btn" >Nuevo</a></li>   
      </ul>
     <?php @include_once($contenido);?>
 </div>
</div>
</body>
</html>