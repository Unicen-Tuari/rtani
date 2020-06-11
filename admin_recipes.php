<!doctype html>
<html lang="en">
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
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Mis recetas</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
     <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Rosario Tani
      </a>
    </li>
   
    <div class="collapse" id="collapseExample">
      <div >
        <li class="nav-item text-nowrap">
          <a class="nav-link"> Mi perfil</a>
           <a class="nav-link">Salir de mi perfil</a>
         </li>
      </div>
    </div>
  </ul>
</nav>
<?php
include_once('data.php');
function admin_recipes($member = null){

?>

  
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
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
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
         </ul>
      </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Recetas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          <a href="insert"> <button type="button" class="btn btn-light">Nueva Receta</button> </a >
          </div>
        
        </div>
      </div>
   <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id_receta</th>
              <th>Receta</th>
              <th>categoria</th>
              <th>finalizada</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            
            <?php 
            $recetas= obtener_receta();
              foreach ($recetas as $receta)
             {
         '<tr>';
          echo '<td>'.$receta['id_receta'].'</td>';
           echo '<td>'.$receta['titulo'].'</td>';
           echo '<td>'.$receta['categoria'].'</td>';
           echo '<td>'.$receta['finalizada'].'</td>';
          
      ?>   
             <td><a href="mirar/ <?php echo $receta['id_receta'] ;?> "><span data-feather="eye">
             <a href="finalizar/ <?php echo $receta['id_receta'] ;?> "><span data-feather="check"></span>
                <a href="borrarReceta/ <?php echo $receta['id_receta'] ;?> "><span data-feather="delete"></span>
              </span></td>
            </tr>
            </tbody> 
            <?php
        }
        ?> 
        </table>
      </div>
    </main>
  </div>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="javascript/jsadmin.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
</html>
<?php
}
function borrarReceta ($params){
  
  eliminarReceta ($params[0]);
  header ("location: ../home");
}
function finalizar ($params){
  
  fin_receta ($params[0]);
  header ("location: ../home");
}
function mirar_receta ($params){
  $receta= obtenerreceta($params[0]);

  ?>
   <h1><?echo $receta['titulo'];?> </h1>
   <h2><? echo $receta['ingrediente'];?> </h2>
   
  

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="javascript/jsadmin.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
</html>
<?php

}
?>
  
