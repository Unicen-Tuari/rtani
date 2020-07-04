<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mis recetas</title>
    <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="css/style.css">
</head>
<body>
 <div class="encabezado">
        <img class="logo "src="images/logo.png" alt="foto del logo">
        <h1> Mis Recetas</h1>
        <nav>
            <a  href="home_pag">Inicio</a>
            <a href="pag_subscription">Suscribirme</a>
            {foreach from= $flavors item=$flavor}
            <a  href="flavors/{$flavor['id_flavor']}">{$flavor['name']|capitalize}</a>
            {/foreach}     
         </nav>
    </div>
