"use strict"

const estadoForm = document.querySelector("#estado-form");
const selectIds = document.querySelector("#select-ids");
const checkEditar = document.querySelector("#check-editar");

checkEditar.addEventListener('change', () => {
    let checked = checkEditar.checked;
    if (checked == true) {
        estadoForm.innerHTML = 'Editar Productos';
        selectIds.className = " ";
    }
    else {
        estadoForm.innerHTML = 'Agregar Productos';
        selectIds.className = "no-mostrar";
    }
});