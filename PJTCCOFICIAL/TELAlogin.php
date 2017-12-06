<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
   <head>

  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/jquery/jquery.min.js"></script>
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/boostrap/js/bootstrap.min.js"></script>
  <style>
  /* #loginicon{
       position:relative;
       bottom:-170px;
       right:-515px;
      }*/
      
#login{
          
          position:relative;
          right:-547px;
          bottom:-165px;
          text-shadow:1px 1px #0F06FF;
      }
      
   </style>
</head>

    <body class="body">
 
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trocando Conhecimentos</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="index.php">Início</a></li>
     <li><a href="#">Constitucional</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
      
      <!-- BARRA DE PESQUISA - AINDA VOU PROGRAMAR 
       <form class="navbar-form navbar-left">
      <div>
        <input type="text" class="form-control" placeholder="Procurar">
        <input type="submit" value="Pesquisar">
      </div>
       </form>
     BARRA DE PESQUISA - AINDA VOU PROGRAMAR  -->
      
    <ul class="nav navbar-nav navbar-right">
        <li><a href="TELAcadastroUsuario.php">Cadastrar</a></li>
        <li class="active"><a href="TELAlogin.php">Login</a></li>
    </ul>
  </div>
</nav>
        
       <h1 id="login">Login</h1> 
        
<form action="CDautenticacaoLogin.php" method="POST">
   
    <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input maxlength="30" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" maxlength="30" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
   
             
   <footer class="modal-footer">
      <div class="container">
          <span class="text-muted"><font color="white">Trocando Conhecimentos © 2017</font></span>
      </div>
    </footer>

      
    </body>
    
    
</html>
