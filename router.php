<?php
require_once 'database/config.php';
require_once 'app/controllers/productController.php';
require_once 'app/controllers/authController.php';
require_once 'app/controllers/adminController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new controllerProduct();
        $controller->homeController();
        break;
    case 'productos':
        $controller = new controllerProduct();
        $controller->showProducts();
        break;
    case 'inicioSesion':
        $controller = new authController();
        $controller->showInicioSesion();
        break;
    case 'ingreso':
        $controller = new authController();
        $controller->ingreso();
        break;
    case 'logout':
        $controller = new authController();
        $controller->logout();
        break;
    case 'administrar':
        $controller = new adminController();
        $controller->showAdministrar();
        break;
    case 'eliminarProducto':
        $controller = new adminController();
        $controller->removeProduct();
        break;
    case 'agregarProducto':
        $controller = new adminController();
        $controller->addProduct();
        break;
    case 'editarProducto':
        $controller = new adminController();
        $controller->updateProduct();
        break;
    case 'agregarCategoria':
        $controller = new adminController();
        $controller->addCategory();
        break;
    case 'editarCategoria':
        $controller = new adminController();
        $controller->updateCategory();
        break;
    case 'eliminarCategoria':
        $controller = new adminController();
        $controller->removeCategory();
        break;
    default:
        $controller = new controllerProduct();
        $controller->showError();
        break;
        // case 'registro':
        //     $controller = new authController();
        //     $controller->showCrearCuenta();
        //     break;
        // case 'crearCuenta':
        //     $controller = new authController();
        //     $controller->createUser();
        //     break;
}
