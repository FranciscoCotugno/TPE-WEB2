<?php

class authView{
    public function viewInicioSesion($error=null){
        require 'templates/form-inicioSesion.phtml';
    }
    public function viewCrearCuenta(){
        require 'templates/crearCuenta.phtml';
    }
    public function showError($error){
        require 'templates/showError.phtml';
    }
   /* public function showUsers($users){
        foreach($users as $user) { ?>
           <li >
               <?php echo $user->emai_user?>
           </li>
       <?php } 
   }*/
}