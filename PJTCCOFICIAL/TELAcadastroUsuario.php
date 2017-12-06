<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
   <head>

  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/bootstrap/css/bootstrap.min.css">
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/jquery/jquery.min.js"></script>
  <script src="/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/vendor/boostrap/js/bootstrap.min.js"></script>
  
  <style>
  
      #registrar{
          
          position:relative;
          right:-515px;
          bottom:-160px;
          text-shadow:1px 1px #0F06FF;
      }
      
      #cadicon{
       position:relative;
       bottom:-165px;
       right:-515px;
      }
      
  </style>
  
  <!--VALIDAR CPF -->
  <script>
  function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    if (!v) {
        alert(c + "nCPF Válido")
    }
}
  </script>
  <!-- VALIDAR CPF -->
  
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
        <li class="active"><a href="#">Cadastrar</a></li>
        <li><a href="TELAlogin.php">Login</a></li>
    </ul>
  </div>
</nav>

                <h1 id="registrar">Cadastrar</h1> 
                
        <form action="CDcadastrandoUsuario.php" method="POST" enctype="multipart/form-data">
            
    <div class="form-group">
    <label>Avatar(obrigatório)</label>
    <input type="file" class="form-control" name="image" required>
  </div>
    
     <div class="form-group">
    <label>CPF(obrigatório)</label>
    <input maxlength="11" type="text" class="form-control" placeholder="CPF" name="cpf" maxlength="11" onblur="return verificarCPF(this.value)" required>
  </div>
    
     <div class="form-group">
    <label>RG(obrigatório)</label>
    <input type="text" maxlength="9" name="rg" class="form-control" placeholder="RG" required>
  </div>
    
     <div class="form-group">
    <label>Nome(obrigatório)</label>
    <input type="text" maxlength="40" name="nome" class="form-control" placeholder="Nome" required>
  </div>
    
     <div class="form-group">
    <label>Data de nascimento(obrigatório)</label>
    <input type="date" name="dtn" class="form-control" placeholder="Data de nascimento" required>
  </div>
    
     <div class="form-group">
    <label>Telefone(obrigatório)</label>
    <input type="text" maxlength="11" name="telefone" class="form-control" placeholder="Telefone" required>
  </div>
    
     <div class="form-group">
    <label>Endereço(obrigatório)</label>
    <input type="text" maxlength="30" name="endereco" class="form-control" placeholder="Endereço" required>
  </div>
    
     <div class="form-group">
    <label>Nome da mãe(obrigatório)</label>
    <input type="text" maxlength="30" name="nomemae" class="form-control" placeholder="Nome da mãe" required>
  </div>
    
     <div class="form-group">
    <label>Nome do Pai(obrigatório)</label>
    <input type="text" maxlength="30" name="nomepai" class="form-control" placeholder="Nome do pai" required>
  </div>
    
    
    
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail(obrigatório)</label>
    <input required maxlength="30" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha(obrigatório)</label>
    <input required maxlength="30" type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
