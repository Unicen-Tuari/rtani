<?php
require_once "categoriamodel.php";
require_once "viewcategoria.php";
require_once "recipes/recipesmodel.php";


class categoriacontroller {
    private $view ;
    private $model ;
    private $model_recipes;

    function __construct (){
        $this ->  view = new viewcategoria () ;
        $this ->  model = new categoriamodel();
        $this -> model_recipes = new recipesmodel();

}
function  view_categorias ($member = null){
    $recetas=$this -> model_recipes -> obtener_receta();
    $categorias= $this -> model -> obtener_categoria();
    $this ->  view -> view_categorias( $categorias, $recetas);
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
  function borrarcategoria ($params){
    $this->model->  eliminarcategoria($params[0]);
    header ("location: ../categoria");
  }
  function insertar_categoria (){
    $this-> model-> insert_categoria($_GET["id_categoria"],$_GET["nombre"]);
    header ("location: categoria");
    }

}
?>

