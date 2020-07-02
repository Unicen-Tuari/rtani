<?php
include_once ('libs/smarty.class.php');

class  recipesview{
   
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }
 
  function admin_recipes($recetas ,$categorias){
    $this ->  smarty->assign('categorias',$categorias);
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->display('templates/admin_recipes.tpl');
  }

  function Agregar_receta($categorias){
    $this ->  smarty->assign('categorias',$categorias);
    $this ->  smarty->display('templates/Agregar_receta.tpl');
  }
    function misrecetas($categoria ,$recetas){
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->assign('categoria',$categorias);
    $this ->  smarty->display('templates/index.tpl');
  }
  
  function pag_subscription ( $recetas , $categorias){
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->assign('categorias',$categorias);
    $this ->  smarty->display('templates/subscription.tpl');
  }
  
}
 
?>