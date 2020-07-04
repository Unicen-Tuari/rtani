<?php
require_once('libs/Smarty.class.php');
class UsersView
{
  private $smarty;
  private $base_url;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->base_url = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function login(){
    $this->smarty->assign('base_url',$this->base_url);
    return $this->smarty->display('templates/login.tpl');
  }

  function check_in(){
    $this->smarty->assign('base_url',$this->base_url);
    return $this->smarty->display('templates/check_in.tpl');
  }
   
}

 ?>