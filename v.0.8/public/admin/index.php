<?php
 require_once "sesion_admin.php" ;
 loginRedirect();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array('titulo'=>'Admin Home','follow'=>'','active'=>[1]);
    require_once("layout/head_links.phtml");
   ?>

</head>

<body>
  <?php
      require("layout/header.phtml");
  ?>

  <main role="main" class="screen-main d-flex align-item-center">

    <div class="container py-3 py-md-4">
      <div class="row pt-1 pt-md-4">
        <div class="col-12 text-center">
          <h1 class="open-sans"> Bienvenido </h1>
          <h2 class="open-sans"> Administrador : <?php echo  $_SESSION['USER']['nombre'] . ' ' . $_SESSION['USER']['apellidos']  ?> </h2>
        </div>
      </div>

    </div>

  </main>

 <footer class="footer bg-dark sticky-bottom">
    <?php
            require("layout/footer.phtml");
        ?>
  </footer>
  <?php require_once("layout/foot_links.phtml") ?>


</body>

</html>