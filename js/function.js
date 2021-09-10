// função de login com js que esta requerindo o  login que esta em control
// que pede o cliente.class
function login(){ 
    var email = $("#email").val();
    var senha = $("#senha").val();


    $.post('control/login.php', {email:email,senha:senha}, function(data){
     window.location= 'home';


    });
}

function login2(){ 
   var email = $("#email").val();
   var senha = $("#senha").val();


   $.post('control/login.php', {email:email,senha:senha}, function(data){
    console.log(data);
    

   });
}
function logout(){ 
       window.location='logout';
}

// função para criar a conta do usuario 
// e redirecionar ele para o home
function create(){
   var email = $("#email_criar").val();
   var senha = $("#senha_criar").val();


   $.post('control/create.php',{email:email,senha:senha},function(data){
     var obj = JSON.parse(data);
      if(obj.erro){
          alert(obj.msg);

          if(obj.create == 1){
           $("#email_criar").val('');
           $("#senha_criar").val('');
          }

      }else{
          $.post('control/load.php',{load:true},function(data){
              
                window.location.href = 'home';
                if(data == 1){
                    location.reload();
                }else{
                    alert('Ocorreu um erro , faça login');
                }
          });
      }
   });
}

//  função de criar um pedido apos logar ou criar conta mas que n sera usada agora
function create_pedido(){
   $.post('control/create_pedido.php',{create:true},function(data){
   
   var obj = JSON.parse(data);

    if(obj.erro){
        alert(obj.msg);
    }else{
        if(obj.msg == "sucesso"){
            location.href=obj.link;
        }
    }

  
  
   });
   
   
}