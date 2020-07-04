<?php
require_once "recipesview.php";
require_once "recipesmodel.php";
require_once "flavors/flavorsmodel.php";

class recipescontroller {

  private $view;
  private $model;
  private $flavors_model ;

  function __construct (){
    $this ->  view = new recipesview () ;
    $this ->  model = new recipesmodel();
    $this -> flavors_model = new flavorsmodel ();

    session_start();
  if(!isset($_SESSION["nombre"])){ 
          header("Location: login");
          die();
        }else{ 
          if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) { 
            header("Location: logout");
            die();
          } 
          $_SESSION['LAST_ACTIVITY'] = time();
         
        }
  }
   
  function admin_recipes($member = null){
    $recipes=$this -> model -> get_recipes();
    $flavors= $this -> flavors_model -> get_flavor();
    $this ->  view -> admin_recipes ( $recipes , $flavors);
  }
    function myrecipes ($member = null){
    $recipes=$this -> model -> get_recipes();
    $flavors= $this -> flavors_model ->  get_flavor();
     $this ->  view -> myrecipes($recipes ,$flavors);
  }
     
   function delete_recipe ($params){
    $this->model->  deleterecipe ($params[0]);
    header ("location: ../home");
  }
    function finish ($params){
    $this->model-> finish_recipe ($params[0]);
    header ("location: ../home");
  }
      
  function insert_recipe($member = null){
    $flavors = $this-> flavors_model-> get_flavor();
    $this -> view ->insert_recipe ($flavors);
  }
    
  function insert (){
    $this-> model-> insertrecipes($_GET["name"],$_GET["ingredient"] , $_GET["flavor"],$_GET["step"]);
    header ("location: home");
 }
    function   pag_subscription ($member = null){
    $flavors = $this-> flavors_model-> get_flavor();
    $recipes=$this -> model -> get_recipes();
    $this ->  view ->   pag_subscription( $recipes ,$flavors );
  }
}
 ?>