<?php
include_once ('libs/smarty.class.php');
class  recipesview{
   
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

        function mirar_receta ( $receta){
         $this -> smarty->assign('receta',$receta);
         $this -> smarty->display('templates/receta.tpl');
      
      
      }
      function admin_recipes($recetas){
        $this ->  smarty->assign('recetas',$recetas);
        $this ->  smarty->display('templates/admin_recipes.tpl');
    }
    function Agregar_receta( ){
  
        $this ->  smarty->display('templates/Agregar_receta.tpl');
}
   }

   ?>