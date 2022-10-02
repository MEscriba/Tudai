"use strict";

let pedidos = [];
let descuentoaplicado = false;
let form = document.querySelector("#form_cerveza");
let total = document.querySelector("#precio_total");
let formcupon = document.querySelector("#form_cupon");
let vaciar = document.querySelector("#btn_vaciar");

form.addEventListener("submit", agregar);
formcupon.addEventListener("submit", aplicar);
vaciar.addEventListener("click", vaciarcarrito);
mostrarpedido();

function agregar (e){
e.preventDefault();
let formData = new FormData(form);
let cerveza = formData.get("cerveza");
let cantidad = formData.get("cantidad");
let pedidototal = calcularcantidad();
    if ((cantidad>1) && (cantidad<10) && (pedidototal+cantidad<=20)){
        let pedido = {
            "cerveza": cerveza,
            "cantidad": cantidad,
        }
        pedidos.push(pedido);
        mostrarpedido();
   }
     else {
    alert("no se puede cargar su pedido");
   }
}

function aplicar(e){
    e.preventDefault();
    let formData = new FormData(formcupon);
    if (formData.get("cupon")=="tudai"){
        descuentoaplicado = true;
    }
    actualizar();
}
function vaciarcarrito(){
    let tBody = document.querySelector("lista_pedido");
    tBody.innerHTML = "";
    total.innerHTML = 0;
    pedidos = [];
}

function calcularcantidad(){
    let sum = 0;
    for (let index=0; index < pedidos.length; index++) {
       sum += pedidos[index].cantidad; 
    }
    return sum;
}
actualizar();

function actualizar(){
    let cantidad = calcularcantidad();
    let total = cantidad * 400;
    if ((descuentoaplicado=true) && (total>=200)){
        total-=200;
        total.innerHTML= total;
    }
}
function mostrarpedido(){
    let tBody =document.querySelector("lista_pedido");
    tBody.innerHTML = pedidos;
}