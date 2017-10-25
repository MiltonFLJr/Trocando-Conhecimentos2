<?php

class TrocaLivro {

   private $codigoTrocaLivro;
   private $nomeLivro;
   private $codigoContaUsuario;
   private $nomeContaUsuario;
   private $emailContaUsuario;
   
   public function __construct($codigoTrocaLivro, $nomeLivro, $codigoContaUsuario, $nomeContaUsuario, $emailContaUsuario) {
       $this->codigoTrocaLivro = $codigoTrocaLivro;
       $this->nomeLivro = $nomeLivro;
       $this->codigoContaUsuario = $codigoContaUsuario;
       $this->nomeContaUsuario = $nomeContaUsuario;
       $this->emailContaUsuario = $emailContaUsuario;
         
   }

   public function getCodigoTrocaLivro() {
       return $this->codigoTrocaLivro;
   }

   public function getNomeLivro() {
       return $this->nomeLivro;
   }

   public function getCodigoContaUsuario() {
       return $this->codigoContaUsuario;
   }

   public function getNomeContaUsuario() {
       return $this->nomeContaUsuario;
   }

   public function getEmailContaUsuario() {
       return $this->emailContaUsuario;
   }

   public function setCodigoTrocaLivro($codigoTrocaLivro) {
       $this->codigoTrocaLivro = $codigoTrocaLivro;
   }

   public function setNomeLivro($nomeLivro) {
       $this->nomeLivro = $nomeLivro;
   }

   public function setCodigoContaUsuario($codigoContaUsuario) {
       $this->codigoContaUsuario = $codigoContaUsuario;
   }

   public function setNomeContaUsuario($nomeContaUsuario) {
       $this->nomeContaUsuario = $nomeContaUsuario;
   }

   public function setEmailContaUsuario($emailContaUsuario) {
       $this->emailContaUsuario = $emailContaUsuario;
   }


    
}
