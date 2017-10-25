<?php

class Usuario{
    
private $cpfContaUsuario;
private $rgContaUsuario;
private $nomeContaUsuario;
private $dataNascimentoContaUsuario;
private $telefoneContaUsuario;
private $enderecoContaUsuario;
private $nomeMaeUsuario;
private $nomePaiContaUsuario;
private $emailContaUsuario;
private $senhaContaUsuario;

public function __construct($cpfContaUsuario, $rgContaUsuario, $nomeContaUsuario, $dataNascimentoContaUsuario, $telefoneContaUsuario, $enderecoContaUsuario, $nomeMaeUsuario, $nomePaiContaUsuario, $emailContaUsuario,$senhaContaUsuario) {
    $this->cpfContaUsuario = $cpfContaUsuario;
    $this->rgContaUsuario = $rgContaUsuario;
    $this->nomeContaUsuario = $nomeContaUsuario;
    $this->dataNascimentoContaUsuario = $dataNascimentoContaUsuario;
    $this->telefoneContaUsuario = $telefoneContaUsuario;
    $this->enderecoContaUsuario = $enderecoContaUsuario;
    $this->nomeMaeUsuario = $nomeMaeUsuario;
    $this->nomePaiContaUsuario = $nomePaiContaUsuario;
    $this->emailContaUsuario = $emailContaUsuario;
    $this->senhaContaUsuario = $senhaContaUsuario;
}

public function getSenhaContaUsuario() {
    return $this->senhaContaUsuario;
}

public function setSenhaContaUsuario($senhaContaUsuario) {
    $this->senhaContaUsuario = $senhaContaUsuario;
}


public function getCodigoContaUsuario() {
    return $this->codigoContaUsuario;
}

public function getCpfContaUsuario() {
    return $this->cpfContaUsuario;
}

public function getRgContaUsuario() {
    return $this->rgContaUsuario;
}

public function getNomeContaUsuario() {
    return $this->nomeContaUsuario;
}

public function getDataNascimentoContaUsuario() {
    return $this->dataNascimentoContaUsuario;
}

public function getTelefoneContaUsuario() {
    return $this->telefoneContaUsuario;
}

public function getEnderecoContaUsuario() {
    return $this->enderecoContaUsuario;
}

public function getNomeMaeUsuario() {
    return $this->nomeMaeUsuario;
}

public function getNomePaiContaUsuario() {
    return $this->nomePaiContaUsuario;
}

public function getEmailContaUsuario() {
    return $this->emailContaUsuario;
}

public function setCodigoContaUsuario($codigoContaUsuario) {
    $this->codigoContaUsuario = $codigoContaUsuario;
}

public function setCpfContaUsuario($cpfContaUsuario) {
    $this->cpfContaUsuario = $cpfContaUsuario;
}

public function setRgContaUsuario($rgContaUsuario) {
    $this->rgContaUsuario = $rgContaUsuario;
}

public function setNomeContaUsuario($nomeContaUsuario) {
    $this->nomeContaUsuario = $nomeContaUsuario;
}

public function setDataNascimentoContaUsuario($dataNascimentoContaUsuario) {
    $this->dataNascimentoContaUsuario = $dataNascimentoContaUsuario;
}

public function setTelefoneContaUsuario($telefoneContaUsuario) {
    $this->telefoneContaUsuario = $telefoneContaUsuario;
}

public function setEnderecoContaUsuario($enderecoContaUsuario) {
    $this->enderecoContaUsuario = $enderecoContaUsuario;
}

public function setNomeMaeUsuario($nomeMaeUsuario) {
    $this->nomeMaeUsuario = $nomeMaeUsuario;
}

public function setNomePaiContaUsuario($nomePaiContaUsuario) {
    $this->nomePaiContaUsuario = $nomePaiContaUsuario;
}

public function setEmailContaUsuario($emailContaUsuario) {
    $this->emailContaUsuario = $emailContaUsuario;
}

public function criarConta(){
   
    $cpf = $this->getCpfContaUsuario();
    $rg = $this->getRgContaUsuario();
    $nome = $this->getNomeContaUsuario();
    $dtn = $this->getDataNascimentoContaUsuario();
    $telefone = $this->getTelefoneContaUsuario();
    $endereco= $this->getEnderecoContaUsuario();
    $nomeMae=$this->getNomeMaeUsuario();
    $nomePai=$this->getNomePaiContaUsuario();
    $email=$this->getEmailContaUsuario();
    $senha=$this->getSenhaContaUsuario();
    
    include 'conexao.php';
    
    try{
        
    include 'conexao.php';
    $stmt = $con->prepare("INSERT INTO usuario(cpfUsuario,rgUsuario,nomeUsuario,dtNascimento,telefone,endereco,nomeMae,nomePai,email,senha) VALUES (?,?,?,?,?,?,?,?,?,?)");
    
    $stmt->bindParam(1,$cpf);
    $stmt->bindParam(2,$rg);
    $stmt->bindParam(3,$nome);
    $stmt->bindParam(4,$dtn);
    $stmt->bindParam(5,$telefone);
    $stmt->bindParam(6,$endereco);
    $stmt->bindParam(7,$nomeMae);
    $stmt->bindParam(8,$nomePai);
   $stmt->bindParam(9,$email);
   $stmt->bindParam(10,$senha);
   
   $stmt->execute();
   
   echo "<script>";
   echo "window.alert('O cadastro foi concluído!')";
   echo "</script>";
   
    }catch(PDOException $e){
      
    
     echo "<script>";
   echo "window.alert('Houve um erro ao efetuar o cadastro.')";
   echo "</script>";
   
        //echo "ERROR: ". $e->getMessage();
        
    }
   
}

public function excluirConta(){
    
}

public function alterarConta(){
    
}

public function gerenciarPerfisDeUsuario(){
    
}

public function bloquearConta(){
    
}
}

?>

