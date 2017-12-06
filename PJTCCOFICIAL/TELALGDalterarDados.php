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
  <link rel="stylesheet" href="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/jquery/jquery.min.js"></script>
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/boostrap/js/bootstrap.min.js"></script>
  
  <style>
      
      #imgavatarEA{
          
          position:relative;
          right:-530px;
          bottom: 855px; 
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
    <a href="TELALGDcadastrarMeusLivros.php">Cadastrar meus livros</a>
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
    <a href="#">Alterar dados</a>
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
        
        <?php
        
        include 'conexao.php';
        
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        
        $stmt= $con->prepare("SELECT *  FROM usuario WHERE email=? AND senha=?");
        
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$senha);
        
        $stmt->execute();
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $cpf = $linha['cpfUsuario'];
            $rg = $linha['rgUsuario'];
            $nome = $linha['nomeUsuario'];
            $dtn = $linha['dtNascimento'];
            $telefone = $linha['telefone'];
            $endereco = $linha['endereco'];
            $nomeMae = $linha['nomeMae'];
            $nomePai = $linha['nomePai'];
            $emailbd = $linha['email'];
            $senhabd = $linha['senha'];
            $id = $linha['cdUsuario'];
            
            
            //AVATAR
            
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
            echo "<img id='imgavatarEA' src='/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/avataresus/$avatar' height='180' width='160'>";
            echo "</td>";
            
            //AVATAR
             
            
             
       echo "<form action='CDalterandoDadosUs.php' method='POST' enctype='multipart/form-data'>";
    
    echo "<div class='form-group'>";
    echo "<label>Avatar</label>";
    echo "<input type='file' class='form-control'name='image'>";
 echo " </div>";
    
   echo "<div class='form-group'>";
    echo "<label>ID</label>";
    echo "<input type='text' class='form-control'name='id' value='$id'readonly>";
 echo " </div>";
 
     echo "<div class='form-group'>";
   echo "<label>CPF</label>";
   echo "<input type='text' class='form-control' placeholder='CPF' name='cpf' value='$cpf'>";
 echo "</div>";
    
    echo "<div class='form-group'>";
   echo "<label>RG</label>";
 echo   "<input type='text' name='rg' class='form-control' placeholder='RG' value='$rg'>";
echo  "</div>";
    
     echo "<div class='form-group'>";
   echo " <label>Nome</label>";
    echo "<input type='text' name='nome' class='form-control' placeholder='Nome' value='$nome'>";
 echo " </div>";
    
    echo " <div class='form-group'>";
   echo " <label>Data de nascimento</label>";
   echo " <input type='date' name='dtn' class='form-control' placeholder='Data de nascimento' value='$dtn'>";
  echo "</div>";
    
    echo" <div class='form-group'>";
   echo "<label>Telefone</label>";
  echo  "<input type='text' name='telefone' class='form-control' placeholder='Telefone' value='$telefone'>";
echo " </div>";
    
    echo" <div class='form-group'>";
    echo"<label>Endereço</label>";
   echo" <input type='text' name='endereco' class='form-control' placeholder='Endereço' value='$endereco'>";
echo"  </div>";
    
     echo"<div class='form-group'>";
   echo" <label>Nome da mãe</label>";
   echo" <input type='text' name='nomemae' class='form-control' placeholder='Nome da mãe' value='$nomeMae'>";
 echo" </div>";
    
    echo"<div class='form-group'>";
   echo"<label>Nome do Pai</label>";
   echo"<input type='text' name='nomepai' class='form-control' placeholder='Nome do pai' value='$nomePai'>";
  echo"</div>";
    
    
    /*
  echo "<div class='form-group'>";
    echo "<label for='exampleInputEmail1'>Novo e-mail</label>";
    echo "<input value='$emailbd' type='email' name='nemail' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>";
 echo " </div>";
  echo "<div class='form-group'>";
  echo "<label for='exampleInputPassword1'>Nova Senha</label>";
    echo "<input value='$senhabd' type='password' name='nsenha' class='form-control' id='exampleInputPassword1' placeholder='Password'>";
  echo "</div>";
echo "</form>";
   */
  
  /*
   echo "<div class='form-group'>";
    echo "<label for='exampleInputEmail1'>E-mail atual(Obrigatório)</label>";
    echo "<input value='$emailbd' type='email' name='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>";
 echo " </div>";
  echo "<div class='form-group'>";
  echo "<label for='exampleInputPassword1'>Senha atual(Obrigatório)</label>";
    echo "<input value='$senhabd' type='password' name='senha' class='form-control' id='exampleInputPassword1' placeholder='Password'>";*/
   echo "<div class='form-group'>";
    echo "<button type='submit' class='btn btn-primary'>Alterar</button>";
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
