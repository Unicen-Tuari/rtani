"use strict";
let recetas_dulce = ["panqueques", "flan", "torta frita","torta de manzana","buñuelos","torta de ricota"];
let recetas_salada = [ "tortilla", "tarta de choclo","buñuelos de espinaca ","hamburguesas de lentejas" , "mac and chese","albondigas"];
let recetasalada = document.getElementById("receta_salada");
recetasalada.addEventListener("click", mostrar_receta_salada);
let recetadulce= document.getElementById("receta_dulce");
recetadulce.addEventListener("click", mostrar_receta_dulce);



function dulce(max_dulce){
    let random_dulce = Math.floor(Math.random() * max_dulce);
    return random_dulce;
}

function salado(max_salada){
    let random_salada = Math.floor(Math.random() * max_salada);
    return random_salada;
}

function obtener_receta_salada(){
    let receta_elegida_salada;
  if (recetasalada.checked){
    receta_elegida_salada  = recetas_salada[salado(recetas_salada.length)];
  }
    return receta_elegida_salada;
  }

  function obtener_receta_dulce(){
    let receta_elegida_dulce;
   if(  recetadulce.checked ){
    receta_elegida_dulce = recetas_dulce[dulce(recetas_dulce.length)];
 }
    return receta_elegida_dulce;
  }

function mostrar_receta_salada(){
    let mostrar_receta = document.getElementById("mostrar_salado");
    mostrar_receta.innerHTML = obtener_receta_salada();
}
function mostrar_receta_dulce(){
  let mostrar_receta = document.getElementById("mostrar_dulce");
  mostrar_receta.innerHTML = obtener_receta_dulce();
}
