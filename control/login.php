<?php

 session_start();

  require_once  '../class/Conn.class.php';
  require_once '../class/clientes.class.php';


  $clientes =  new Clientes();
   
   if(isset($_POST['email'])){
       $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
       $senha = $_POST['senha'];

       $login = $clientes->login($email, $senha);

       var_dump($login);
   }




?>