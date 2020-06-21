<?php
require_once "recipesview.php";
require_once "recipesmodel.php";
 class recipescontroller {


    private $view;
    private $model;

    function __construct (){
        $this ->  view = new recipesview () ;
        $this ->  model = new recipesmodel();
    }

   
    function admin_recipes($member = null){
    $recetas=$this -> model -> obtener_receta();
    $this ->  view -> admin_recipes ( $recetas);
    }
    function categoria($member = null){
      $categoria= $this -> model -> obtener_categoria();
      $this ->  view -> categoria( $categoria) ;
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
      $this ->  view ->Agregar_receta ( );
       }
    
    function insertar (){
      $this-> model-> insertReceta($_GET["titulo"],$_GET["ingrediente"], $_GET["categoria"]);
      header ("location: home");
    }
    function insertar_categoria (){
      $this-> model-> insert_categoria($_GET["id_categoria"],$_GET["nombre"]);
      header ("location: categoria");
    }
    
    
      function  home_pag($member = null){

        $this ->  view ->  home_pag( );
       }
       function   pag_salaty($member = null){
        $recetas=$this -> model -> obtener_receta();
        $this ->  view ->   pag_salaty( $recetas );
      

       }
       function   pag_sweet($member = null){
        $recetas=$this -> model -> obtener_receta();
        $this ->  view ->   pag_sweet( $recetas );
       }
       function   pag_subscription ($member = null){
        $recetas=$this -> model -> obtener_receta();
        $this ->  view ->   pag_subscription( $recetas );
       }
       
  }
 ?>