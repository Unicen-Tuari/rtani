<?php
include_once ('libs/smarty.class.php');

class  viewcategoria{
   
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function view_categorias( $categorias, $recetas){
    $this ->  smarty->assign('categoria',$categorias);
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->display('templates/categoria.tpl');
  }
  function  home_pag ($categorias ){
    $this ->  smarty->assign('categoria',$categorias);
    $this ->  smarty->display('templates/index.tpl');
  }
  function viewrecetas($categorias ,$recetas ,$categoria){
    $this ->  smarty->assign('titulo', $categoria['nombre']);
    $this ->  smarty->assign('recetas',$recetas);
    $this ->  smarty->assign('categorias',$categorias);
    $this ->  smarty->display('templates/recetas.tpl');
  }
}
 
?>