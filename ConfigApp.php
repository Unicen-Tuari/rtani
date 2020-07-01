<?php

define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        ''=> 'recipescontroller#admin_recipes',
        'home' => 'recipescontroller#admin_recipes',
        'insertarReceta' => 'recipescontroller#insertar',
        'insertar_categoria' => 'recipescontroller#insertar_categoria',
        'insert'=> 'recipescontroller#Agregar_receta',
        'borrarReceta' => 'recipescontroller#borrarReceta',
        'borrarcategoria' => 'recipescontroller#borrarcategoria',
        'finalizar' => 'recipescontroller#finalizar',
        'categoria'=>'recipescontroller#view_categorias',
        'home_pag'=>'recipescontroller#home_pag',
        'pag_subscription'=>'recipescontroller#pag_subscription',
        'categorias' => 'recipescontroller#viewrecetas',
        'login' => 'UsuariosController#login',
        'registrarse' => 'UsuariosController#registrarse',
        'registro' => 'UsuariosController#registro',
        'ingresar' => 'UsuariosController#ingresar',
        'logout' => 'UsuariosController#logout'

        
    ];
}
?>