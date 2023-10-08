"use strict"

const estadoForm = document.querySelector("#estado-form");
const selectIds = document.querySelector("#select-ids");
const btn = document.querySelector("#btn-form-administrar");
let var1 = 0;

btn.addEventListener('click', cambiarForm);

function cambiarForm(){
    if (var1 == 0) {
        estadoForm.innerHTML = 'Editar Productos';
        btn.value = "Agregar"
        selectIds.className
        var1++;
    }
    else if (var1 == 1){
        estadoForm.innerHTML = 'Agregar Productos';
        btn.value = "Editar"
        var1--;
    }
}