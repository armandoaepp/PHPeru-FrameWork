<?php

    require_once "../sesion_admin.php";

    loginRedirect("../login.php");

    // require_once "../../app/autoload.php";

    // $admision_controller = new AdmisionController();

    // $data = $admision_controller->list();

    // $title_page = "admisions"

?>
<html lang="es">
  <head>
    <?php
      $setvar = array("titulo" => $title_page." | Admin ", "follow" => "", "active" => [1, 1]);
      require_once "../layout/head_links.phtml";
    ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  </head>

  <body>
    <?php require "../layout/header.phtml"; ?>
    <main role="main" class="screen-main">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="admin">
                    <i class="material-icons">home</i>
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a href="admin/productos/productos.php"><?php echo $title_page ?></a>
            </li>
        </ol>
    </nav>
   </main>


  </body>
<div id="div_admision">
<form id="frm_admision" name="frm_admision" class="hform"  ng-submit="updAdmision()">
<table class="table" >
 <caption>LISTA DE ADMISION </caption>
<thead>
    <tr>
        <th>Id </th>
        <th>Titulo </th>
        <th>Imagen </th>
        <th>Requisitos </th>
        <th>Horarios </th>
        <th>Inversion </th>
        <th>Email </th>
    </tr>
</thead>
<tbody>
    <tr ng-repeat="admision in admisions">
        <th>admision.id </th>
        <th>admision.titulo </th>
        <th>admision.imagen </th>
        <th>admision.requisitos </th>
        <th>admision.horarios </th>
        <th>admision.inversion </th>
        <th>admision.email </th>
    </tr>
</tbody>

</table>
</form>
</div>