<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
   <head>
  <title>Início</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/boostrap/js/bootstrap.min.js"></script>

  <style>
      
            
#livrob{
          text-shadow:1px 1px #0F06FF;
      }
      
  </style>
  
    <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 4px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 6px;
    padding-bottom: 6px;
    text-align: left;
    background-color: blue;
    color: white;
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
      <li class="active"><a href="#">Início</a></li>
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
       BARRA DE PESQUISA - AINDA VOU PROGRAMAR -->
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="TELAcadastroUsuario.php">Cadastrar</a></li>
      <li><a href="TELAlogin.php">Login</a></li>
    </ul>
  </div>
</nav>
      

   

    <div class="banner banner1">
            <h1>Trocando Conhecimentos</h1>
            <div class="slogan">O site definitivo para trocar livros!</div>
        </div>
        <div class="banner banner2">
            <!--<h1>Automobile</h1>-->
            <!-- <div class="slogan">The true fan club</div> -->
        </div>             
        <br>
    <center>
        <h3 id="livrob">Livros da nossa base!</h3>
    </center>
    <br>
        <?php
        include 'CDexibirTodosOsLivros.php';
        ?>
             
   <footer class="modal-footer">
      <div class="container">
          <span class="text-muted"><font color="white">Trocando Conhecimentos © 2017</font></span>
      </div>
    </footer>

      
    </body>
    
    
</html>
