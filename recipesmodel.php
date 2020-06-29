<?php
class recipesmodel {
   
   private $db;
  
   function  __construct () {
      $this -> db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   }
    
   function  obtener_receta (){
      $sentencia = $this -> db->prepare( "select * from receta");
      $sentencia->execute();
      return $sentencia->FetchAll();
   }
    
   function  obtener_categoria (){
      $sentencia = $this -> db->prepare( "select * from categoria");
      $sentencia->execute();
      return $sentencia->FetchAll();
   }
  
   function obtenercategoria($id_categoria){
      $sentence =  $this -> db-> prepare("select * from categoria where id_categoria=?");
      $sentence->execute([$id_categoria]);
      return $sentence->fetch();
   }
  
   function obtener_receta_por_Categoria($id_categoria){
      $sentence = $this -> db->prepare("select * from receta where fk_id_categoria=?");
      $sentence->execute([$id_categoria]);
      return $sentence->fetchAll(); 
   }
     
   function  insertReceta  ($titulo ,$ingrediente,$categoria ){
      $sentencia =  $this -> db->prepare( "INSERT INTO receta(titulo,ingrediente,fk_id_categoria) VALUES(?,?,?)");
      $sentencia->execute(array($titulo,$ingrediente,$categoria));
   }
   
   function  insert_categoria ($id_categoria ,$nombre){
      $sentencia =  $this -> db->prepare( "INSERT INTO categoria(id_categoria,nombre) VALUES(?,?)");
      $sentencia->execute(array($id_categoria ,$nombre));
   }
    
   function eliminarReceta  ($id_receta){
      $sentencia =  $this -> db->prepare( "DELETE FROM  receta WHERE id_receta = ? ");
      $sentencia->execute(array($id_receta));
   }
    
   function eliminarCategoria  ($id_categoria){
      $sentencia =  $this -> db->prepare( "DELETE FROM  categoria WHERE id_categoria = ? ");
      $sentencia->execute(array($id_categoria));
   }
    
   function  fin_receta ($id_receta ){
      $sentencia = $this -> db ->prepare( "UPDATE  receta SET finalizada=1 WHERE id_receta = ? ");
      $sentencia->execute(array($id_receta));
   }
}
?>