<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'aantik_webpage'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';

$name = $mysqli->real_escape_string($_REQUEST['nombre']);
$message = $mysqli->real_escape_string($_REQUEST['message']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$phone= $mysqli->real_escape_string($_REQUEST['phone']);

// Attempt ins ert query execution
 $sql = "INSERT INTO aantik_webpage.user (nombre, apellidos, email, password) VALUES ('$name','$apellidos','$email', '$password')";
if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
} 


$mysqli->close();
?>