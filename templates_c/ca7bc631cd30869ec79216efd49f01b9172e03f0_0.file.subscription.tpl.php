<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 16:55:20
  from 'C:\xampp\htdocs\vscode\rtani\templates\subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee63a5861e8a2_88549601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca7bc631cd30869ec79216efd49f01b9172e03f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\subscription.tpl',
      1 => 1592146492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee63a5861e8a2_88549601 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
   <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Suscripcion </title>
    <link rel ="shortcut icon" type="image/x-icon"href="images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href="css/style.css">
   </head>
 <body>
     <div class="encabezado">
         <img class="logo "src="images/logo.png" alt="foto del logo">
         <h1> Mis Recetas</h1>
        <nav>
               <a  href="home_pag">Inicio</a>
               <a  href="pag_sweet">Recetas Dulces</a>
               <a href="pag_salty"> Recetas Saladas</a>
               <a href="pag_subscription">Suscribirme</a>
         </nav>
     </div>
      <div class="Suscripcion">
          <h2 class="titulosub"> Completa tus datos para suscribirte</h2>  
             <p class="titulosub"> Con esta suscripcion recibiras diariamente recetas de tu interes</p> 
           <form>
                 <label for="nombre">Nombre </label>
                 <input class="formulario" type="text" placeholder=" Escribe tu nombre" name="nombre" id="nombre"></input>
                 <label for="apellido">Apellido</label>
                 <input class="formulario" type="text" placeholder=" Escribe tu  Apellido" name="apellido" id="apellido"></input>
                   <br>
                   <br>
                 <label for="email">Correo Electronico</label>
                 <input  class= "formulario"type="email" placeholder=" Ingrese su Email " name="email" id="email">
                 <label for="contraseña">Elige una contraseña</label>
                 <input class="formulario" type="password"placeholder=" Escribe una contraseña" name="contraseña" id="contraseña">
                  <br>
                  <br>
                <p class="formulario">  ¿Que tipos de recetas te interesan ? <select></p>
                <option>Seleccionar</option>
                <option>Recetas Dulces</option>
                <option>Recetas Saladas</option></select>
                 <br>
                 <br>
                <input class="boton" type="submit" value="Suscribirme">
           </form>
     </div>
 </body> 

</html> 

<?php }
}
