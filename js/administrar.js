"use strict"

//Form Productos
const titleFormProductos = document.querySelector("#form-title-productos");
const selectIdsProductos = document.querySelector("#select-ids-productos");
const formProductos = document.querySelector("#form-productos");
const btnProductos = document.querySelector("#btn-form-productos");
let var1 = 0;
//Form Categorias
const titleFormCategorias = document.querySelector("#form-title-categorias");
const selectIdsCategorias = document.querySelector("#select-ids-categorias");
const formCategorias = document.querySelector("#form-categorias");
const btnCategorias = document.querySelector("#btn-form-categorias");
let var2 = 0;

btnProductos.addEventListener('click', cambiarFormProducto);
btnCategorias.addEventListener('click', cambiarFormCategorias);

function cambiarFormProducto() {
    if (var1 == 0) {
        formProductos.setAttribute('action', 'editarProducto')
        titleFormProductos.innerHTML = 'Editar Productos';
        btnProductos.value = "Agregar"
        selectIdsProductos.className = "form-select__conteiner select-width";
        var1++;
    }
    else if (var1 == 1) {
        formProductos.setAttribute('action', 'agregarProducto')
        titleFormProductos.innerHTML = 'Agregar Productos';
        btnProductos.value = "Editar"
        selectIdsProductos.className = "noMostrar";
        var1--;
    }
}

function cambiarFormCategorias() {
    if (var2 == 0) {
        formCategorias.setAttribute('action', 'editarCategorias')
        titleFormCategorias.innerHTML = 'Editar Categorias';
        btnCategorias.value = "Agregar"
        selectIdsCategorias.className = "form-select__conteiner select-width";
        var2++;
    }
    else if (var2 == 1) {
        formCategorias.setAttribute('action', 'agregarCategorias')
        titleFormCategorias.innerHTML = 'Agregar Categorias';
        btnCategorias.value = "Editar"
        selectIdsCategorias.className = "noMostrar";
        var2--;
    }
}