<?php

class UsersModel
{
  private $db;

  function __construct()
  {
    $this -> db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
  }

  function create_user($email, $password){
    $sentencia = $this->db->prepare( "INSERT INTO `usuario` (`mail`, `password`) VALUES (?,?)");
    $sentencia->execute(array($email, password_hash($password, PASSWORD_DEFAULT)));
  }

  function getUser($email){
    $sentencia = $this->db->prepare("SELECT * FROM `usuario` WHERE `mail` = ?");
    $sentencia->execute(array($email));
    return $sentencia->fetch();
  }
  
 
}

 ?>