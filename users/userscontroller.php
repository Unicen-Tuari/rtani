<?php
require_once('usersview.php');
require_once('usersmodel.php');


class UsersController
{

  private $model;
  private $view;

  function __construct()
  {
    $this->model = new UsersModel();
    $this->view = new UsersView();
  }

  function login(){
    return $this->view->login();
  }

  function check_in(){
    return $this->view->check_in();
  }

  function registry(){
   if($_POST["email"]==""){
      return;
    }
    if($_POST["password"]==""){
      return;
    }
    $this->model->create_user($_POST["email"],$_POST["password"]);
    header("Location: login");
  }
  function enter(){
    $email= $_POST["email"];
    $password = $_POST["password"];
    $user = $this->model->getUser($email);
    $hash = $user["password"];
    if (password_verify($password, $hash)){
      session_start();
      $_SESSION["nombre"] = $user["mail"];
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