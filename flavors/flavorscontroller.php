<?php
require_once "flavorsmodel.php";
require_once "viewflavors.php";
require_once "recipes/recipesmodel.php";


class flavorscontroller {
    private $view ;
    private $model ;
    private $model_recipes;

    function __construct (){
        $this ->  view = new viewflavors () ;
        $this ->  model = new flavorsmodel();
        $this -> model_recipes = new recipesmodel();

}
function  view_flavors ($member = null){
    $recipes=$this -> model_recipes -> get_recipes();
    $flavors= $this -> model -> get_flavor();
    $this ->  view -> view_flavors( $flavors, $recipes);
  }
  function home_pag( $member=null ){
    $flavors= $this -> model -> get_flavor();
    $this ->  view ->  home_pag ($flavors );
  }
   function viewrecipes ($params){
    $recipes = $this->model-> get_recipe_by_flavors($params[0]);
    $flavor =$this->model->  getflavor($params[0]);
    $flavors = $this->model-> get_flavor();
    $this ->  view -> viewrecipes($flavors ,$recipes ,$flavor);
  }
  function deleteflavors ($params){
    $this->model->  delete_flavors($params[0]);
    header ("location: ../flavors");
  }
  function insertflavor (){
    $this-> model-> insert_flavor($_GET["id_flavor"],$_GET["name"]);
    header ("location: flavors");
  }
    
    

}
?>

