<?php

require_once 'CLASSELivro.php';

$livro = new Livro();

$idl=$_POST['cd'];

$livro->excluirMeuLivro($idl);
?>