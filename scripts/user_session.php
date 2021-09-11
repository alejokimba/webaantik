<?php

class UserSession{
    //Iniciamos sesion
    public function __construct(){
        session_start();
    }
    //asignamos un valor a la variable sesion
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }
    //Obtenemos la sesion actual
    public function getCurrentUser(){
        return $_SESSION['user'];
    }
    //Cerramos la sesion
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>