<?php
$dbServername="162.241.61.210";
$dbUsername="godemoon_wp793";
$dbPassword="!p6JY8Sg4[";
$dbname="godemoon_wp793";
$conn=new mysqli($dbServername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

  function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
$query="SELECT * FROM wpyd_actionscheduler_groups";
$result=mysqli_query($conn, $query); 

//convert to .cvs file
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysqli_num_fields($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    $headers[] = mysqli_field_name($result , $i);
}
$noheaders=count($headers);
for ($array = array (); $row = $result->fetch_array(MYSQLI_NUM); $array[] = $row);
foreach($array as $key=>$value){
    for($i=0; $i<$noheaders; $i++){
        $array[$key][$i]=preg_replace( "/\r|\n/", "", $value[$i]);
    }
}

/* print_r($array); 
 */
$fp = fopen('php://output', 'w');
if ($fp && $result){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="wpyd_cpappbk_messages.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    foreach ($array as $row) {
        fputcsv($fp, $row);
  }   
    die; 
}   

?>