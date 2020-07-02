<?php

define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        ''=> 'recipes/recipescontroller#admin_recipes',
        'home' => 'recipes/recipescontroller#admin_recipes',
        'insertarReceta' => 'recipes/recipescontroller#insertar',
        'insertar_categoria' => 'categorias/categoriacontroller#insertar_categoria',
        'insert'=> 'recipes/recipescontroller#Agregar_receta',
        'borrarReceta' => 'recipes/recipescontroller#borrarReceta',
        'borrarcategoria' => 'categorias/categoriacontroller#borrarcategoria',
        'finalizar' => 'recipes/recipescontroller#finalizar',
        'categoria'=>'categorias/categoriacontroller#view_categorias',
        'home_pag'=>'categorias/categoriacontroller#home_pag',
        'pag_subscription'=>'recipes/recipescontroller#pag_subscription',
        'categorias' => 'categorias/categoriacontroller#viewrecetas',
        'login' => 'usuarios/UsuariosController#login',
        'registrarse' => 'usuarios/UsuariosController#registrarse',
        'registro' => 'usuarios/UsuariosController#registro',
        'ingresar' => 'usuarios/UsuariosController#ingresar',
        'logout' => 'usuarios/UsuariosController#logout'

        
    ];
}
?>