<?php
require_once 'app/controllers/productController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: noticia/1 --> ['noticia', 1]
$params = explode('-', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    default:
        $controller= new controllerTask();
        $controller->homeController();
        break;
    // case 'productos':
    //     $controller= new controllerTask();
    //     $controller->showCategoryes();
    //     $controller->showProducts(); 
    //     break;
    // case 'todos':
    //     $controller = new controllerTask();
    //     $controller->showCategoryes();
    //     $controller->showProducts();  
    //     break; 
    case 'productos':
        $controller = new controllerTask();
        $controller->showCategoryes();
        if($params[1] == 0){
            $controller->showProducts();
        }
        else if ($params[1] >= 1 && $params[1] <= 6){
           $controller->showProductsByCategory($params[1]); 
        }
        else{
            echo "error 404";
        }       
        break;   
    case 'inicio-sesion':
        $controller = new controllerTask();
        $controller->showInicioSesion();
        break;
}