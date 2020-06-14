<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 16:38:54
  from 'C:\xampp\htdocs\vscode\rtani\templates\sweetrecipes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6367e750068_01994857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afa4dd83bfccbd9529e60fdb1d0f641aefd5dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\sweetrecipes.tpl',
      1 => 1592145242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee6367e750068_01994857 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Recetas Dulces</title>
      <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href="css/style.css">
   </head>
   <body>
      <div class="encabezado">
         <img class="logo "src="images/logo.png" alt="foto del logo">
         <h1> Mis Recetas</h1>
         <nav>
               <a  href="index.html">Inicio</a>
               <a  href="SweetRecipes.html">Recetas Dulces</a>
               <a href="saltyRecipes.html"> Recetas Saladas</a>
               <a href="subscription.html">Suscribirme</a>
         </nav>
      </div>

      <h2 class="tipo">  Recetas Dulces</h2>
      <div class="receta">
         <h3 class="recetanombre">Panqueques</h3>
         <img class="imagen" src="images/panqueques.jpg" alt="foto de tarta">
         <div class="ingrediente">	
         <h4>Ingredientes:</h4> 
         <ul>
            <li>2 huevos</li>
            <li>220g harina 0000</li>
            <li>1/2 litro de leche</li>
         </ul>
      </div>

      <h4 class="pasos">Pasos a seguir:</h4>
      <ol>
         <li>Verter en un bowl los huevos y mezclar.</li>
         <br>
         <li>Agregar toda la harina, la sal y 1/4 de la leche, mezclar.</li>
         <br>
         <li>Agregar el resto de la leche y mezclar.</li>
         <br>
         <li>Cocinar en una sartén con un poco de aceite o manteca .</li>
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
               <td>2 huevos</td>
               <td>338</td>
               <td>0</td>
               <td>0</td>
               <td>12,4</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td >220g de harina 0000</td>
               <td>648</td>
               <td>144</td>
               <td>0</td>
               <td>20</td>
               <td>28</td>
               <td>0</td>
            </tr>
            <tr>
               <td >1/2 litro de leche </td>
               <td>293</td>
               <td>22,25</td>
               <td>15,86</td>
               <td>16</td>
               <td>130</td>
               <td>25,67</td>
            </tr>
      </table>
      </div>   

      <div class="receta">
         <h3 class="recetanombre">Torta de Manzana</h3>
         <img class="imagen" src="images/tortam.jpg" alt="foto de torta">
         <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
               <li>2 huevos</li>
               <li>220g harina </li>
               <li>4cda leche</li>
               <li>75 ml aceite</li>
               <li>125g azucar </li>
               <li>1 manzana </li>
            </ul>
         </div>
         
         <h4 class="pasos">Pasos a seguir:</h4>
         <ol>
            <li>Pelar las manzana y filetearla.</li>
            <br>
            <li>Hacer el caramelo en el molde y acomodar las manzanas cortadas.</li>
            <br>
            <li>Preparar el bizcochuelo. Primero batimos los huevos y el azucar. Le agregamos aceite y seguimos batiendo.
               Luego agregar la leche y harina de a poco.</li>
            <br>
            <li>Una vez lista la preparacion la volvamos en el molde acaramelado.</li>
            <br>
            <li>Cocinamos en horno a 180° por 40 minutos. Yo la cocine a baño maria para que sea mas facil desmoldarla</li>
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
               <td>2 huevos</td>
               <td>338</td>
               <td>0</td>
               <td>0</td>
               <td>12,4</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td >220g de harina</td>
               <td>648</td>
               <td>144</td>
               <td>0</td>
               <td>20</td>
               <td>28</td>
               <td>0</td>
            </tr>
            <tr>
               <td >4cda de leche </td>
               <td>36</td>
               <td>2,6</td>
               <td>1,9</td>
               <td>1,9</td>
               <td>15,75</td>
               <td>3,11</td>
            </tr>
            <tr>
               <td> 1 manzana </td>
               <td>40</td>
               <td>11</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td > 75ml aceite </td>
               <td>630</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td> 125g azucar </td>
               <td>482</td>
               <td>125</td>
               <td>0</td>
               <td>0</td>
               <td>0,6</td>
               <td>125</td>
            </tr>

      </table>
      </div>

      <div class="receta">
         <h3 class="recetanombre">Buñuelos</h3>
         <img class="imagen" src="images/buñuelos.jpg" alt="foto de buñuelos">
         <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
               <li>1 huevo</li>
               <li>2 tazas de harina </li>
               <li>1 taza de  leche</li>
               <li>aceite para freir </li>
               <li>125g azucar </li>
            </ul>
         </div>

         <h4 class="pasos">Pasos a seguir:</h4>
         <ol>
            <li>Batimos los huevos y la leche.</li>
            <br>
            <li>Agregamos de a poco la harina y vamos integrando. Hasta que quede una mezcla homogénea.</li>
            <br>
            <li>Dejamos descansar la mezcla mientras ponemos a calentar el aceite.</li>
            <br>
            <li>Freímos hasta que estén bien dorados.</li>
            <br>
            <li>Luego los podes pasar por azúcar.</li>
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
                  <td>1 huevo</td>
                  <td>169</td>
                  <td>0</td>
                  <td>0</td>
                  <td>6,2</td>
                  <td>0</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td >2 tazas de harina</td>
                  <td>845</td>
                  <td>180</td>
                  <td>4</td>
                  <td>22,5</td>
                  <td>0</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td >1 taza de leche </td>
                  <td>130</td>
                  <td>10</td>
                  <td>7</td>
                  <td>6</td>
                  <td>130</td>
                  <td>10</td>
               </tr>
               <tr>
                  <td > 75ml aceite </td>
                  <td>630</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td > 125g azucar </td>
                  <td>482</td>
                  <td>125</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0,6</td>
                  <td>125</td>
               </tr>
         </table>
      </div>

      <div class="receta">
      <h3 class="recetanombre">Tortas fritas</h3>
      <img class="imagen" src="images/fritas.jpg" alt="foto de tortas fritas">
      <div class="ingrediente">	
         <h4>Ingredientes:</h4> 
         <ul>
            <li>10g manteca</li>
            <li>2 tazas de harina </li>
            <li>aceite  </li>
            <li>125g azucar </li>
         </ul>
      </div>

      <h4 class="pasos">Pasos a seguir:</h4> 
      <ol>
         <li>Tamizar la harina, agregar la manteca (blanda, no caliente... Ojo!) y mientras agregamos agua, vamos amasando</li>
         <br>
         <li>Formar un bollo bien amasado... Dándole con ganas... Cómo esas ganas de salir de la cuarentena...
             Dejamos descansar en la heladera 20 minutos.</li>
         <br>
         <li>Estirar con palote y cortar.</li>
         <br>
         <li>Freímos hasta que estén bien doradas.</li>
         <br>
         <li>Luego los podes pasar por azúcar.</li>
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
               <td>10g de manteca </td>
               <td>7,4</td>
               <td>0</td>
               <td>0,82</td>
               <td>0</td>
               <td>0</td>
               <td>1,4</td>
            </tr>
            <tr>
               <td >2 tazas de harina</td>
               <td>845</td>
               <td>180</td>
               <td>4</td>
               <td>22,5</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td > 75ml aceite </td>
               <td>630</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
               <td>0</td>
            </tr>
            <tr>
               <td > 125g azucar </td>
               <td>482</td>
               <td>125</td>
               <td>0</td>
               <td>0</td>
               <td>0,6</td>
               <td>125</td>
            </tr>
         </table>
      </div>

      <div class="receta">
         <h3 class="recetanombre">Flan Casero</h3>
         <img class="imagen" src="images/flan.jpg" alt="foto de Flan">
         <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
               <li>5 huevos</li>
               <li>1/2 litro de leche</li>
               <li>125g azucar </li>
            </ul>
         </div>

         <h4 class="pasos">Pasos a seguir:</h4>
         <ol>
            <li>Primero hacemos el caramelo, vertemos los 100 gr de azúcar en un ollita, sartén o lo que tengas ponemos a fuego medio y 
               vamos removiendo hasta que se disuelva toda el azúcar y se haga el caramelo, a mí me gusta así de claro pero si querés un
                poquito más oscuro déjalo un ratito más solo que no se te pase.. porque el caramelo oscuro se vuelve amargo. Una vez listo 
                el caramelo rápido lo pasas al molde que va a ser para el flan vas moviéndolo hasta cubrir todo el molde con caramelo!</li>
               <br>
            <li>Ahora empezamos con el flan, ponemos en un bols los huevos y el azúcar batimos a mano o con batidora en mínimo hasta que se 
               disuelva el azúcar luego agregamos la leche fría con la esencia de vainilla o la ralladura de limón
                y batimos hasta integrar todo.</li>
               <br>
            <li>Una vez integrando todo lo ponemos sobre una fuente y le ponemos debajo una servilleta de papel y le 
               agregamos agua fría para que se cocine en el horno a baño María, la servilleta abajo sirve para evitar que el
                molde se mueva por el agua. Una vez hecho eso lo mandamos a un horno de 180 grados por unos 40 o 50 minutos o
                hasta que pinchando con un palillo este salga limpio.</li>
               <br>
            <li>Listo una vez hecho el flan dejamos enfriar a temperatura ambiente una vez frío lo mandamos a la heladera! Yo lo deje reposar 
               un día entero en la heladera para que esté lo más compacto posible.</li>
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
                  <td> 5 huevos </td>
                  <td>845</td>
                  <td>0</td>
                  <td>0</td>
                  <td>31</td>
                  <td>0</td>
                  <td></td>
               </tr>
               <tr>
                  <td >1/2 litro de leche</td>
                  <td>293</td>
                  <td>22,25</td>
                  <td>15,86</td>
                  <td>16</td>
                  <td>130</td>
                  <td>25,67</td>
               </tr>
               <tr>
                  <td > 125g azucar </td>
                  <td>482</td>
                  <td>125</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0,6</td>
                  <td>125</td>
               </tr>
         </table>
      </div>

      <div class="receta">
         <h3 class="recetanombre">Torta de ricota</h3>
         <img class="imagen" src="images/torta.jpg" alt="foto de tortas fritas">
         <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
               <li>400g de ricota</li>
               <li>1/2 kilo de harina </li>
               <li>3 huevos  </li>
               <li>250g azucar </li>
               <li>100g de manteca </li>
            </ul>
         </div>

         <h4 class="pasos">Pasos a seguir:</h4>
         <ol>
            <li>En un bols batir la manteca blanda con el azúcar y sal hasta blanquear, agregar el huevo y clara,  mezclar.
                Sobre mesada colocar la harina con el polvo de hornear, en el centro agregar la mezcla anterior. 
                Unir todo hasta que quede una masa tierna pero que no se pegue en los dedos. 
               (Contar con harina extra sólo si es necesario) Tapar con papel film y guardar en heladera por 30 minutos.</li>
               <br>
            <li>Para el relleno; en un bols colocar la ricota muy bien escurrida, lazúcar,  huevo y clara .Unir todo sin batir.</li>
               <br>
            <li>Estirar con palote y cortar.</li>
               <br>
            <li>Estirar 2/3 de la masa en un molde (N°24) enmantecado y enharinado cubrir base y borde de la tartera. Rellenar con la mezcla de ricota, pintar con huevo batido los bordes, 
               estirar el tercio restante de masa y cubrir presionando con los dedos, los bordes. Pincelar con huevo batido..</li>
            <br>
            <li>Cocinar en horno precalentado a 170° por 45-50 minutos. Dejar enfriar antes de desmoldar. 
               Yo usé molde desmontable por eso pincelé con huevo batido. 
               Usando el otro molde, espolvorear con azúcar impalpable cuando esté bien fría.</li>
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
                  <td>10Og de manteca </td>
                  <td>740</td>
                  <td>0</td>
                  <td>82</td>
                  <td>0</td>
                  <td>140</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td >1/2 kilo de harina</td>
                  <td>1690</td>
                  <td>360</td>
                  <td>8</td>
                  <td>45</td>
                  <td>0</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td > 3 huevos </td>
                  <td>202,8</td>
                  <td>0</td>
                  <td>0</td>
                  <td>18,6</td>
                  <td>0</td>
                  <td>0</td>
               </tr>
               <tr>
                  <td > 250g azucar </td>
                  <td>964</td>
                  <td>250</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1,25</td>
                  <td>250</td>
               </tr>
               <tr>
                  <td > 400gr de ricota </td>
                  <td>560</td>
                  <td>16</td>
                  <td>32</td>
                  <td>48</td>
                  <td>1128</td>
                  <td>0</td>
               </tr>
         </table>
      </div>
   </body> 
</html> <?php }
}
