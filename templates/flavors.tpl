<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Backend Mis recetas </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="images/logo.png">
    <!-- Custom styles for this template -->
    <link href="css/css.boostrap.css" rel="stylesheet">
    <base href="{BASE_URL}">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Mis recetas</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                     <a href ='logout'class="nav-link">Salir del perfil</a>
                       </a>
            </li>
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
                            <a class="nav-link" href="flavors">
                                <span data-feather="award"></span>
                                Categorias
                            </a>
                        </li>
  <li class="nav-item">
                            <a class="nav-link" href="home_pag">
                                <span data-feather="home"></span>
                                Home Mis  Recetas
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
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>id_categoria</th>
                                    <th>Nombre Categoria</th>
                                    <th>Acciones</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
    
                                {foreach from= $flavors item=$flavor}
    
                                <tr>
    
                                    <td>{$flavor['id_flavor']}</td>
                                    <td>{$flavor['name']}</td>
                                   
                                    <td>  
                                        <a href="removeflavors/{$flavor['id_flavor']} "><span
                                                            data-feather="delete"></span>
                                            </span></td>
                                </tr>
                            </tbody>
    
                            {/foreach}
                        </table>
                    </div>
                    <h1> Crear Categoria</h1>
                    <form action ="insert_flavors" method ="get" >
                        <div class="form-group">
                          <label for="titulo">Nombre Categoria</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="flavor">
                        </div>
                        
                        <div class="form-group">
                          <input class="btn btn-primary" type="submit" value="Crear">
                        </div>
                      </form>
                    </div>
             
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="javascript/jsadmin.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    </body>
    
    </html>