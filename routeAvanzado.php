<?php
require_once "ConfigApp.php";
require_once "recipes/recipesview.php";
require_once "recipes/recipescontroller.php";
require_once "recipes/recipesmodel.php";
require_once "users/usersview.php";
require_once "users/userscontroller.php";
require_once "users/usersmodel.php";
require_once "flavors/flavorscontroller.php";
require_once "flavors/flavorsmodel.php";
require_once "flavors/viewflavors.php";


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