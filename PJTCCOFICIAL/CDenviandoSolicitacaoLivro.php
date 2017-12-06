<?php
include 'conexao.php';
require_once 'CLASSETrocaLivro.php';
include 'CDiniciarSessao.php';

$nomeBook =$_POST['nomeLivro'];
$cdLivro =$_POST['cd'];
$solicitacaotroca = new TrocaLivro();

$solicitacaotroca->cadastrarTrocaLivro($nomeBook,$cdLivro);

 /* INSERT NA livro_troca_livro */
      
 $stmt = $con->prepare("SELECT cdTrocaLivro FROM troca_livro WHERE cdUsuario=?");
 
 $stmt->bindParam(1,$_SESSION['cdUs']);

 $stmt->execute();
 
 while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
   
     $stmt2 = $con->prepare("INSERT INTO livro_troca_livro(cdLivro,cdUsuario,cdTrocaLivro) VALUES (?,?,?) ");
        
   $stmt2->bindParam(1,$cdLivro);
   $stmt2->bindParam(2,$_SESSION['cdUs']);
   $stmt2->bindParam(3,$linha['cdTrocaLivro']);
   
   $stmt2->execute();
   
   /* INSERT NA livro_troca_livro */
 }

   echo "<script>";
   echo "window.alert('A solicitação foi enviada.')";
   echo "</script>";
   
   echo "<script>";
   echo "location.href='TELALGDmeusLivros.php'";
   echo "</script>";
   

// echo header('location:TELALGDmeusLivros.php');
 
?>