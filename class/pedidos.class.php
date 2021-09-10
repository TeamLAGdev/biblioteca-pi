<?php

 /**
  * pedidos
  */

  class Pedidos extends Conn
  { 

    function __construct()
  { 
       $this->conn = new Conn();
       $this->pdo = $this->conn->pdo();
  }



  public function insert($pedido){
    $query = $this->pdo->prepare("INSERT INTO `pedidos`(iduser,	produto,	reference,	status,	data,	hash ) 
    VALUES (:id_user,:produto	,	:reference	,:status,	:data,	:hash )");



    $query->bindValue(':iduser',$pedido['iduser']);
    $query->bindValue(':produto',$pedido['produto']);  
    $query->bindValue(':reference',$pedido['reference']); 
    $query->bindValue(':status',$pedido['status']); 
    $query->bindValue(':data',$pedido['data']); 
    $query->bindValue(':hash',$pedido['hash']); 
   

    if($query->execute()){
      return true;
    }else{
      return false;
    }
  }

}



?>