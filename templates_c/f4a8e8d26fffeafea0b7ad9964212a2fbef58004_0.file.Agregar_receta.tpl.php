<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 05:34:57
  from 'C:\xampp\htdocs\vscode\rtani\templates\Agregar_receta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee59ae1002145_08921390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a8e8d26fffeafea0b7ad9964212a2fbef58004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\Agregar_receta.tpl',
      1 => 1592105690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee59ae1002145_08921390 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
     <title>Backend Mis recetas </title>
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="icon" href="images/logo.png">
<!-- Custom styles for this template -->
    <link href="css/css.boostrap.css" rel="stylesheet">
  </head>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="home">
                <span data-feather="book"></span>
                Recetas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="award"></span>
                Categorias
              </a>
            </li>
           </ul>
        </nav>
        <div class="col-sm">
          <h1>Crear Receta</h1>
          <form action ="insertarReceta" method ="get" >
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Receta">
            </div>
            <div class="form-group">
              <label for="ingrediente">ingrediente</label>
              <textarea class="form-control" id="ingrediente" name="ingrediente" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="categoria">categoria</label>
              <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria">
            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Crear">
            </div>
          </form>
        </div>
        </div>
  </div>
    </div>
      </main>
    </div>
  </div>
          <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="javascript/jsadmin.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
        </body>
  </html><?php }
}
