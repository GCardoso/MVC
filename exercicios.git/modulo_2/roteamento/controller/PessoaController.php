
<?php


include_once('AbstractController.php');
include_once('model/Pessoa.php');

class PessoaController extends AbstractController {

      function __construct(){

      }


   public function cadastrar() {
   	      require "view/cadastrarPessoa.php";
   }


   public function salvar() {
        if(Pessoa::salvar($_POST) != null) {
            $variavel = Pessoa::salvar($_POST);
            echo $variavel['cpf'];
        }
   }
}