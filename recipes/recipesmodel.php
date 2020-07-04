<?php
class recipesmodel {
   
   private $db;
  
   function  __construct () {
      $this -> db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   }
    
   function  get_recipes (){
      $sentencia = $this -> db->prepare( "select * from receta");
      $sentencia->execute();
      return $sentencia->FetchAll();
   }
     function  insertrecipes  ($titulo ,$ingrediente ,$categoria ){
      $sentencia =  $this -> db->prepare( "INSERT INTO receta( titulo,ingrediente,fk_id_categoria) VALUES(?,?,?)");
      $sentencia->execute(array($titulo,$ingrediente,$categoria));
   }
   
   
    
   function deleterecipe  ($id_receta){
      $sentencia =  $this -> db->prepare( "DELETE FROM  receta WHERE id_receta = ? ");
      $sentencia->execute(array($id_receta));
   }
    

    
   function  finish_recipe ($id_receta ){
      $sentencia = $this -> db ->prepare( "UPDATE  receta SET finalizada=1 WHERE id_receta = ? ");
      $sentencia->execute(array($id_receta));
   }
}
?>