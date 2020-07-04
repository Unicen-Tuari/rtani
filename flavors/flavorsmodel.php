<?php
class flavorsmodel {
   
   private $db;
  
   function  __construct () {
      $this -> db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   }
   function  get_flavor (){
    $sentencia = $this -> db->prepare( "select * from categoria");
    $sentencia->execute();
    return $sentencia->FetchAll();
 }
 function getflavor($id_categoria){
    $sentence =  $this -> db-> prepare("select * from categoria where id_categoria=?");
    $sentence->execute([$id_categoria]);
    return $sentence->fetch();
 }
 function get_recipe_by_flavors($id_categoria){
    $sentence = $this -> db->prepare("select * from receta where fk_id_categoria=?");
    $sentence->execute([$id_categoria]);
    return $sentence->fetchAll(); 
 }
 function  insert_flavor ($id_categoria ,$nombre){
    $sentencia =  $this -> db->prepare( "INSERT INTO categoria(id_categoria,nombre) VALUES(?,?)");
    $sentencia->execute(array($id_categoria ,$nombre));
 }
 function delete_flavors  ($id_categoria){
    $sentencia =  $this -> db->prepare( "DELETE FROM  categoria WHERE id_categoria = ? ");
    $sentencia->execute(array($id_categoria));
 }
}
?>