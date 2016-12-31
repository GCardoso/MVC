<?php

include('AbstractController.php');
include('model/Empresa.php');

class EmpresaController extends AbstractController {

    		

     function __construct() {

     }		

     public function cadastrar() {
     	require 'view/cadastrarEmpresa.php';
     }
     

     public function paginaInicial() {
     	require 'view/paginaInicial.php';
     }

     public function editar() {

        $aEmpresa = Empresa::editar($_GET['id']);
     	require 'view/editarEmpresa.php';
     }

     public function salvar() {
     	 
     	$aEmpresa = Empresa::salvar();

        if(!empty($aEmpresa)) {
        	echo "<script>alert('Cadastrado'); </script>";
        	require "view/cadastrarEmpresa.php";
        } else {
           
           echo "<script>alert('Nao possivel cadastrar') </script>";
           require "view/cadastrarEmpresa.php";
        }
    		
      }
        
     public function listar() {
         
         $aEmpresa = Empresa::listar();
     	 require 'view/listarEmpresa.php';
     }
     

     public function atualizar() {

         $aEmpresa = Empresa::salvar();

         if(!empty($aEmpresa)) {
            echo "<script>alert('Atualizado com sucesso'); </script>";
            require "view/cadastrarEmpresa.php";
        } else {
        
           echo "<script>alert('Nao possivel atualizar') </script>";
           require "view/cadastrarEmpresa.php";
        }


     }

     

     public function remover() {

          $aResultado = Empresa::remover($_GET['id']);
   
          if($aResultado== true) {
            header('location:../listar');
          }  
     }    
}