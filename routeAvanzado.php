<?php
require_once "ConfigApp.php";
require_once "admin_recipes.php";
require_once "Agregar_receta.php";
require_once "recipesview.php";
require_once "recipescontroller.php";
require_once "recipesmodel.php";
require_once "categoria.php";
require_once "index.php";
/*require_once "salatyRecipes.php";*/
require_once "sweetRecipes.php";
require_once "subscription.php";
function parceURL($url){

    $partesURL = explode("/", $url);

    $arrayReturn[ConfigApp::$ACTION] = $partesURL[0];
    $arrayReturn[ConfigApp::$PARAMS] = isset($partesURL[1]) ? array_slice($partesURL,1) : null;

    return $arrayReturn;
}

//arreglo de 2 posiciones
$urlData = parceURL($_GET[ConfigApp::$ACTION]);

$actionName = $urlData[ConfigApp::$ACTION];

if(array_key_exists($actionName, ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];

    $controllerMetodo = explode('#', ConfigApp::$ACTIONS[$actionName]);
    $controller = new $controllerMetodo[0];
    $methodName = $controllerMetodo[1];

    if(isset($params) && $params != null){
        echo $controller->$methodName($params);
    }else{
        echo $controller->$methodName();
    }
}else{
    echo $controller->admin_recipes();
}

?>