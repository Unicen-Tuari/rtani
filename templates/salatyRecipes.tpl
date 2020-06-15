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
               <a  href="pag_sweet">Recetas Dulces</a>
               <a href="pag_salaty"> Recetas Saladas</a>
               <a href="pag_subscription">Suscribirme</a>
         </nav>
    </div>

    <h2 class="tipo">  Recetas Saladas</h2>
    {foreach from=$recetas item=$receta}
    {if $receta['categoria'] eq "Salada"}


    <div class="receta">
        <h3 class="recetanombre">{$receta['titulo']}</h3>
        <img class="imagen" src="images/imagen-no-encontrada.jpg" alt="foto de tarta">
        
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
    {/if}
    {/foreach}
    <div class="receta">
    <h3 class="recetanombre">Buñuelos de espinaca </h3>
    <img class="imagen" src="images/bunuelos.jpg" alt="foto de buñuelos">
    <div class="ingrediente">
        <h4>Ingredientes:</h4> 
            <ul>
                <li>300 g de espinacas </li>
                <li>200g de harina</li>
                <li>4 huevos</li>
                <li>100g de queso </li>
                <li> Ajo en polvo </li>
                <li>Aceite</li>
            </ul>
    </div>
     
    <h4 class="pasos">Pasos a seguir:</h4>
    <ol>
        <li>Cortamos las espinacas, en juliana fina, enrollando o juntando un montoncito de hojas cada vez,
            si no tienes un cuchillo que corte bien también puedes hacerlo con unas tijeras</li>
        <br>
        <li>En un recipiente hondo, mezclamos la harina, los huevos, el parmesano rallado, el ajo, la sal,
            la pimienta y agregamos la espinaca cruda. 
        </li>
        <br>
        <li>Ponemos una sartén con abundante aceite caliente, hacemos montoncitos de la mezcla y 
            los freímos hasta que estén dorados.  Escurrimos sobre papel de cocina.</li>
        <br>
        <li>Emplatamos y acompañamos con gajos de lima y de limón.  </li>
    </ol>

    <h5>Tabla Nutricional</h5>
    <table>	
    <thead>
        <tr >
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
            <td >300g espinacas</td>
            <td>93</td>
            <td>13</td>
            <td>2</td>
            <td>11</td>
            <td>0</td>
            <td>2</td>
        </tr>
        <tr>
            <td>200g de harina</td>
            <td>648</td>
            <td>144</td>
            <td>0</td>
            <td>20</td>
            <td>28</td>
            <td>0</td>
        </tr>
        <tr>
            <td > 4 huevos</td>
            <td>676</td>
            <td>0</td>
            <td>0</td>
            <td>24,8</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td >100g de queso</td>
            <td>420</td>
            <td>0</td>
            <td>30</td>
            <td>40</td>
            <td>5</td>
            <td>0</td>
        </tr>
        <tr>
            <td >Ajo en polvo</td>
            <td>332</td>
            <td>73</td>
            <td>1</td>
            <td>17</td>
            <td>26</td>
            <td>24</td>
        </tr>
        <tr>
            <td >Aceite</td>
            <td>630</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>
    </div>
   
    <div class="receta">
    <h3 class="recetanombre">Hamburguesas de lentejas </h3>
    <img class="imagen" src="images/hamburguesas.jpg" alt="foto de Hamburguesa">
    <div class="ingrediente">	
        <h4>Ingredientes:</h4> 
            <ul>
                <li> 250 gr de lentejas </li>
                <li> 50 gr de harina de trigo integral </li>    
                <li>1 cebolla</li>
                <li>3 dientes de ajo picados </li>
                <li>1 zanahoria rallada </li>   
                <li> Perejil picado  </li>
            </ul>
    </div>

     <h4 class="pasos">Pasos a seguir:</h4>
    <ol>
        <li>Poner las lentejas de remojo durante unas 4 o 5 horas.</li>
            <br>
        <li>Cocer las lentejas en agua caliente con sal y cuando estén tiernas, sacarlas del fuego y 
            colarlas para quitarles todo el líquido.</li>
            <br>
        <li>Cuando las lentejas estén secas, verterlas en un bol y con la ayuda de un tenedor, 
            batidora o un procesador de alimentos, batir las lentejas hasta conseguir una pasta. Nosotros hemos preferido no batirlas tanto y dejar algunas lentejas enteras. Claro que todo depende del 
            gusto de cada persona.</li>
            <br>
        <li>En otro bol, mezclar la cebolla y los ajos muy bien picados, la zanahoria rallada, la sal, el perejil y la harina. </li>
            <br>
        <li>Verter esta mezcla a la pasta de lentejas y mezclar bien para que se forme una masa. Reservar la masa por unos minutos.</li>
            <br>
        <li>Mientras tanto, poner aceite para calentar en una sartén.</li>
            <br>
        <li>Formar las hamburguesas con la mano. Si ves necesario, pasarlas por pan rallado o harina.</li>
            <br>
        <li>Freír las hamburguesas por ambos lados hasta que tenga un color dorado, a fuego medio para no quemarlas.</li>
    </ol>
    
    <h5>Tabla Nutricional</h5>
    <table>	
    <thead>
        <tr >
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
            <td>250g de lentejas </td>
            <td>760</td>
            <td>100</td>
            <td>5</td>
            <td>58</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td > 50g harina integral</td>
            <td>170/td>
            <td>36</td>
            <td>1,5</td>
            <td>6,5</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td >1 cebolla</td>
            <td>40</td>
            <td>9</td>
            <td>0</td>
            <td>1</td>
            <td>4</td>
            <td>4</td>
        </tr>
        <tr>
            <td >Ajo </td>
            <td>13</td>
            <td>3</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td >zanahoria</td>
            <td>60</td>
            <td>12</td>
            <td>0</td>
            <td>2</td>
            <td>130</td>
            <td>0</td>
        </tr>
        <tr>
            <td >perejil</td>
            <td>45</td>
            <td>3</td>
            <td>1</td>
            <td>3</td>
            <td>33</td>
            <td>1</td>
        </tr>
    </table>
    </div>
      
    <div class="receta">
    <h3 class="recetanombre" >Mac and chese</h3>
    <img class="imagen" src="images/mac.jpg" alt="foto de mac and chese">
    <div class="ingrediente">	
        <h4>Ingredientes:</h4> 
        <ul>
            <li> 4 cucharadas de mantequilla</li>
            <li> 1/4 taza de harina </li>    
            <li>2 tazas de leche </li>
            <li>1 libra de pasta </li>
            <li> 100g de queso </li>   
        </ul>
    </div>
        
    <h4 class="pasos">Pasos a seguir:</h4>
        <ol>
            <li>Hervir una olla grande de agua, salarla, cocinar la pasta de acuerdo con las instrucciones del paquete,
                 al dente. Escurra la pasta una vez que esté cocida y reserve. 
                Trabaja en el siguiente paso mientras se cocina la pasta.</li>
                <br>
            <li>Mientras tanto, en una sartén mediana sobre la mantequilla derretida a fuego medio, agregue la harina y el condimento italiano y bata durante unos 2 minutos para cocinar el sabor 'harina-y'. Agregue la leche y continúe batiendo ocasionalmente, permitiendo que la mezcla se espese. 
                Agregue los quesos y bata hasta que estén completamente combinados.</li>
                <br>
            <li>Cuando las lentejas estén secas, verterlas en un bol y con la ayuda de un tenedor, 
                batidora o un procesador de alimentos, batir las lentejas hasta conseguir una pasta. Nosotros hemos preferido no batirlas tanto y dejar algunas lentejas enteras. Claro que todo depende del 
                gusto de cada persona.</li>
                <br>
            <li>Vierta la salsa de queso sobre la pasta colada y revuelva para combinar. La salsa se espesa cuando se asienta.</li>
            <br>
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
                    <td >4 tazas de manteca </td>
                    <td>29,6</td>
                    <td>0</td>
                    <td>3,36</td>
                    <td>0</td>
                    <td>5,6</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td >1/4 taza de harina </td>
                    <td>105</td>
                    <td>36</td>
                    <td>0,5</td>
                    <td>2,8</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2 tazas de leche </td>
                    <td>260</td>
                    <td>20</td>
                    <td>14</td>
                    <td>12</td>
                    <td>260</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td > 1 libra de pasta</td>
                    <td>1680/td>
                    <td>480</td>
                    <td>4</td>
                    <td>80</td>
                    <td>24</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td >100g queso</td>
                    <td>420</td>
                    <td>0</td>
                    <td>30</td>
                    <td>40</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
    </table>
    </div>
 
    <div class="receta">
    <h3 class="recetanombre" >Tortilla de Papas</h3>
    <img class="imagen" src="images/tortilla.jpg" alt="foto de tortilla">
    <div class="ingrediente">	
        <h4>Ingredientes:</h4> 
        <ul>
            <li>6 huevos </li>
            <li> 1 kilo de papas </li>    
            <li>1 cebolla </li>
            <li>aceite</li>
        </ul>
    </div>
  
    <h4 class="pasos">Pasos a seguir:</h4>
    <ol>
        <li>Lavar y cortas las papas en cubo (o como desee), luego freír. Es IMPORTANTE que el aceite para freír las papas esté bien 
          caliente para que las papas no queden empapadas con aceite (UTILIZAR PAPEL ABSORBENTE)</li>
          <br>
        <li>Rehogar la cebolla, agregar una pizca de sal para que no se quemen los ingredientes.</li>
          <br>
        <li>Luego batir los huevos, agregar las cebolla , integrar las papas y condimentar con sal y pimienta.</li>
          <br>
        <li>Precalentar una sartén con aceite, agregar la mezcla y cocinar 5 minutos de cada lado.</li>
        <br>
    </ol>
      
    <h5>Tabla Nutricional</h5>
    <table>	
        <thead>
            <tr >
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
                <td >1 kilo de papas  </td>
                <td>860</td>
                <td>200</td>
                <td>1</td>
                <td>17</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td >1 cebolla</td>
                <td>40</td>
                <td>9</td>
                <td>0</td>
                <td>1</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr>
                <td>6 huevos </td>
                <td>1352</td>
                <td>0</td>
                <td>0</td>
                <td>9,6</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td >aceite</td>
                <td>630</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
    </table>
    </div>

    <div class="receta">
    <h3 class="recetanombre" >Albondigas</h3>
    <img class="imagen" src="images/albondigas.jpg" alt="foto de albondigas">
   <div class="ingrediente">	
        <h4>Ingredientes:</h4> 
        <ul>
            <li>1/2 kilo de carne </li>
            <li> 2 huevos </li>    
            <li> Pan rallaso </li>
            <li>aceite</li>
            </ul>
    </div>
  
    <h4 class="pasos">Pasos a seguir:</h4>
    <ol>
        <li>Colocar en un bowl u olla la carne molida y los dos huevos</li>
          <br>
        <li>Condimentar a gusto y agregar el pan rallado </li>
          <br>
        <li>Sacar con la mano y hacer bolitas, la preparacion te rinde para 18 en total pero siempre dependerá del tamaño que les des. 
          Fritarlas en abundante aceite.</li>
          <br>
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
                <td >1/2 kilo de carne  </td>
                <td>850</td>
                <td>0</td>
                <td>50</td>
                <td>100</td>
                <td>330</td>
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
                <td>Pan rallado  </td>
                <td>395</td>
                <td>72</td>
                <td>5</td>
                <td>13</td>
                <td>732</td>
                <td>6</td>
            </tr>
    </table>|
    </div> 
</body> 
</html>