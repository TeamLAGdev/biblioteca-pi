<?php

 /**
 * 
 *Conexao
 */


  class Conn{

       private $host;
       private $user;
       private $senha;
       private $bd;


       public function pdo(){
        
        
        $host = "localhost";
        $user = "root";
        $senha = "";
        $bd = "lojas";
       
     
        try{
          $pdo = new PDO("mysql:host=$host;dbname=$bd",$user, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND  => "SET NAMES utf8"));
          return $pdo;
        } catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}

  }

 
}

?>