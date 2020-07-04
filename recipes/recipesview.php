<?php
include_once ('libs/smarty.class.php');

class  recipesview{
   
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }
 
  function admin_recipes($recipes ,$flavors){
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->assign('recipes',$recipes);
    $this ->  smarty->display('templates/admin_recipes.tpl');
  }

  function insert_recipe($flavors){
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->display('templates/Agregar_receta.tpl');
  }
    function myrecipes($flavors ,$recipes){
    $this ->  smarty->assign('recipes',$recipes);
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->display('templates/index.tpl');
  }
  
  function pag_subscription ( $recipes , $flavors){
    $this ->  smarty->assign('recipes',$recipes);
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->display('templates/subscription.tpl');
  }
  
}
 
?>