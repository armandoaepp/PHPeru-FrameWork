<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

$id = !empty($_GET['id']) ? $_GET['id'] : 0;

if ($id <= 0) {
    header("Location: ./subcategorias.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/SubCategoria.php";
// require_once "../../api/controller/SubCategoriaController.php";

$subcategoria_controller = new SubCategoriaController();

$params = array(
    'idsubcategoria' => $id,
);

$subcategoria = $subcategoria_controller->getById($params);
// var_dump($subcategoria);
// return ;

$nombre = $subcategoria['nombre'];
$publicar = trim($subcategoria['publicar']);

$si = '';
$no = '';

if ($publicar == 'S') {
    $si = 'checked="checked"';
} elseif ($publicar == 'N') {
    $no = 'checked="checked"';
}

// Categorias
require_once "../../api/model/Categoria.php";
require_once "../../api/controller/CategoriaController.php";

$categoria_controller = new CategoriaController();

$categorias = $categoria_controller->list();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo categorias | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/subcategorias/subcategorias.php">Sub Categorías</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Sub Categoría</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo Sub Categoría </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-10">
          <form action="admin/subcategorias/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">

            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="categoria">Sub Categoría </label>
                  <input type="text" class="form-control" name="categoria" id="categoria" required placeholder="Sub Categoría" value="<?php echo $subcategoria['nombre'] ?>">
                </div>
              </div>

               <div class="col-md-6 col-lg-4">
               <label for="categoria">
                  <br> </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="categoria" >Categoría</label>
                  </div>
                  <select class="custom-select" name="categoria" id="categoria" required placeholder="categoria">
                    <option value=""  > Seleccionar...</option>
                    <?php foreach ($categorias as &$categoria) {
                    ?>
                    <option value="<?php echo $categoria['idcategoria']; ?>" <?php if($subcategoria["idcategoria"] == $categoria['idcategoria'] ) echo "selected" ;?>>
                    <?php echo $categoria['nombre'] ; ?>

                  </option>
                    <?php } ?>

                  </select>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?> >
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?>>
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $subcategoria['imagen']; ?>">

                <img src="<?php echo $subcategoria['imagen'] ?>" class="img-fluid mb-1" style="max-height:150px;">
                <div class="col-auto">
                  <!-- <label class="sr-only" for="imagen">Nueva Imagen</label> -->
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>
            </div>

            <div class="w-100 text-center">
              <a href="admin/subcategorias/subcategorias.php" type="button" class="btn btn-dark ">Cancelar</a>
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



</body>

</html>