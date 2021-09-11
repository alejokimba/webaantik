<?php

include 'DB.php';
class User extends DB{
   
   public $nombre;
   public $email;
   
   

   public function userExists($email, $password){
      $query = $this->connect()->prepare('SELECT * FROM aantik_webpage.user WHERE email = :email AND password = :password');
      $query->execute(['email' => $email, 'password' => $password]);
      if($query->rowCount()){
         return true;
     }else{
         return false;
     }
    }
    public function setUser($email){
        $query = $this->connect()->prepare('SELECT * FROM aantik_webpage.user WHERE email = :email');
        $query->execute(['email' => $email]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->email = $currentUser['email'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}

?>