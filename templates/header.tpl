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
                                <span data-feather="book-open"></span>
                                Recetas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flavors/">
                                <span data-feather="file-text"></span>
                                Sabores
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

          