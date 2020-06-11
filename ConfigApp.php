<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        'home' => 'admin_recipes',
        'insertarReceta' => 'insertarReceta',
        'insert'=> 'Agregar_receta',
        'borrarReceta' => 'borrarReceta',
        'finalizar' => 'finalizar',
        'mirar'=> 'mirar_receta'
    ];
}
?>
