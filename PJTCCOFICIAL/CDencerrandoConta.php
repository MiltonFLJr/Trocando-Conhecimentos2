<?php

require_once 'CLASSEUsuario.php';

$email=$_POST['email'];
$senha=$_POST['senha'];

$usuario = new Usuario();

$usuario->excluirConta($email, $senha);

?>