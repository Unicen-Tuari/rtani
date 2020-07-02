<?php
require_once "recipesview.php";
require_once "recipesmodel.php";
require_once "categorias/categoriamodel.php";

class recipescontroller {

  private $view;
  private $model;
  private $categoria_model ;

  function __construct (){
    $this ->  view = new recipesview () ;
    $this ->  model = new recipesmodel();
    $this -> categoria_model = new categoriamodel ();

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
    $recetas=$this -> model -> obtener_receta();
    $categorias= $this -> categoria_model -> obtener_categoria();
    $this ->  view -> admin_recipes ( $recetas , $categorias);
  }
    
  
      
  function misrecetas ($member = null){
    $recetas=$this -> model -> obtener_receta();
    $categorias= $this -> categoria_model ->  obtener_categoria();
     $this ->  view -> misrecetas($recetas ,$categorias);
  }
     
   function borrarReceta ($params){
    $this->model->  eliminarReceta ($params[0]);
    header ("location: ../home");
  }
    function finalizar ($params){
    $this->model-> fin_receta ($params[0]);
    header ("location: ../home");
  }
      
  function Agregar_receta($member = null){
    $categorias = $this-> categoria_model-> obtener_categoria();
    $this -> view ->Agregar_receta ($categorias);
  }
    
  function insertar (){
    $this-> model-> insertReceta($_GET["titulo"],$_GET["ingrediente"] , $_GET["categoria"]);
    header ("location: home");
 }
    function   pag_subscription ($member = null){
    $categorias = $this-> categoria_model-> obtener_categoria();
    $recetas=$this -> model -> obtener_receta();
    $this ->  view ->   pag_subscription( $recetas ,$categorias );
  }
}
 ?>