<?php


class Empresa {
   
     private $snome;
     private $icnpj;
     private $memail;
     private $itelefone;
     private $srazaosocial;
    
  public function __construct() {
         
         $this->snome = $nome;
         $this->icnpj = $icnpj;
         $this->memail = $memail;
         $this->itelefone = $itelefone;
         $this->srazaosocial = $srazaosocial;
    }
   
    public function getnome() {
    	return $this->snome;
    }

    public function getcnpj() {
    	return $this->$icnpj;
    }

    public function getemail() {
    	return $this->memail;
    }
    
    public function gettelefone() {
    	return $this->itelefone;
    }

    public function getrazaosocial() {
    	return $this->srazaosocial;
    }

    public function setnome($nome){
    	$this->snome = $nome;
    }

    public function setcnpj($cnpj) {
    	$this->icnpj = $cnpj;
    }

    public function setemail($email) {
        $this->memail = $email;
    }

    public function settelefone($telefone) {
        $this->$itelefone = $telefone;
    }

    public function setrazaosocial($razaosocial) {
    	$this->srazaosocial = $razaosocial;
    }

}