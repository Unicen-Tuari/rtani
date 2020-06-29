<?php
require_once "recipesview.php";
require_once "recipesmodel.php";

class recipescontroller {

  private $view;
  private $model;

  function __construct (){
    $this ->  view = new recipesview () ;
    $this ->  model = new recipesmodel();
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
    $categorias= $this -> model -> obtener_categoria();
    $this ->  view -> admin_recipes ( $recetas , $categorias);
  }
    
  function  view_categorias ($member = null){
    $recetas=$this -> model -> obtener_receta();
    $categorias= $this -> model -> obtener_categoria();
    $this ->  view ->  view_categorias( $categorias, $recetas);
  }
      
  function misrecetas ($member = null){
    $recetas=$this -> model -> obtener_receta();
    $categorias= $this -> model -> obtener_categoria();
     $this ->  view -> misrecetas($recetas ,$categorias);
  }
     
  function home_pag( $member=null ){
    $categorias= $this -> model -> obtener_categoria();
    $this ->  view ->  home_pag ($categorias );
  }
     
  function viewrecetas ($params){
    $recetas = $this->model-> obtener_receta_por_Categoria($params[0]);
    $categoria =$this->model->  obtenercategoria($params[0]);
    $categorias = $this->model-> obtener_categoria();
    $this ->  view -> viewrecetas($categorias ,$recetas ,$categoria);
  }

  function borrarReceta ($params){
    $this->model->  eliminarReceta ($params[0]);
    header ("location: ../home");
  }
      
  function borrarcategoria ($params){
    $this->model->  eliminarcategoria($params[0]);
    header ("location: ../categoria");
  }
      
  function finalizar ($params){
    $this->model-> fin_receta ($params[0]);
    header ("location: ../home");
  }
      
  function Agregar_receta($member = null){
    $categorias = $this->model-> obtener_categoria();
    $this -> view ->Agregar_receta ($categorias);
  }
    
  function insertar (){
    $this-> model-> insertReceta($_GET["titulo"],$_GET["ingrediente"], $_GET["categoria"]);
    header ("location: home");
  }
   
  function insertar_categoria (){
    $this-> model-> insert_categoria($_GET["id_categoria"],$_GET["nombre"]);
    header ("location: categoria");
    }
    
  
       
  function   pag_subscription ($member = null){
    $recetas=$this -> model -> obtener_receta();
    $this ->  view ->   pag_subscription( $recetas );
  }
}
 ?>