<?php
include_once ('libs/smarty.class.php');

class  viewflavors{
   
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function view_flavors( $flavors, $recipes){
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->assign('recipes',$recipes);
    $this ->  smarty->display('templates/flavors.tpl');
  }
  function  home_pag ($flavors ){
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->display('templates/index.tpl');
  }
  function viewrecipes($flavors ,$recipes ,$flavor){
    $this ->  smarty->assign('title', $flavor['nombre']);
    $this ->  smarty->assign('recipes',$recipes);
    $this ->  smarty->assign('flavors',$flavors);
    $this ->  smarty->display('templates/recipes.tpl');
  }
}
 
?>