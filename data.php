<?php
 
 function  obtener_receta (){
    $db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
    $sentencia = $db->prepare( "select * from receta");
    $sentencia->execute();
    return $sentencia->FetchAll();
 }
 function  insertReceta ($titulo ,$ingrediente,$categoria ){
   $db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   $sentencia = $db->prepare( "INSERT INTO receta(titulo,ingrediente,categoria) VALUES(?,?,?)");
   $sentencia->execute(array($titulo,$ingrediente,$categoria));
   
}
function eliminarReceta  ($id_receta){
   $db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   $sentencia = $db->prepare( "DELETE FROM  receta WHERE id_receta = ? ");
   $sentencia->execute(array($id_receta));
   
}
function  fin_receta ($id_receta ){
   $db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   $sentencia = $db->prepare( "UPDATE  receta SET finalizada=1 WHERE id_receta = ? ");
   $sentencia->execute(array($id_receta));
   
}
function  obtenerreceta ($id_receta){
   $db = new PDO('mysql:host=localhost;'.'dbname=mis_recetas;charset=utf8', 'root', '');
   $sentencia = $db->prepare( "select * from receta where $id_receta=?");
   $sentencia->execute(array($id_receta));
   return $sentencia->Fetch();
}
?>