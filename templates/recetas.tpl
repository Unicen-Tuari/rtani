<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mis recetas</title>
    <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="../css/style1.css">
    <base href="{BASE_URL}">
</head>
<body>
 <div class="encabezado">
        <img class="logo "src="images/logo.png" alt="foto del logo">
        <h1> Mis Recetas</h1>
        <nav>
            <a  href="home_pag">Inicio</a>
            <a href="pag_subscription">Suscribirme</a>
            {foreach from= $categorias item=$categoria}
            <a  href="categorias/{$categoria['id_categoria']}">{$categoria['nombre']|capitalize}</a>
            {/foreach}     
         </nav>
    </div>
   <h2 class="tipo"> {{$titulo}}</h2>
   
   {foreach from=$recetas item=receta}
   <div class="receta">
        <h3 class="recetanombre">{$receta['titulo']}</h3>
        <img class="imagen" src="images/imagen-no-encontrada.jpg" alt="foto no encontrada">
    
        <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
                <li>{$receta['ingrediente']}</li>
            </ul>
        </div>

        <h4 class="pasos">Pasos a seguir:</h4>
        <ol>
           
          
        </ol>
       
       
    </div>
{/foreach}
   
    </body> 
</html>