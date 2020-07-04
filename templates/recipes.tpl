{include file="header_recetas.tpl"}
   <h2 class="tipo"> {{$title}}</h2>
   
   {foreach from=$recipes item=recipe}
   <div class="receta">
        <h3 class="recetanombre">{$recipe['titulo']}</h3>
        <img class="imagen" src="images/imagen-no-encontrada.jpg" alt="foto no encontrada">
    
        <div class="ingrediente">	
            <h4>Ingredientes:</h4> 
            <ul>
                <li>{$recipe['ingrediente']}</li>
            </ul>
        </div>

        <h4 class="pasos">Pasos a seguir:</h4>
        <ol>
           
          
        </ol>
       
       
    </div>
{/foreach}
   
    </body> 
</html>