<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
   <head>

       <?php 
  
   include 'CDiniciarSessao.php'; 
   
       ?>
       
  <title>Início</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/boostrap/js/bootstrap.min.js"></script>
  
  <style>
      
      #imgavatarEA{
          
          position:relative;
          right:-530px;
          bottom:318px; 
      }
      
      #usnome{
          color:#01104E;
          position:relative;
          right:27px;
          bottom:10px;
      }
  </style>
  
  
   <?php
   
  if( isset($_SESSION['email']) && isset($_SESSION['senha']) ){
      
  }else{
     /*
          echo "<html>";
   echo "<head>";
   echo "<meta http-equiv='refresh' content='0;url=TELAlogin.php'>";
   echo "</head>";
    echo "</html>";   
      */
  }
  
  ?>
  
</head>

    <body class="body">
 
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trocando Conhecimentos</a>
    </div>
    <ul class="nav navbar-nav">
        <li>
            <div class="dropdown">
  <button class="dropbtn">Livros</button>
  <div class="dropdown-content">
    <a href="TELALGDcadastrarMeusLivros.php">Cadastrar livro</a>
    <a href="TELALGDmeusLivros.php">Gerenciar meus livros</a>
    <a href="TELALGDsolicitacoesPendentes.php">Solicitações de troca</a>
    <a href="TELALGDhistoricoTrocas.php">Histórico de trocas</a>
  </div>
</div>    
        </li>
      <li>
            
            <div class="dropdown">
  <button class="dropbtn">Gerenciar conta</button>
  <div class="dropdown-content">
    <a href="TELALGDalterarDados.php">Alterar dados</a>
    <a href="#">Excluir conta</a>
  </div>
</div>
            
        </li>
      <li><a href="#">Contato</a></li>
    </ul>
      
      
       <form class="navbar-form navbar-left"  action="TELALGDpesquisarLivros.php" method="POST">
      <div>
        <input type="text" class="form-control" placeholder="Procurar" name="info">
        <input type="submit" value="Pesquisar">
      </div>
       </form>
      
    <ul class="nav navbar-nav navbar-right">
        <li><a> <?php echo "Bem-vindo, ".$_SESSION['nome']; ?> </a></li>
        <li><a href="CDencerrarSecao.php">Sair</a></li>
    </ul>
  </div>
</nav>
        
       <?php
        
        include 'conexao.php';
        
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        
        $stmt= $con->prepare("SELECT avatar,nomeUsuario  FROM usuario WHERE email=? AND senha=?");
        
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$senha);
        
        $stmt->execute();
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            
          //echo "<img src='$avatar' height='42' width='42'>";
            $avatar = $linha['avatar'];
            $nome = $linha['nomeUsuario'];
            
            echo "<table>";
            echo "<tr>";
            echo "<center>";
            echo "<h4 id='usnome'>";
            print_r($nome);
            echo "</h4>";
            echo "</tr>";
            echo "</center>";
            echo "<td>";
            echo "<img id='imgavatarEA' src='/avataresus/$avatar' height='180' width='160'>";
            echo "</td>";
        }
       
       ?>
        
<form action="CDencerrandoConta.php" method="POST">
    <div class="form-group">
    <label>Encerrar conta</label>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"><p>E-mail</p></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
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
