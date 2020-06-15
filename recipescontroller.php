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

    function mirar_receta ($params){
        $receta= $this -> model ->  obtenerreceta($params[0]);
        $this ->  view -> mirar_receta ($receta);
      }
    function admin_recipes($member = null){
    $recetas=$this -> model -> obtener_receta();
    $this ->  view -> admin_recipes ( $recetas);
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
        $this ->  view ->Agregar_receta ( );
       }
    
    function insertar (){
      $this-> model-> insertReceta($_GET["titulo"],$_GET["ingrediente"], $_GET["categoria"]);
      header ("location: home");
    }
    function categoria($member = null){
      $recetas=$this -> model -> obtener_receta();
      $this ->  view -> categoria ( $recetas);
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