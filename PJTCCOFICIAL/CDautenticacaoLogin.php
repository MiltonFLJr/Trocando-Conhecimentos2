<?php

require_once 'CLASSEUsuario.php';
$email=$_POST['email'];
$senha=$_POST['senha'];

$us = new Usuario();

$us->consultarConta($email, $senha);

include 'CDinciarSessao.php';

?>