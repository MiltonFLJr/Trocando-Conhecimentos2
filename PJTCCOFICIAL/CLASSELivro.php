<?php

class Livro {
 
    private $codigoLivro;
    private $nomeLivro;
    private $autorLivro;
    private $idadeLivro;
    private $estadoConservacao;
    private $generoLivro;
    
    public function __construct($codigoLivro, $nomeLivro, $autorLivro, $idadeLivro, $estadoConservacao, $generoLivro) {
        $this->codigoLivro = $codigoLivro;
        $this->nomeLivro = $nomeLivro;
        $this->autorLivro = $autorLivro;
        $this->idadeLivro = $idadeLivro;
        $this->estadoConservacao = $estadoConservacao;
        $this->generoLivro = $generoLivro;
    }

    public function getCodigoLivro() {
        return $this->codigoLivro;
    }

    public function getNomeLivro() {
        return $this->nomeLivro;
    }

    public function getAutorLivro() {
        return $this->autorLivro;
    }

    public function getIdadeLivro() {
        return $this->idadeLivro;
    }

    public function getEstadoConservacao() {
        return $this->estadoConservacao;
    }

    public function getGeneroLivro() {
        return $this->generoLivro;
    }

    public function setCodigoLivro($codigoLivro) {
        $this->codigoLivro = $codigoLivro;
    }

    public function setNomeLivro($nomeLivro) {
        $this->nomeLivro = $nomeLivro;
    }

    public function setAutorLivro($autorLivro) {
        $this->autorLivro = $autorLivro;
    }

    public function setIdadeLivro($idadeLivro) {
        $this->idadeLivro = $idadeLivro;
    }

    public function setEstadoConservacao($estadoConservacao) {
        $this->estadoConservacao = $estadoConservacao;
    }

    public function setGeneroLivro($generoLivro) {
        $this->generoLivro = $generoLivro;
    }

public function cadastrarMeuLivro(){
    
}
    
public function excluirMeuLivro(){
    
}

public function alterarMeuLivro(){
    
}

public function consultarMeuLivro(){
    
}

public function pesquisarLivroParaTrocar(){
    
}

}
