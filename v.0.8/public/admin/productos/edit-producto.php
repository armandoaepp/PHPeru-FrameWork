<?php
    require_once "../sesion_admin.php";
    loginRedirect('../login.php');

    $id = !empty($_GET['id']) ? $_GET['id'] : 0  ;

    if($id <= 0){
      header("Location: ./marcas.php ", true, 301);
    }
    require_once "../../api/autoload.php";

    // require_once "../../api/model/ClsConexion.php";

  # Marcas
    // require_once "../../api/model/Marca.php";
    // require_once "../../api/controller/MarcaController.php";

    $marca_controller = new MarcaController();

    $marcas = $marca_controller->list();

  #Categorias
    // require_once "../../api/model/Categoria.php";
    // require_once "../../api/controller/CategoriaController.php";

    $categoria_controller = new CategoriaController();

    $categorias = $categoria_controller->list();

  #Producto
    // require_once "../../api/model/Producto.php";
    // require_once "../../api/model/ProductoDetalle.php";
    // require_once "../../api/controller/ProductoController.php";

    $producto_controller = new ProductoController();

    $params_pro = array(
        'idproducto' => $id ,
    );

  // $producto = $producto_controller->productoById($params_pro);
  $data = $producto_controller->productoDetalle($params_pro);
  if(empty($data)){
    echo "<h1> El Producto no existe </h1>" ;
  }

    $producto         = $data['producto'] ;
    $producto_detalles = $data['producto_detalle'] ;
    // echo '<pre>' ;
    // print_r($data) ;
    // echo '</pre>' ;


?>

<?php $title_page = "Proyecto" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array('titulo' => 'Editar '.$title_page.' | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/productos/productos.php"><?php echo $title_page ?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar <?php echo $title_page ?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar <?php echo $title_page ?> </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="admin/productos/editar.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ; ?>">

            <div class="row">
              <div class="col-sm-6 col-lg-5">
                <div class="form-group">
                  <label for="producto">Nombre </label>
                  <input type="text" class="form-control" name="producto" id="producto" required placeholder="nombre" value="<?php echo $producto["nombre"] ?>">
                </div>
              </div>

              <!-- <div class="col-sm-6 col-lg-2">
                <div class="form-group">
                  <label for="precio">Precio </label>
                  <input type="number" class="form-control" name="precio" id="precio" required placeholder="Precio" value="<?php echo $producto["precio"] ?>">
                </div>
              </div> -->

              <!-- <div class="col-sm-6 col-lg-4">
                <div class="form-group">
                  <label for="modelo">Modelo </label>
                  <input type="text" class="form-control" name="modelo" id="modelo"  placeholder="Modelo" value="<?php echo $producto["modelo"] ?>">
                </div>
              </div> -->

              <!--  <div class="col-sm-6 col-lg-4">
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
              </div> -->

              <!-- <div class="col-sm-6 col-lg-4">
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
              </div> -->

              <div class="col-sm-6 col-lg-4">
                <label for="categoria"> <br> </label>
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
              <!-- publicar -->
              <div class="col-sm-6 col-lg-3">
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
              <!-- Descripción  -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripción </label>
                  <textarea class="ckeditor form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción"><?php echo $producto["descripcion"] ?> </textarea>
                </div>
              </div>



              <!-- <div class="col-12 mb-1">
                <div class="row border-bottom pb-1">
                  <div class="col-6 pt-3">
                    Imagen
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-dark btn-sm lh-1" id="addImg" title="Agregar nueva imagen">
                      <i class="material-icons">add</i>
                    </button>
                  </div>
                </div>
              </div> -->

              <!-- <div class="col-12" id="imgContent">
                <div class="form-group">
                  <label for="imagen" class="sr-only">Imagen </label>
                  <input type="file" class="form-control" name="imagen[]" id="imagen" required placeholder="Imagen" accept="image/*">
                </div>
              </div> -->

            </div>

            <div class="w-100 text-right">
              <a href="admin/productos/productos.php" type="button" class="btn btn-dark ">Cancelar</a>
              <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
            </div>

          </form>
        </div>
        <!-- imagenes detalle -->
        <div class="col-12 mt-3 mt-md-5">
            <div class="row border-bottom pb-1">
              <div class="col-6 pt-3">

              </div>
              <div class="col-6 text-right">
                 <a href="admin/productos/edit-detalle.php?id=<?php echo $id ; ?>">Editar Imagenes </a>
              </div>
            </div>
          </div>
        <div class="col-12 mb-3">
          <div class="row my-2">
              <?php
                foreach ($producto_detalles as &$detalle) {
              ?>
                <div class="col-6 col-sm-2 mb-3">
                  <!-- <img src="<?php echo $detalle["imagen"] ?>" class="img-fluid mb-1"> -->
                  <a href="<?php echo $detalle["imagen"] ?>" data-fancybox="gallery" data-caption="Caption for single image">
                    <img src="<?php echo $detalle["imagen"] ?>" class="img-fluid " alt="" />
                  </a>
                </div>

              <?php
                }
              ?>
          </div>
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

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</body>

</html>