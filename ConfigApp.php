<?php

define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        ''=> 'recipes/recipescontroller#admin_recipes',
        'home' => 'recipes/recipescontroller#admin_recipes',
        'insertRecipe' => 'recipes/recipescontroller#insert',
        'edit' => 'recipes/recipescontroller#edit',
        'edit_recipe'=> 'recipes/recipescontroller#edit_recipe',
        'insert_flavors' => 'flavors/flavorscontroller#insertflavor',
        'insert'=> 'recipes/recipescontroller#insert_recipe',
        'deleteRecipe' => 'recipes/recipescontroller#delete_recipe',
        'removeflavors' => 'flavors/flavorscontroller#deleteflavors',
        'finish' => 'recipes/recipescontroller#finish',
        'flavors'=>'flavors/flavorscontroller#view_flavors',
        'home_pag'=>'flavors/flavorscontroller#home_pag',
        'pag_subscription'=>'recipes/recipescontroller#pag_subscription',
        'flavor' => 'flavors/flavorscontroller#viewrecipes',
        'login' => 'users/UsersController#login',
        'check_in' => 'users/UsersController#check_in',
        'registry' => 'users/UsersController#registry',
        'enter' => 'users/UsersController#enter',
        'logout' => 'users/UsersController#logout'

        
    ];
}
?>