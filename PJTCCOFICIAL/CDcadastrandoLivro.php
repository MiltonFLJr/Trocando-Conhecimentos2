<?php

require_once 'CLASSELivro.php';
require_once 'CLASSEUsuarioLivro.php';

$livro = new Livro();

$email = $_POST['email'];
$cdUsuario = $_POST['cdUsuario'];
//$codigo=$_POST['cdLivro'];
$nome=$_POST['nomeLivro'];
$autor=$_POST['autorLivro'];
$idade=$_POST['idadeLivro'];
$estado=$_POST['estadoConservacao'];
$genero=$_POST['genero'];
$img = $_FILES['image'];

$livro->cadastrarMeuLivro($nome, $autor, $idade, $estado, $genero, $cdUsuario);

//$cduslivro = new UsuarioLivro();


//$cduslivro->gerarIDusuarioLivro($email);

  echo "<html>";
   echo "<head>";
   /*
   echo "<script language='javascript'>";
     echo "alert('O livro foi cadastrado.')";
     echo "</script>";
   */
   echo "<meta http-equiv='refresh' content='0;url=TELALGDmeusLivros.php'>";
   
   echo "</head>";
    echo "</html>";   
     

?>

