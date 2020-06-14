<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        
        'home' => 'recipescontroller#admin_recipes',
        'insertarReceta' => 'recipescontroller#insertar',
        'insert'=> 'recipescontroller#Agregar_receta',
        'borrarReceta' => 'recipescontroller#borrarReceta',
        'finalizar' => 'recipescontroller#finalizar',
        'mirar'=> 'recipescontroller#mirar_receta',
        'categoria'=>'recipescontroller#categoria',
        'home_pag'=>'recipescontroller#home_pag',
        /*'pag_salaty'=>'recipescontroller#pag_salaty',*/
        'pag_sweet'=>'recipescontroller#pag_sweet',
        'pag_subscription'=>'recipescontroller#pag_subscription'
    ];
}
?>
