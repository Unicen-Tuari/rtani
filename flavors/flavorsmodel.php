<?php
class flavorsmodel {
   
   private $db;
  
   function  __construct () {
      $this -> db = new PDO('mysql:host=localhost;'.'dbname=my_recipes;charset=utf8', 'root', '');
   }
   function  get_flavor (){
    $sentencia = $this -> db->prepare( "select * from flavor");
    $sentencia->execute();
    return $sentencia->FetchAll();
 }
 function getflavor($id_flavor){
    $sentence =  $this -> db-> prepare("select * from flavor where id_flavor=?");
    $sentence->execute([$id_flavor]);
    return $sentence->fetch();
 }
 function get_recipe_by_flavors($id_flavor){
    $sentence = $this -> db->prepare("select * from recipe where id_flavor=?");
    $sentence->execute([$id_flavor]);
    return $sentence->fetchAll(); 
 }
 function  insert_flavor ($id_flavor ,$name){
    $sentencia =  $this -> db->prepare( "INSERT INTO flavor(id_flavor,name) VALUES(?,?)");
    $sentencia->execute(array($id_flavor ,$name));
 }
 function delete_flavors  ($id_flavor){
    $sentencia =  $this -> db->prepare( "DELETE FROM  flavor WHERE id_flavor = ? ");
    $sentencia->execute(array($id_flavor));
 }
}
?>