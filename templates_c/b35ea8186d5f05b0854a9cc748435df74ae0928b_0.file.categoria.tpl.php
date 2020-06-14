<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 17:00:19
  from 'C:\xampp\htdocs\vscode\rtani\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee63b8390e768_06274511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35ea8186d5f05b0854a9cc748435df74ae0928b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\categoria.tpl',
      1 => 1592146815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee63b8390e768_06274511 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Categoria Admin </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="images/logo.png">
    <!-- Custom styles for this template -->
    <link href="css/css.boostrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Mi Diario</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" data-toggle="collapse" href="#profile" role="button" aria-expanded="false" aria-controls="profile">
                 Rosario Tani 
                  </a>
            </li>    
            <div class="collapse" id="profile">
                <div>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" > Mi Perfil</a>
                        <a class="nav-link" > Sign out</a>
                    </li> 
                </div>
            </div>
        </ul>
    </nav>

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
                            <a class="nav-link" href="categoria">
                                <span data-feather="award"></span>
                                Categorias
                            </a>
                        </li>
                         <li class="nav-item">
              <a class="nav-link" href="home_pag">
                <span data-feather="award"></span>
                Home Mis Recetas
              </a>
            </li>
                       </ul>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Categorias</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                       
                    </div>
                </div>
                <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Recetas Dulces</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                       
                       
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'receta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['receta']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['receta']->value['categoria'] == "Dulce") {?>
                          <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['titulo'];?>
</td>
                                 </tr>
                        </tbody>
 <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      
                    </table>
                    
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                               
                                <th>Recetas Saladas</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                       
                       
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'receta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['receta']->value) {
?>
                         <?php if ($_smarty_tpl->tpl_vars['receta']->value['categoria'] == "Salada") {?>
                <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['titulo'];?>
</td>
                             </tr>
                        </tbody>
 <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                    </table>
                    
                </div>
            </main>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="javascript/jsadmin.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
