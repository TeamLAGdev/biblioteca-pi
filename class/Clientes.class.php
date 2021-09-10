<?php

 /**
  * clientes
  */

  class Clientes extends Conn
  { 

    function __construct()
  { 
       $this->conn = new Conn();
       $this->pdo = $this->conn->pdo();
  }

  public function login($email,$senha){
     $query = $this->pdo->prepare("SELECT * FROM  `usuarios` WHERE email= :email AND senha= :senha");
     $query->bindValue(':email', $email);
     $query->bindValue(':senha', $senha);
     $execute = $query->execute();
     if($execute){

       $fetch = $query->fetchAll(PDO::FETCH_OBJ);
       if(count($fetch)>0){

        $q = $this->pdo->prepare("SELECT * FROM  `usuarios` WHERE email= :email AND senha= :senha");
        $q->bindValue(':email', $email);
        $q->bindValue(':senha', $senha);
        $q->execute();
        $fetch = $q->fetch(PDO::FETCH_OBJ);
        
        $_SESSION['USER'] = (array)$fetch;
        $_SESSION['checkout']['iduser'] = $_SESSION['USER']['id'];


         return true;
       }else{
         return false;
       }

     }else{
       return false;
     }
  }

  
  public  function create($email,$senha){
    $query = $this->pdo->prepare("INSERT INTO `usuarios` (email,senha)  VALUES (:email,:senha) ");
    $query->bindValue(':email', $email);
    $query->bindValue(':senha', $senha);

     if($query->execute()){
        $_SESSION['checkout']['iduser'] = $_SESSION['USER']['id'];
       return true;
     }else{
       return false;
     }
  }
}




?>