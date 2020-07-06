<?php
class recipesmodel {
   
   private $db;
  
   function  __construct () {
      $this -> db = new PDO('mysql:host=localhost;'.'dbname=my_recipes;charset=utf8', 'root', '');
   }
    
   function  get_recipes (){
      $sentencia = $this -> db->prepare( "select r.* , f.name  name_flavor from recipe r 
      join flavor f on (r.id_flavor = f.id_flavor )");
      $sentencia->execute();
      return $sentencia->FetchAll(PDO::FETCH_ASSOC);
   }
      function  id_recipe ($id_recipe){
      $sentencia = $this -> db->prepare( "select r.* , f.name  name_flavor from recipe r 
      join flavor f on (r.id_flavor = f.id_flavor ) where r.id_recipe =?");
      $sentencia->execute([$id_recipe]);
      return $sentencia->Fetch(PDO::FETCH_ASSOC);
   }
   
     function  insertrecipes  ($title ,$ingredient ,$flavor,$step ){
      $sentencia =  $this -> db->prepare( "INSERT INTO recipe( name,ingredient,id_flavor,step) VALUES(?,?,?,?)");
      $sentencia->execute(array($title ,$ingredient ,$flavor,$step  ));
   }
    function deleterecipe  ($id_recipe){
      $sentencia =  $this -> db->prepare( "DELETE FROM  recipe WHERE id_recipe = ? ");
      $sentencia->execute(array($id_recipe));
   }
   function  editrecipe ($ingredient ,$flavor,$step,$id_recipe){
      $sentencia = $this -> db ->prepare( "UPDATE  recipe SET ingredient=? ,id_flavor=? , step=? WHERE id_recipe = ? ");
      $sentencia->execute(array($ingredient ,$flavor,$step,$id_recipe ));
   }

    
   function  finish_recipe ($id_recipe ){
      $sentencia = $this -> db ->prepare( "UPDATE  recipe SET finished=1 WHERE id_recipe = ? ");
      $sentencia->execute(array($id_recipe));
   }
}
?>