"use strict"

const btnNav = document.querySelector("#btn-nav");
const nav = document.querySelector("#nav-links");
let arregloCategorias = document.querySelectorAll('.categorys');

btnNav.addEventListener("click", menu);

function menu() {
    btnNav.classList.toggle("btn-rotation");
    nav.classList.toggle("nav-open");
}

function ponerCategoria(){
    for(let i = 0; i < arregloCategorias.length; i++){
        let texto = arregloCategorias[i];
        switch(texto.getAttribute('categoria')){
            case '1': texto.innerHTML = "Whisky"; break;
            case '2': texto.innerHTML = "Cerveza"; break;
            case '3': texto.innerHTML = "Gaseosa"; break;
            case '4': texto.innerHTML = "Gin"; break;
            case '5': texto.innerHTML = "Vodka"; break;
            case '6': texto.innerHTML = "Fernet"; break;
        }
    }
}

ponerCategoria();