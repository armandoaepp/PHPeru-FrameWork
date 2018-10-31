<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";


//  Marcas
// require_once "../../api/model/Marca.php";
// require_once "../../api/controller/MarcaController.php";

$marca_controller = new MarcaController();

$marcas = $marca_controller->list();

// Categorias
// require_once "../../api/model/Categoria.php";
// require_once "../../api/controller/CategoriaController.php";

$categoria_controller = new CategoriaController();

$categorias = $categoria_controller->list();

// Producto
/* require_once "../../api/model/Producto.php";
require_once "../../api/controller/ProductoController.php";

$producto_controller = new ProductoController();

$params_pro = array(
    'idcategoria' => 0,
); */


// $productos = $producto_controller->list($params_pro);
// var_dump($productos);


?>

<?php $title_page = "Proyecto" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array('titulo' => 'Nuevo '.$title_page.' | Admin ', 'follow' => '', 'active' => [1, 1]);
    require_once "../layout/head_links.phtml";
  ?>

</head>

<body>
  <?php
require "../layout/header.phtml";
?>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="admin/productos/productos.php"><?php echo $title_page ?>s</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo <?php echo $title_page ?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo <?php echo $title_page ?> </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="admin/productos/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">

            <div class="row">
              <div class="col-sm-6 col-lg-5">
                <div class="form-group">
                  <label for="producto">Nombre </label>
                  <input type="text" class="form-control" name="producto" id="producto" required placeholder="Nombre">
                </div>
              </div>

              <!-- <div class="col-sm-6 col-lg-2">
                <div class="form-group">
                  <label for="precio">Precio </label>
                  <input type="number" class="form-control" name="precio" id="precio" required placeholder="Precio">
                </div>
              </div> -->

              <!-- <div class="col-sm-6 col-lg-4">
                <div class="form-group">
                  <label for="modelo">Modelo </label>
                  <input type="text" class="form-control" name="modelo" id="modelo"  placeholder="Modelo">
                </div>
              </div> -->

              <!-- <div class="col-sm-6 col-lg-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="tipo">Tipo</label>
                  </div>
                  <select class="custom-select" name="tipo" id="tipo" required placeholder="Tipo">
                    <option selected>Seleccionar...</option>
                    <option value="M"> Material </option>
                    <option value="A">Accesorio</option>
                  </select>
                </div>
              </div> -->

              <!-- <div class="col-sm-6 col-lg-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="marca">Marca</label>
                  </div>
                  <select class="custom-select"  name="marca" id="marca" placeholder="Marca">
                    <option selected> Seleccionar...</option>
                    <?php foreach ($marcas as &$marca) {
                    ?>
                    <option value="<?php echo $marca['idmarca']; ?>"><?php echo $marca['nombre']; ?></option>
                    <?php } ?>

                  </select>
                </div>
              </div> -->

              <div class="col-sm-6 col-lg-4">
                <label for="producto">
                  <br> </label>
                <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <label class="input-group-text" for="categoria">Categoría</label>
                  </div>
                  <select class="custom-select" name="categoria" id="categoria" required placeholder="categoria">
                    <option value="" selected> Seleccionar...</option>
                    <?php foreach ($categorias as &$categoria) {
                    ?>
                    <option value="<?php echo $categoria['idcategoria']; ?>">
                      <?php echo $categoria['nombre']; ?>
                    </option>
                    <?php } ?>

                  </select>
                </div>
              </div>

              <div class="col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" checked="checked">
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N">
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripción </label>
                  <textarea class="ckeditor form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción"></textarea>
                </div>
              </div>
              <div class="col-12 mb-1">
                <div class="row border-bottom pb-1">
                  <div class="col-6">
                    Imagen
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-dark btn-sm lh-1" id="addImg" onclick="" title="Agregar nueva imagen">
                      <i class="material-icons">add</i>
                    </button>

                  </div>
                </div>
              </div>

              <div class="col-12" id="imgContent">
                <div class="form-group">
                  <label for="imagen" class="sr-only">Imagen </label>
                  <input type="file" class="form-control" name="imagen[]" id="imagen" required placeholder="Imagen" accept="image/*">
                </div>


              </div>

            </div>

            <div class="w-100 text-right">
              <a href="admin/productos/productos.php" type="button" class="btn btn-dark ">Cancelar</a>
              <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
            </div>

          </form>
        </div>
      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php
    require "../layout/footer.phtml";
    ?>
  </footer>
  <?php require_once "../layout/foot_links.phtml"?>

  <script src="admin/plugins/ckeditor/ckeditor.js"></script>

  <script>
    $(document).ready(function () {
      $('#addImg').click(function (e) {
        e.preventDefault();
        var htmlImg = `
                    <div class="input-group mb-3 img-item">
                      <input type="file" class="form-control" name="imagen[]" id="imagen" placeholder="Imagen" accept="image/*">
                      <div class="input-group-append " onclick="ImgItemRemove(this)">
                        <span class="input-group-text bg-danger text-white border-0 fw-700 px-3 img-item-remove" style="cursor: pointer;">-</span>
                      </div>
                    </div> ` ;

        $('#imgContent').append(htmlImg);
      });
    });

    function ImgItemRemove(object) {
        // console.log(object);
         $(object).closest(".img-item").remove();
      }
  </script>


</body>

</html>