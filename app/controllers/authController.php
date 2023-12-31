<?php
require_once './app/models/authModel.php';
require_once './app/views/authView.php';
require_once './app/helper/autHelper.php';

class authController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new authModel();
        $this->view = new authView();
    }

    public function showInicioSesion()
    {
        $this->view->viewInicioSesion();
    }

    public function ingreso()
    {
        $email_user = $_POST['email_user'];
        $password = $_POST['password'];

        if (empty($email_user) || empty($password)) {
            $this->view->viewInicioSesion("complete los campos");
            return;
        }
        $usuario = $this->model->getEmail($email_user);

        if ($usuario && password_verify($password, $usuario->password)) {
            AuthHelper::login($usuario);

            header('Location: ' . 'administrar');
        } else {
            $this->view->viewInicioSesion("Los datos son erroneos");
        }
    }

    public function logout()
    {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);
    }

    // ----- Este codigo se utilizo para crear el usuario webamin -----
    // public function showCrearCuenta(){
    //     $this->view->viewCrearCuenta();
    // }
    // public function createUser(){
    //     $email_user= $_POST['email_user'];
    //     $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    //     if(!empty($email_user)||!empty($password)){
    //         $this->model->addUser($email_user, $password);

    //         $this->view->viewInicioSesion();
    //     }
    // }
}
