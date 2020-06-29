<?php
require_once('usuariosview.php');
require_once('usuariosmodel.php');


class UsuariosController
{

  private $model;
  private $view;

  function __construct()
  {
    $this->model = new UsuariosModel();
    $this->view = new UsuariosView();
  }

  function login(){
    return $this->view->login();
  }

  function registrarse(){
    return $this->view->registrarse();
  }

  function registro(){
   if($_POST["email"]==""){
      return;
    }
    if($_POST["password"]==""){
      return;
    }
    $this->model->crearUsuario($_POST["email"],$_POST["password"]);
    header("Location: login");
  }
  function ingresar(){
    $email= $_POST["email"];
    $password = $_POST["password"];
    $usuario = $this->model->getUsuario($email);
    $hash = $usuario["password"];
    if (password_verify($password, $hash)){
      session_start();
      $_SESSION["nombre"] = $usuario["mail"];
      header("Location: home");
    }
    else
    header("Location: login");
}

  
  function logout(){
    session_start();
    session_destroy();
    header("Location: login");
  }
   
}


    ?>