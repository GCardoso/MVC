
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
      $aPessoa = Pessoa::salvar();

       if(!empty($aPessoa)) {
          echo "<script>alert('Cadastrado com sucesso'); </script>";
          require "view/cadastrarPessoa.php";
        } else {
           echo "<script>alert('Nao possivel cadastrar') </script>";
           require "view/cadastrarPessoa.php";
        }
        
    }

    public function paginaInicial() {
     	require 'view/paginaInicial.php';
     }
   
    public function listar() {
       
       $aPessoa = Pessoa::listar();
       require "view/listarPessoa.php";
       
    }

    public function remover() {
         
        $bReposta = Pessoa::remover($_GET['id']);    
        
        if($bReposta == true) {
        echo "<script>alert('Removido com sucesso'); </script>";
        header('location:../listar');
        } 
        else {
         header('location:../listar');
      } 

    }

    public function editar() {

       $aPessoa = Pessoa::editar($_GET['id']);
       
       require "view/editarPessoa.php";

    }

    public  function atualizar() {

       $aPessoa = Pessoa::salvar();

       if(!empty($aPessoa)) {
          echo "<script>alert('Atualizado com sucesso'); </script>";
          require "view/cadastrarPessoa.php";
        } else {
           echo "<script>alert('Nao possivel cadastrar') </script>";
           require "view/cadastrarPessoa.php";
        }
        
    }

}