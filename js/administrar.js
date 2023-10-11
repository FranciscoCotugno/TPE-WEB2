"use strict"

//Form Productos
const titleFormProductos = document.querySelector("#form-title-productos");
const selectIdsProductos = document.querySelector("#select-ids-productos");
const formProductos = document.querySelector("#form-productos");
const contFormProductos = document.querySelector("#cont-form-productos");
const btnSubmitProductos = document.querySelector("#btn-submit-productos");
//Form Categorias
const titleFormCategorias = document.querySelector("#form-title-categorias");
const selectIdsCategorias = document.querySelector("#select-ids-categorias");
const formCategorias = document.querySelector("#form-categorias");
const contFormCategorias = document.querySelector("#cont-form-categorias");
const btnSubmitCategorias = document.querySelector("#btn-submit-categorias");

let arrBtnsForm = document.querySelectorAll(".btns-admin");

for (let i = 0; i < arrBtnsForm.length; i++) {
    arrBtnsForm[i].addEventListener('click', () => {
        let action = arrBtnsForm[i].getAttribute('number');
        cambiarForm(action);
    });
}

function cambiarForm(action) {
    switch (action) {
        case '1': {
            formProductos.setAttribute('action', 'editarProducto')
            titleFormProductos.innerHTML = 'Editar Productos';
            selectIdsProductos.className = "form-select__conteiner select-width";
            contFormProductos.className = "";
        } break;
        case '2': {
            formProductos.setAttribute('action', 'agregarProducto')
            titleFormProductos.innerHTML = 'Agregar Productos';
            selectIdsProductos.className = "noMostrar";
            contFormProductos.className = "";
        } break;
        case '3': {
            formProductos.setAttribute('action', 'eliminarProducto')
            titleFormProductos.innerHTML = 'Eliminar Productos';
            selectIdsProductos.className = "form-select__conteiner select-width";
            contFormProductos.className = "noMostrar";
        } break;
        case '4': {
            formCategorias.setAttribute('action', 'editarCategorias')
            titleFormCategorias.innerHTML = 'Editar Categorias';
            selectIdsCategorias.className = "form-select__conteiner select-width";
            contFormCategorias.className = "";
        } break;
        case '5': {
            formCategorias.setAttribute('action', 'agregarCategorias')
            titleFormCategorias.innerHTML = 'Agregar Categorias';
            selectIdsCategorias.className = "noMostrar";
            contFormCategorias.className = "";
        } break;
        case '6': {
            formCategorias.setAttribute('action', 'eliminarCategoria')
            titleFormProductos.innerHTML = 'Eliminar Categoria';
            selectIdsCategorias.className = "form-select__conteiner select-width";
            contFormCategorias.className = "noMostrar";
        } break;

    }
}