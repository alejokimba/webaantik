<?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'config.php';
    $email = $db->real_escape_string($_REQUEST['email']);
    $password = $db->real_escape_string($_REQUEST['password']);
    $sql=mysqli_query($db,"SELECT * FROM user where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["nombre"]=$row['nombre'];
        $_SESSION["apellidos"]=$row['apellidos']; 
        header("location: \webaantik\Inicio.html");

        echo "Login exitoso";
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
