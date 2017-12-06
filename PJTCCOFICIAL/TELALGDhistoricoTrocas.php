<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
   <head>

       <?php 
  include 'ocultarerros.php';
   include 'CDiniciarSessao.php'; 
   
       ?>
       
  <title>Solicitações pendentes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/jquery/jquery.min.js"></script>
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/boostrap/js/bootstrap.min.js"></script>
  
  <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: white;
}
</style>
<style>
#solicitacoespendentes{
          text-shadow:1px 0px #0F06FF;
      }
</style>
  <?php
 
  if( isset($_SESSION['email']) && isset($_SESSION['senha']) ){
       
  }else{
     
           echo "<html>";
   echo "<head>";
   echo "<meta http-equiv='refresh' content='0;url=TELAlogin.php'>";
   echo "</head>";
    echo "</html>"; 
      
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
    <a href="#">Histórico de trocas</a>
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
        <li><a> <?php echo "Bem-vindo, ".$_SESSION['nome'] ?> </a></li>
        <li><a href="CDencerrarSecao.php">Sair</a></li>
    </ul>
  </div>
</nav>
        
    <center><h3 id='solicitacoespendentes'> Histórico de trocas</h3></center>
        <?php
        
        require_once 'CLASSEHistoricoDeTroca.php';
        
   $livro = new HistoricoDeTroca();
   
   $livro->exibirHistoricoTroca();
        
        ?>
        

             
   <footer class="modal-footer">
      <div class="container">
          <span class="text-muted"><font color="white">Trocando Conhecimentos © 2017</font></span>
      </div>
    </footer>

      
    </body>
    
    
</html>
