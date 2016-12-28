<?php


class Pessoa { 

     private $snome;
     private $dDatanascimento;
     private $iIdade;
     private $icpf;

    public function __construct() {
          $this->snome = $snome;
          $this->tdatanascimento = $dDatanascimento;
          $this->iIdade = $iIdade;
          $this->icpf = $icpf;
     }

    public function getnome() {
    	return $this->snome;
    }

    public function getdata() {
    	return $this->dDatanascimento;
    }

    public  function getidade() {
 		return $this->iIdade;
    }

    public  function getcpf() {
    	return $this->icpf;
    }

    public function setcpf($icpf) {
    	$this->icpf = $icpf;
    }

    public function setnome($snome) {
    	$this->snome = $snome;
    }

    public function setdata($dData) {
    	$this->dDatanascimento = $dData;
    }

    public function setidade($iIdade) {
    	$this->iIdade = $iIdade;
    }


    public static function salvar($dados){
        $array = array('cpf'=> 10);
        return $array;
    }



}