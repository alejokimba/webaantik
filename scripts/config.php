<?php
  define('DB_SERVER', 'aantik.mysql.database.azure.com');
  define('DB_USERNAME', 'Aantik@aantik');
  define('DB_PASSWORD', 'Worksql123');
  define('DB_DATABASE', 'aantik_webpage');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $mysqli = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>