<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

$id = !empty($_GET['id']) ? $_GET['id'] : 0  ;

if($id <= 0){
  header("Location: ./marcas.php ", true, 301);
}
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
// require_once "../../api/model/Producto.php";
// require_once "../../api/controller/ProductoController.php";

$producto_controller = new ProductoController();

$params_pro = array(
    'idproducto' => $id ,
);

// $producto = (object)$producto_controller->productoById($params_pro);
$producto = $producto_controller->productoById($params_pro);
if(empty($producto)){
  echo "<h1> El Producto no existe </h1>" ;
}
// $producto = $producto[0];
// var_dump($producto);


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array('titulo' => 'Editar Productos | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/productos/productos.php">Productos</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar Producto</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar Producto </h4>
        </div>
      </div>
      <div class="row">
      <div class="col-12">
          <form action="admin/productos/editar.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ; ?>">

            <div class="row">
              <div class="col-sm-6 col-lg-6">
                <div class="form-group">
                  <label for="producto">Producto </label>
                  <input type="text" class="form-control" name="producto" id="producto" required placeholder="producto" value="<?php echo $producto["nombre"] ?>">
                </div>
              </div>

              <div class="col-sm-6 col-lg-2">
                <div class="form-group">
                  <label for="precio">Precio </label>
                  <input type="number" class="form-control" name="precio" id="precio" required placeholder="Precio" value="<?php echo $producto["precio"] ?>">
                </div>
              </div>

              <div class="col-sm-6 col-lg-4">
                <div class="form-group">
                  <label for="modelo">Modelo </label>
                  <input type="text" class="form-control" name="modelo" id="modelo"  placeholder="Modelo" value="<?php echo $producto["modelo"] ?>">
                </div>
              </div>

              <div class="col-sm-6 col-lg-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="tipo">Tipo</label>
                  </div>
                  <select class="custom-select" name="tipo" id="tipo" required placeholder="Tipo">
                    <option >Seleccionar...</option>
                    <option value="M" <?php if($producto["tipo"] =="M") echo "selected" ;?>> Material </option>
                    <option value="A" <?php if($producto["tipo"] =="A") echo "selected" ;?> >Accesorio</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="marca">Marca</label>
                  </div>
                  <select class="custom-select"  name="marca" id="marca" placeholder="Marca">
                    <option value="" > Seleccionar...</option>
                    <?php foreach ($marcas as &$marca) {
                    ?>
                    <option value="<?php echo $marca['idmarca']; ?>" <?php if($producto["idmarca"] == $marca['idmarca'] ) echo "selected" ;?> ><?php echo $marca['nombre']; ?></option>
                    <?php } ?>

                  </select>
                </div>
              </div>

              <div class="col-sm-6 col-lg-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="categoria" >Categoría</label>
                  </div>
                  <select class="custom-select" name="categoria" id="categoria" required placeholder="categoria">
                    <option value=""  > Seleccionar...</option>
                    <?php foreach ($categorias as &$categoria) {
                    ?>
                    <option value="<?php echo $categoria['idcategoria']; ?>" <?php if($producto["idcategoria"] == $categoria['idcategoria'] ) echo "selected" ;?>><?php echo $categoria['nombre']; ?></option>
                    <?php } ?>

                  </select>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $producto['imagen'] ; ?>">

                <img src="<?php echo $producto["imagen"] ?>" class="img-fluid mb-1" style="max-height:150px;" >
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php if($producto["publicar"] =="S") echo 'checked="checked"' ;?> >
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php if($producto["publicar"] =="N") echo 'checked="checked"' ;?>>
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripción </label>
                  <textarea name="descripcion" id="descripcion" cols="30" rows="6" class="ckeditor form-control" placeholder="Descripción" ><?php echo $producto["descripcion"] ?></textarea>
                </div>
              </div>


            </div>


            <div class="w-100 text-right">
                <a href="admin/productos/productos.php" type="button" class="btn btn-dark " >Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Actualizar</button>
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

<!-- <script src="./js/ckeditor5-build-classic/ckeditor.js"></script>
<script src="./js/ckeditor5-build-classic/translations/es.js"></script>
<script>
  ClassicEditor
    .create( document.querySelector( '#descripcion' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script> -->

</body>

</html>