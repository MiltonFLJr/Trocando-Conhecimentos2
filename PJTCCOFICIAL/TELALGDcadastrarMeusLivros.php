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
   include 'ocultarerros.php';
       ?>
       
  <title>Cadastrar livros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/boostrap/js/bootstrap.min.js"></script>
  <style>
  #cadastrarlivro{
          text-shadow:1px 0px #0F06FF;
              position:relative;
          right:-515px;
          bottom:-165px;
      }
</style>
  
  <style>
      
      #imgavatarEA{
          
          position:relative;
          right:-517px;
          bottom: 1082px; 
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
    <a href="#">Cadastrar meus livros</a>
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
    <a href="TELALGDencerrarConta.php">Excluir conta</a>
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
        <li><a>Seja bem-vindo(a) <?php echo $_SESSION['email']?>! </a></li>
        <li><a href="CDencerrarSecao.php">Sair</a></li>
    </ul>
  </div>
</nav>
        
        <h3 id='cadastrarlivro'>Cadastrar livro</h3>
        
        <?php
        
        include 'conexao.php';
        
        $email = $_SESSION['email'];
        
        $stmt= $con->prepare("SELECT cdUsuario FROM usuario WHERE email=?");
        
        $stmt->bindParam(1,$email);
        
        $stmt->execute();
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $cdUsuario = $linha['cdUsuario'];
            
       echo "<form action='CDcadastrandoLivro.php' method='POST' enctype='multipart/form-data'>";
    
    echo "<div class='form-group'>";
    echo "<label>Capa</label>";
    echo "<input type='file' class='form-control'name='image'>";
 echo " </div>";
    
     echo "<div class='form-group'>";
   //echo "<label>Código Livro</label>";
   echo "<input type='hidden' class='form-control' placeholder='Codigo livro' name='cdUsuario' value='$cdUsuario' readonly>";
 echo "</div>";
 
 //INPUT COM VALOR DO EMAIL DO USUARIO LOGADO PARA SER PASSADO COMO PARAMETRO NO $_POST
   echo "<input type='hidden' class='form-control' placeholder='Codigo livro' name='email' value='$email' readonly>";
 
    
    echo "<div class='form-group'>";
   echo "<label>Nome do Livro</label>";
 echo   "<input type='text' name='nomeLivro' class='form-control' placeholder='Nome do livro'>";
echo  "</div>";
    
     echo "<div class='form-group'>";
   echo " <label>Autor do livro</label>";
    echo "<input type='text' name='autorLivro' class='form-control' placeholder='Autor do livro'>";
 echo " </div>";
    
    echo " <div class='form-group'>";
   echo " <label>Idade do livro</label>";
   echo " <input type='text' name='idadeLivro' class='form-control' placeholder='Idade do livro'>";
  echo "</div>";
    
    echo" <div class='form-group'>";
   echo "<label>Estado de conservação</label>";
  echo  "<input type='text' name='estadoConservacao' class='form-control' placeholder='Estado de conservação'>";
echo " </div>";
    
    echo" <div class='form-group'>";
    echo"<label>Genero<label>";
   echo" <input type='text' name='genero' class='form-control' placeholder='Genero'>";
echo"  </div>";
    
  echo "<div class='form-group'>";
    echo "<button type='submit' class='btn btn-primary'>Enviar</button>";
  echo "</div>";
echo "</form>";
           
        }
        
        ?>
        

      

             
   <footer class="modal-footer">
      <div class="container">
          <span class="text-muted"><font color="white">Trocando Conhecimentos © 2017</font></span>
      </div>
    </footer>

      
    </body>
    
    
</html>
