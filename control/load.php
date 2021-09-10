<?php


 session_start();

 if(isset($_POST['load'])){
 

    if(isset($_SESSION['USER'])){  
     

    $_SESSION['checkout']['iduser'] = $_SESSION['USER']['id'];
    echo 1;

 }else{
     echo 0;
 }


 }













?>