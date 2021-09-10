<?php


$listar_Produtos = $i->Produtos->listar();
// if(!isset($_SESSION['checkout']['iduser'])){
//     header('Location: checkout');

//    } else {

 ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Leoanrdo Marcelo , André Lucas , Gabriel Gomes">
    <meta name="generator" content="Hugo 0.82.0">  
   <link rel="stylesheet" href="./css/slide.css"> 
    <link rel="stylesheet" href="./css/menu.css">k
       <script src="./js/script.js" defer></script>
    <title>Biblioteca ETE</title>
    
    <!-- Bootstrap core CSS -->

   <script src="https://kit.fontawesome.com/ca14b9e588.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/princing.css">
    <link href="./biblioteca/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Favicons -->
 <!-- Favicons -->

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<meta name="theme-color" content="#7952b3">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
 

    
    <!-- Custom styles for this template -->
   
  </head>
  <body>
 

  <div class="container py-3">
       
      

         <div class="container py-3">
        <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="home" class="d-flex align-items-center text-dark text-decoration-none">
          <span class="fs-4">  <img src="./img/produto/logo.png" alt="" width="60px" style="margin-right: 9px;">Biblioteca ETE</span>
        </a>
    
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"  style="padding: 20px;">
                    <a class="me-3 py-2 text-dark text-decoration-none menu"  href="#home">Home</a>
                    <a class="me-3 py-2 text-dark text-decoration-none menu" href="#contato">contato</a>
                    <form class="form-inline" method="GET" action="pesquisar">
                        <div class="input-group">
                           <form class="form-inline" method="GET" action="pesquisar">  
              <input type="text" name="pesquisa" class="form-control" id="exampleInputName2" placeholder="Pesquisar"  required>
                    <span class="input-group-addon">
                        <button class="fa fa-search" style="background:transparent;border:none"></button>
                    </span>
                    </div>
                    </form>
                    </nav>
      
                        <!-- <span>
                          <button class="btn btn-primary" onclick="logout();" hrerf="#">Sair</button> 
                        </span> -->

  </header>

  <main>

    <!-- Comentario --> <!-- sessao principal do site onde estara os card com os livros  -->
        <div class="row mb-3 sm-6 text-center" id="home">
         <div class="carrosel">
           <div class="container-slide" id="img">
               
                <a  href="../biblioteca/produto/1"><img width="300px"  src="./img/produto/eleanorepark.jpg" alt=""></a>
                <a  href="../biblioteca/produto/16"><img  width="300px"  src="./img/produto/hpreliquias.jpeg" alt=""></a>
                <a  href="../biblioteca/produto/5"><img  width="300px" src="./img/produto/hprisioneiros.jpg" alt=""></a>
                <a  href="../biblioteca/produto/24"><img width="300px"  src="./img/produto/sherlock.jpg" alt=""></a>
                <a  href="../biblioteca/produto/21"><img  width="300px"  src="./img/produto/harrycalice.jpg" alt=""></a>
                <a  href="../biblioteca/produto/22"><img  width="300px" src="./img/produto/sociendadedoanel.jpg" alt=""></a>
                <a  href="../biblioteca/produto/13"><img width="300px"  src="./img/produto/gameofafuria .jpg" alt=""></a>
                <a  href="../biblioteca/produto/51"><img  width="350px"  src="./img/produto/after.jpg" alt=""></a>
                <a  href="../biblioteca/produto/53"><img  width="300px" src="./img/produto/afterdepoisdoencontro.jpg" alt=""></a>
                <a  href="../biblioteca/produto/7"><img width="300px"  src="./img/produto/percy.jpg" alt=""></a>
                <a  href="../biblioteca/produto/8"><img  width="300px"  src="./img/produto/percyTita.jpg" alt=""></a>
                <a  href="../biblioteca/produto/56"><img  width="350px" src="./img/produto/facasutil.jpg" alt=""></a>
      
           </div>
         </div>

        <!-- <section class="galeria" style="align-items: center;justify-content: center; display: flex;">
                <a class="foto" href="http://localhost/biblioteca/produto/1"><img width="300px"  src="./img/produto/logo.png" alt=""></a>
                <a class="foto" href="http://localhost/biblioteca/produto/1"><img width="300px"  src="./img/produto/eleanorepark.jpg" alt=""></a>
                <a class="foto" href="http://localhost/biblioteca/produto/2"><img  width="300px"  src="./img/produto/harry.jpeg" alt=""></a>
                <a class="foto" href="http://localhost/biblioteca/produto/5"><img  width="300px" src="./img/produto/hprisioneiros.jpg" alt=""></a>
          
         </section> -->
                  
       
        
           <?php
             
            if($listar_Produtos){
                while ($produto = $listar_Produtos->fetch(PDO::FETCH_OBJ)) {
            ?>
            
            <div class="col">  
          
           
            <div class="card mb-6  rounded-3 shadow-sm" style="min-height: 400px; margin-top: 20px;">
              <div class="card-header py-3" style="max-height: 65px; min-height: 65px;" >
                <h5 class="my-0 fw-normal" ><?= $produto->nome?></h5>
              </div>
              <div class="card-body">
                <div class="col-md-12 text-center">
                    <a  href="produto/<?= $produto->id?> ">
                        <img width="183px"height="275px"  src="img/produto/<?= $produto->img?>" alt="<?= $produto->nome?>" title="<?= $produto->nome?>">
                    </a>
                </div>
                <h4 class="card-title pricing-card-title" ><small class="text-muted fw-light"><?= $produto->autor?></small></h4>
                <ul class="list-unstyled mt-3 mb-4">
                  
                </ul>
                  <a type="button" class="w-100 btn btn-lg btn-outline-primary" href="produto/<?= $produto->id?> ">VER MAIS</a>
              </div>
            </div>
            </div>
          <?php } }else{ ?>
            <div class="card text-center">
                <h2>Nenhum produto encontrado</h2>
            </div>

         <?php  }//}?>

      </div>
       
    

         
      <footer class="pt-4 my-md-5 pt-md-5 border-top" id="contato">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="./img/produto/logo.png" alt="" width="60px">
        <small class="d-block mb-3 text-muted">&copy; 2020–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Desenvolvedores</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Leonardo Marcelo</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">André Lucas</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Gabriel Gomes</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team LAG</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Redes Sociais</h5>
        <ul class="list-unstyled text-small">


          <li class="mb-1"><a class="link-secondary text-decoration-none" target="_blank" href="https://m.facebook.com/etesurubim2" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="margin-left:27;">
           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
           </svg></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none"  target="_blank" href="https://www.instagram.com/eteantonioarrudadefarias/?utm_medium=copy_link"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-left:27;">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg> </a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none"  target="_blank" href="#">Fale conosco</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="http://etesurubim.pe.gov.br/index.php"  target="_blank">site ete</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre</h5>
        <ul class="list-unstyled text-small">
        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#"> Desenvolvedor: teamlag434@gmail.com</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Não hospedamos livros em nossos servidores apenas o indexamos</a></li>

        </ul>
      </div>
    </div>
  </footer>
</div>
<script src="js/function.js"></script>
    
  </body>
</html>