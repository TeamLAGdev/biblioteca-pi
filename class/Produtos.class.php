<?php

 /**
  * produtos
  */

  class Produtos extends Conn
  { 

    function __construct()
  { 
       $this->conn = new Conn();
       $this->pdo = $this->conn->pdo();
  }


   public function listar(){

    $query = $this->pdo->query("SELECT * FROM `produtos` ");
    $fetch = $query->fetchAll(PDO::FETCH_OBJ);

     if(count($fetch)>0){
      $query = $this->pdo->query("SELECT * FROM `produtos` ");
       return $query;


     }else{
       return false;
     }
    }
    
    
  
    public function  buscar($produtoNome){
      $query = $this->pdo->prepare("SELECT * FROM produtos WHERE nome LIKE :nome");
      $query->bindValue(':nome', '%'.$produtoNome.'%');
      if($query->execute()){
         
       
        $fetch = $query->fetchAll(PDO::FETCH_OBJ);
        return $fetch;


      }else{
        return false;
      }
    }

  

    public function getProdutoById($produtoId){
      $query = $this->pdo->prepare("SELECT * FROM `produtos` WHERE id= :id ");
      $query->bindValue(':id', $produtoId);
      if($query->execute()){
         
        $query = $this->pdo->query("SELECT * FROM `produtos` WHERE id= '$produtoId' ");
        $fetch = $query->fetch(PDO::FETCH_OBJ);
        return $fetch;


      }else{
        return false;
      }
    }
}



?>