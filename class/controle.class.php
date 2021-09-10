<?php

 /**
  * controle
  */

  class Controle extends Conn
  { 

    function __construct()
  { 
       $this->conn = new Conn();
       $this->pdo = $this->conn->pdo();
  }


}



?>