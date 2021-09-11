<?php

class DB{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $charset;
    private $port;

    public function __construct(){
        $this->host     = 'aantik.mysql.database.azure.com';
        $this->dbname   = 'aantik_webpage';
        $this->user     = 'Aantik@aantik';
        $this->password = 'Worksql123';
        $this->charset  = 'utf8mb4';
        $this->port=3306;
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
?>