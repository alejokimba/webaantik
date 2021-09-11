<?php
/*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/

include_once 'user.php';
include_once 'user_session.php';

$userSession=new UserSession();
$user=new User();
$user_db = 'Aantik@aantik';
$password = 'Worksql123'; //To be completed if you have set a password to root
$database = 'aantik_webpage'; //To be completed to connect to a database. The database must exist.
$port = 3306; //Default must be NULL to use default port
$mysqli = new mysqli('aantik.mysql.database.azure.com', $user_db, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


$name = $mysqli->real_escape_string($_REQUEST['name']);
$apellidos = $mysqli->real_escape_string($_REQUEST['apellidos']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$password = $mysqli->real_escape_string($_REQUEST['password']);

$email_recovered;
$name_recovered;
// Attempt ins ert query execution
 $sql = "INSERT INTO aantik_webpage.user (nombre, apellidos, email, password) VALUES ('$name','$apellidos','$email', '$password')";
 
if($mysqli->query($sql) === true){

   $query = $user->connect()->prepare('SELECT * FROM aantik_webpage.user WHERE email = :email');
   $query->execute(['email' => $email]);
   foreach ($query as $currentUser) {
      $user->nombre = $currentUser['nombre'];
      $user->email = $currentUser['email'];
   }
      $email_recovered=$user->email;
      $userSession->setCurrentUser($email_recovered);
      $user->setUser($email_recovered);
   include ("../Iniciologin.php");  
} else{
   echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
} 


$mysqli->close();
?>