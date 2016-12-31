<?php

include_once('../../../exercicios/modulo_1/sessoes/sessao.php');
sessao::start();

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

    public function getidade() {
 		return $this->iIdade;
    }

    public function getcpf() {
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

    public static function salvar() {
       
       $aPessoa = array('nome' => $_POST['nome'],
                        'datanascimento' => $_POST['data'],
                        'idade' => $_POST['idade'],
                        'cpf' => $_POST['cpf']);
       
       sessao::setsessao('cpf-'.$_POST['cpf'],$aPessoa);
  
       return $aPessoa;
    }
    
    public static function listar() {
      
      return $_SESSION;

    }


      public static function remover($key) {

        $resultado = sessao::limpar('cpf-'.$key);
         
        return true;
         
      }

      public static function editar ($key) { 

        $aPessoa = sessao::getsessao('cpf-'.$key);

        return $aPessoa;

      }
  }