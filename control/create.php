<?php

 session_start();

  require_once  '../class/Conn.class.php';
  require_once '../class/clientes.class.php';


  $clientes =  new Clientes();
   
   if(isset($_POST['email']) && isset($_POST['senha'])){


    if($_POST['email'] !="" && $_POST['senha'] !=""){

        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senha'];
        $create = $clientes->create($email,$senha);
 
        if($create){
            $login = $clientes->login($email,$senha);
            if($login){
                echo '{"erro":false,"create":1 ,"login":1, "msg":"logado"}';
            }else{
                echo '{"erro":true, "create":1,"login":0, "msg":"criado mas nao logado"}';
            }
        }else{
            echo '{"erro":true,"create":0, "login":0, "msg":"nao consegui criar a conta"}';
        }

    }


      
   
 
}
?>
