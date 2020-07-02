<?php
require_once "ConfigApp.php";
require_once "recipes/recipesview.php";
require_once "recipes/recipescontroller.php";
require_once "recipes/recipesmodel.php";
require_once "usuarios/usuariosview.php";
require_once "usuarios/usuarioscontroller.php";
require_once "usuarios/usuariosmodel.php";
require_once "categorias/categoriacontroller.php";
require_once "categorias/categoriamodel.php";
require_once "categorias/viewcategoria.php";


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
    $controllerMetodos = explode('/', ConfigApp::$ACTIONS[$actionName]);
    $controllerMetodo = explode('#',$controllerMetodos [1]);
    $controller = new $controllerMetodo[0];
    $methodName = $controllerMetodo[1];

    if(isset($params) && $params != null){
        echo $controller->$methodName($params);
    }else{
        echo $controller->$methodName();
    }
}

?>