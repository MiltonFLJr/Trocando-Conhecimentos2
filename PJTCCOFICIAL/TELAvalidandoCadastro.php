<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="/PJTCC/vendor/gulpfile.js"></script>
    <script type="text/javascript" src="/PJTCC/vendor/package.json"></script>
    
    <title>Início</title>

    <!-- Bootstrap core CSS -->
    <link href="/PJTCC/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>
      
      <?php

      require_once 'CLASSEUsuario.php';
      
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $dtn = $_POST['dtn'];
    $telefone = $_POST['telefone'];
    $endereco= $_POST['endereco'];
    $nomeMae= $_POST['nomemae'];
    $nomePai=$_POST['nomepai'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $usuario = new Usuario($cpf, $rg, $nome, $dtn, $telefone, $endereco, $nomeMae, $nomePai, $email, $senha);
    
    $usuario->criarConta();
      
      ?>
      
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <!--<a class="navbar-brand" href="#">Start Bootstrap</a> -->
        <img src="/PJTCC/vendor/imagens/tcclogotopo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button
       
        <center>
<form id="demo-2" action="pagina.php" METHOD="POST">
	<input type="search" placeholder="Search">
</form>
            </center>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="TELAindex.php">Início
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Entrar</a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Institucional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<div class="cadastroimg">
<img src="/PJTCC/vendor/imagens/cadastroicon.png" width="150" height="110">
</div>
<div class="cadastro">
  <form action="TELAvalidandoCadastro.php" method="POST">
      <p>CPF: <input type="text" name="cpf" required="Campo obrigatório!"> </p>
   <p> RG:<input type="text" name="rg" required></p>
  <p>  Nome:<input type="text" name="nome" required></p>
  <p>  Data de nascimento:<input type="date" name="dtn" required></p>
  <p>  Telefone:<input type="text" name="telefone" required></p>
  <p>  Endereço:<input type="text" name="endereco" required></p>
   <p> Nome da mãe:<input type="text" name="nomemae" required></p>
  <p>  Nome do Pai:<input type="text" name="nomepai" required></p>
  <p>  E-mail:<input type="text" name="email" required></p>
   <p> Senha: <input type="password" name="senha" required></p>

 <p><input type="submit" value="Enviar"></p><p>
  </form>
</div>

<div class="loginimg">
<img src="/PJTCC/vendor/imagens/loginicon.png" width="145" height="105">
</div>



<div class="login">
<form action="loginCadastro.php" method="POST">
    <p>E-mail:<input type="text" name="email"></p>
   <p> Senha: <input type="password" name="senha"></p>
    <p><input type="submit" value="Enviar"></p>
  </form>
</div>

<p><h4>Ultimos livros adicinionados!</h4></p>

<p><h4>SELECT NO BANCO PARA VER OS ULTIMOS LIVROS ADICIONADOS</h4></p>
    
    <!-- Page Content -->
    <!-- SEM USO! 
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
          <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
          <ul class="list-unstyled">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul>
        </div>
      </div>
    </div>
    SEM USO! -->                   
    
   
    
    <!-- Bootstrap core JavaScript -->
    <script src="/PJTCC/vendor/jquery/jquery.min.js"></script>
    <script src="/PJTCC/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <div class="footer">
        <font color="white">Projeto Trocando Conhecimentos © 2017</font>
    </div>   
    
  </body>

</html>
