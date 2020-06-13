<?php
require_once('data.php');
require_once('libs/Smarty.class.php');

function admin_recipes($member = null){

        $recetas= obtener_receta();
        $smarty = new Smarty();
        $smarty->assign('recetas',$recetas);
    
        $smarty->display('templates/admin_recipes.tpl');
    

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

  $recetas= obtener_receta();
  $smarty = new Smarty();
  $smarty->assign('receta',$receta);

  $smarty->display('templates/receta.tpl');


}
?>
  