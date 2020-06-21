<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Recetas Saladas </title>
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
               {foreach from=$categorias item=$categoria}
               <a  href="/categoria/{$categoria['id_categoria']}">{$categoria['nombre']}</a>
               {/foreach}
              
               <a href="pag_subscription">Suscribirme</a>
         </nav>
    </div>

    <h2 class="tipo"> {{$titulo}}</h2>
    {foreach from=$recetas item=$receta}
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
            <li>Para la masa, colocar la manteca a temperatura ambiente, sin que se derrita, con el azúcar, 
                los huevos, la sal.  Ir mezclando y añadir la harina.</li>
                <br>
            <li>Amasar hasta obtener un bollo liso y guardar en la heladera envuelto en 
                un papel film o bolsa mientras se prepara el relleno.</li>
                <br>
            <li>Para el relleno, rehogar la cebolla en aceite junto al tomate y el morrón. 
                Luego agregar el choclo y el resto de los ingredientes</li>
                <br>
            <li>Enmantecar la tartera y extender la masa sobre el film para pasarlo fácilmente. Colocar el relleno y 
                llevar al horno precalentado alrededor de 20 minutos,la idea es que la masa no se endurezca. </li>
        </ol>
       
        <h5>Tabla Nutricional</h5>
        <table>
            <thead>
                <tr>
                    <th>Ingredientes</th>
                    <th>Calorías</th>
                    <th>Carbohidratos</th>
                    <th>Grasas</th>
                    <th>Proteínas</th>
                    <th>Sodio</th>
                    <th>Azúcar</th>
                </tr>
            </thead>
                <tr>
                    <td>280g de harina</td>
                    <td>826</td>
                    <td>183</td>
                    <td>0</td>
                    <td>28</td>
                    <td>34,72</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td >100g de manteca</td>
                    <td>740</td>
                    <td>0</td>
                    <td>82</td>
                    <td>0</td>
                    <td>140</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td >2 huevos</td>
                    <td>338</td>
                    <td>0</td>
                    <td>0</td>
                    <td>12,4</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td >4 Cda de azucar</td>
                    <td>385</td>
                    <td>40</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0,5</td>
                    <td>140</td>
                </tr>
                <tr>
                    <td>1 lata de choclo</td>
                    <td>107</td>
                    <td>19</td>
                    <td>2</td>
                    <td>4</td>
                    <td>386</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Cebolla</td>
                    <td>40</td>
                    <td>9</td>
                    <td>0</td>
                    <td>1</td>
                    <td>4</td>
                    <td>4</td>

                </tr>
        </table>
    </div>

    {/foreach}
    </body> 
</html>