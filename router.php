<?php
require_once 'app/controllers/productController.php';
require_once 'app/controllers/authController.php';
require_once 'app/controllers/adminController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// el router va a leer la action desde el paramtro "action"

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: noticia/1 --> ['noticia', 1]
$params = explode('-', $action);

switch ($params[0]) { // en la primer posicion tengo la accion real
    case 'home':
        $controller= new controllerProduct();
        $controller->homeController();
        break;
    case 'productos':
        $controller = new controllerProduct();
        $controller->showCategorys();
        if($params[1] == 0){
            $controller->showAllProducts();
        }
        else if ($params[1] >= 1 && $params[1] <= 6){
           $controller->showProductsByCategory($params[1]); 
        }
        else{
           $controller->showError();
        }       
        break;   
    case 'registro':
        $controller = new authController();
        $controller->showCrearCuenta();
        break;
    case 'crearCuenta':
        $controller = new authController();
        $controller->createUser();
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
    case 'eliminar':
        $controller = new adminController();
        $controller->removeProduct($params[1]);
        break;
    case 'administrar':
        $controller = new adminController();
        $controller->showAdministrar();
        break;
    case 'agregarProducto':
        $controller = new adminController();
        $controller->addProduct();
        break;
    case 'editarProducto':
        $controller = new adminController();
        $controller->updateProduct();
        break;    
    default:
        require 'templates/header.phtml';
        require 'templates/showError.phtml';
        break; 
}


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

    /*
    1) function insertTask($title, $description, $priority) {// palabra: ingresar 
        $query = $this->db->prepare('INSERT INTO tareas (titulo, descripcion, prioridad) VALUES(?,?,?)');
        $query->execute([$title, $description, $priority]);

        return $this->db->lastInsertId();
    }

    2)    $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
        //pag 27/28 autenticacion y leer segurida hash
*/ 