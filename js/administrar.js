"use strict"

const estadoForm = document.querySelector("#form-title");
const selectIds = document.querySelector("#select-ids");
const formAdmin = document.querySelector("#form-administrar");
const btn = document.querySelector("#btn-form-administrar");
let var1 = 0;

btn.addEventListener('click', cambiarForm);

function cambiarForm(){
    if (var1 == 0) {
        formAdmin.setAttribute('action', 'editarProducto')
        estadoForm.innerHTML = 'Editar Productos';
        btn.value = "Agregar"
        selectIds.className = "form-select__conteiner select-width";
        var1++;
    }
    else if (var1 == 1){
        formAdmin.setAttribute('action', 'editarProducto')
        estadoForm.innerHTML = 'Agregar Productos';
        btn.value = "Editar"
        var1--;
        selectIds.className = "noMostrar";
    }
}