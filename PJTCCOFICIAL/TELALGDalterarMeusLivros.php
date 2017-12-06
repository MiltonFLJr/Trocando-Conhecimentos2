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
    background-color: #4CAF50;
    color: white;
}
</style>
<style>
 #alterarmeuslivros{
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
    <a href="#">Gerenciar meus livros</a>
    <a href="#">Solicitações de troca</a>
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
        <li><a> <?php echo "Bem-vindo, ".$_SESSION['nome']; ?> </a></li>
        <li><a href="CDencerrarSecao.php">Sair</a></li>
    </ul>
  </div>
</nav>
        
    <center><h3 id='alterarmeuslivros'>Alterar meus livros</h3></center>
      
        <?php
        
       include 'conexao.php';
        
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        $idus = $_SESSION['cdUs'];
        
        $stmt= $con->prepare("SELECT cdLivro FROM usuario_livro WHERE cdUsuario=?");
        
        $stmt->bindParam(1,$idus);
        
        $stmt->execute();
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $cdLivros = ($linha['cdLivro']);
            //var_dump($cdLivros);
            
                    $stmt2 = $con->prepare("SELECT * FROM livro WHERE cdLivro=? ");
        
        $stmt2->bindParam(1,$cdLivros);
        
        $stmt2->execute();
        
        while($linha2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
 
             $nome = $linha2['nomeLivro'];
         $cdLivro = $linha2['cdLivro'];   
         $capa = $linha2['capa'];   
         $autor = $linha2['autorLivro'];
         $idade = $linha2['idadeLivro'];
         $estado = $linha2['estadoConservacaoLivro'];
         $genero = $linha2['generoLivro'];
         
         echo "<form action='CDalterandoLivros.php' method='POST'>";
        echo "<table border='2' id='customers'>";
        echo "<tr>";
        
        echo "<th>";
        echo "Capa";
        echo "</th>";
        
         echo "<th>";
        echo "ID";
        echo "</th>";
        
           echo "<th>";
        echo "Nome";
        echo "</th>";
        
        echo "<th>";
        echo "Autor";
        echo "</th>";
        
        echo "<th>";
        echo "Idade";
        echo "</th>";
        
         echo "<th>";
        echo "Estado de conservação";
        echo "</th>";
        
        echo "<th>";
        echo "Gênero";
        echo "</th>";
        
        
        echo "<th>";
        echo "Ação";
        echo "</th>";
        
        
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>";
       // echo "<img src='/PJTC/capaslivros/$capa' width='120' height='150' ";
        echo "<input type='file' class='form-control' name='image'>";
        echo "</td>";
        
        echo "<td>";
        echo $cdLivro;
        echo "<input type='hidden' name='cd' value='$cdLivro'>";
        echo "</td>";
        
         echo "<td>";
        echo "<input type='text' name='nome' value='$nome'>";
        echo "</td>";
        
        echo "<td>";
        echo "<input type='text' name='autor' value='$autor'>";
        echo "</td>";
        
        echo "<td>";
        echo "<input type='text' name='idade' value='$idade'>";
        echo "</td>";
        
        echo "<td>";
        echo "<input type='text' name='estadoconservacao' value='$estado'>";
        echo "</td>";
        
         echo "<td>";
        echo "<input type='text' name='genero' value='$genero'>";
        echo "</td>";
        
        
        echo "<td>";
        echo "<input type='submit' class='form-control' value='Alterar'>";
        echo "</td>";

        
        echo "</table>";  
        echo "</form>";

            
        }
        
        }
    


        
        ?>
        

             
   <footer class="modal-footer">
      <div class="container">
          <span class="text-muted"><font color="white">Trocando Conhecimentos © 2017</font></span>
      </div>
    </footer>

      
    </body>
    
    
</html>
