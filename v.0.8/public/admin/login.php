<?php
session_start();
if (!empty($_SESSION['LOGIN'])){
  header("Location: admin", true, 301);
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
<?php
    $setvar = array('titulo'=>'Login Admin','follow'=>'','active'=>[1]);
    require_once("layout/head_links.phtml");
   ?>

  <style>
    .screen-main {
      min-height: calc(100vh - 56px);
    }

   /*  @media(min-width: 996px) {
      .screen-main {
        min-height: calc(100vh - 208px);
      }
    } */
  </style>
</head>

<body>


  <main role="main" class="screen-main  d-flex align-items-center">

    <div class="container py-3 py-md-4">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="kanit"> Login Admin </h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
          <form id="formLogin" class=" form-borders form-contact form-control-black">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="email" required="" placeholder="Email">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" required="" placeholder="Password">
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-primary btn-no-r btn-footer fs-1x-25 fw-500 btn-block" role="button"> Login </button>

            <div id="alertConfirmPrincipal" class="alert alert-success fade" role="alert">
              <div id="alertMensaje">
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php
            require("layout/footer.phtml");
        ?>
  </footer>

  <?php  require_once("layout/foot_links.phtml") ?>
  


</body>

</html>