<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$user = 'Aantik@aantik';
$password = 'Worksql123'; //To be completed if you have set a password to root
$database = 'aantik_webpage'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = new mysqli('aantik.mysql.database.azure.com', $user, $password, $database, $port);

    /* if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    echo '<p>Connection OK '. $mysqli->host_info.'</p>';
    echo '<p>Server '.$mysqli->server_info.'</p>';
    echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';
    */
    $service=$mysqli->real_escape_string($_REQUEST['services']);
    $project=$mysqli->real_escape_string($_REQUEST['project']);
    $datetime=$mysqli->real_escape_string($_REQUEST['date']);
    $phone=$mysqli->real_escape_string($_REQUEST['phone']);
    $name=$mysqli->real_escape_string($_REQUEST['nombre']);
    $email=$mysqli->real_escape_string($_REQUEST['email']);
	
	$horasArr= explode(" ", $date );
	$horario = $horasArr[1];
	$query = "SELECT Horas FROM aantik_webpage.service_scheduler WHERE date = '$datetime'";	
    $query2 ="INSERT INTO aantik_webpage.service_scheduler(service, date, name, project, phone, email) VALUES('$service', '$datetime', '$name', '$project', '$phone', '$email')";
    /* $result=$mysqli->query($query); */
    
    if($mysqli->query($query2) === true){
		
        $query3="UPDATE aantik_webpage.horas SET flag=0 WHERE Horas='$horario'";
        //if($mysqli->query($query3) === true){
           echo '<script>alert("Cita agendada!");</script>';
            header("location: \webaantik\Agendarcita.php");
        //}else{
        //echo "ERROR: Could not able to execute $query2. " . $mysqli->error;
     //} 
        
     } 
   /*  if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo $row["start_time"];
        }
    } else {
        echo "0 results";
    } */
    $mysqli->close();
?> 