<?

// if(isset($_SESSION['checkout']['iduser'])){
    // header('Location: home');

   //}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>Login ou Cadastro</title>
  </head>
  <body>
  
  <div class="container">
  <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
      <span class="fs-4">Login ou Cadastro</span>
    </a>
  </header>
  <div class="row">
    
      <?php

      //  if(isset($_SESSION['checkout']['iduser'])){

      
      

      ?>
      <?php //}//else{?>

        <div class="col-md-12 text-center">
            <h2>Faça login ou Crie sua conta</h2>
        </div>

       <div class="col-md-6">
           <div class="card" style="min-height:200px;padding: 20px;">
               <div class="card-head">
                   <h3>Faça login</h3>
               </div>
               <div class="form-group">
                   <input class="form-control"  id="email" name="email" placeholder="digite seu email"  value="">
               </div>
               <div class="form-group">
                   <input class="form-control" type="password"  id="senha" name="senha" placeholder="digite sua senha"  value="">
               </div>
               <div class="form-group">
                   <button onclick= "login();" type="button" style="width: 100%;" class="btn btn-lg btn-outline-info" id="login" name="login">Entrar</button>
               </div>
           </div>
        </div>
        
       <div class="col-md-6">
              <div class="card" style="min-height:200px;padding: 20px;">
               <div class="card-head">
                   <h3>Criar conta</h3>
               </div>
               <div class="form-group">
                   <input class="form-control"  id="email_criar" name="email_criar" placeholder="digite seu email"  value="">
               </div>
               <div class="form-group">
                   <input class="form-control" type="password"  id="senha_criar" name="senha_criar" placeholder="digite sua senha"  value="">
               </div>
               <div class="form-group">
                   <button onclick="create();" type="button" style="width: 100%;" class="btn btn-lg btn-outline-info" id="login" name="login">Criar</button>
               </div>
           </div >
         </div >
      <!-- <?php //}?> -->

    


   </div>
  </div>

    









  <script src="js/function.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>