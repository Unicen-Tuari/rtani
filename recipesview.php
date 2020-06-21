<?php
include_once ('libs/smarty.class.php');
class  recipesview{
   
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

   
      function admin_recipes($recetas){
        $this ->  smarty->assign('recetas',$recetas);
        $this ->  smarty->display('templates/admin_recipes.tpl');
    }
    function Agregar_receta( ){
  $this ->  smarty->display('templates/Agregar_receta.tpl');
}
    function categoria( $categorias){
    $this ->  smarty->assign('categoria',$categorias);
    $this ->  smarty->display('templates/categoria.tpl');
}
function  home_pag ( ){
  
    $this ->  smarty->display('templates/index.tpl');
}
function pag_salaty ( $recetas ){
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->display('templates/salatyRecipes.tpl');
}
function pag_sweet ( $recetas ){
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->display('templates/sweetRecipes.tpl');
}
function pag_subscription ( $recetas ){
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->display('templates/subscription.tpl');
}


}
 
 ?>