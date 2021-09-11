<?php
 include_once 'user.php';
 include_once 'user_session.php';

$userSession=new UserSession();
$user=new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    
    include ("../Iniciologin.php"); 
    
}else if(isset($_POST['email']) && isset($_POST['password'])){
    $emailForm=$_POST['email'];
    $passForm=$_POST['password'];

    if($user->userExists($emailForm, $passForm)){
        
       $userSession->setCurrentUser($emailForm);
       $user->setUser($emailForm);
       include ("../Iniciologin.php");  
    }
    else{
        echo '<script>
        alert("Email y/o contraseña incorrectos");
        window.location="../Inicio.php"
        </script>';
        exit();
    }
}else{
    include_once '/wamp64/www/webaantik/Inicio.php';
}
?>