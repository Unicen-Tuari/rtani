
<?php
include_once('data.php');
function Agregar_receta($member = null){

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel='stylesheet' href="css/style.css">
    <title>Agregar receta </title>
  </head>
  <body>
  <div class="Suscripcion">
          <h2 class="titulosub"> Completa los datos para insertar</h2>  
            
           <form action ="insertarReceta" method ="get">
                 <label for="titulo">titulo </label>
                 <input class="formulario" type="text"  name="titulo" id="titulo" placeholder="titulo receta"></input>
                 <label for="ingrediente">ingrediente</label>
                 <textarea class="formulario" id="ingrediente" name="ingrediente" rows="3"></textarea>
                 <label for="categoria">categoria </label>
                 <input class="formulario" type="text"  name="categoria" id="categoria" placeholder="tipo"></input>
                 <br>
                 <br>
                <input class="boton" type="submit" value="Agregar">
           </form>
     </div>
    
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
function insertarReceta (){
  echo "insertar Receta ";
  echo "titulo".$_GET["titulo"];
  echo "ingrediente".$_GET["ingrediente"];
  echo "categoria".$_GET["categoria"];
  insertReceta ($_GET["titulo"],$_GET["ingrediente"], $_GET["categoria"]);
  header ("location: home");
}
?>