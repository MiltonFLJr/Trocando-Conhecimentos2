<?php
/*
include 'conexao.php';

  $stmt2 = $con->query("SELECT cdUsuario,nomeUsuario,email,senha FROM usuario");
     
       $stmt2->execute();
       
       while($linha = $stmt2->fetch(PDO::FETCH_ASSOC)){

        $_SESSION['nome'] = $linha['nomeUsuario'];
        $_SESSION['cdUs'] = $linha['cdUsuario'];
         $_SESSION['email'] = $linha['email'];
         $_SESSION['senha'] = $linha['senha'];

}
*/

session_start();

$_SESSION['email'];
$_SESSION['senha'];
$_SESSION['nome'];
$_SESSION['cdUs'];

