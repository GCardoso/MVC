<?php

include_once('controller/AbstractController.php');
include_once(SESSAO);
include_once(CONSTANTES);
include_once('model/Situacao.php');
define('ROTA','http://localhost/exercicios/trainee_av1_marcus/avaliacao/situacao/');
class SituacaoController extends AbstractController {
	

	public function definirAcesso () {
 		
		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID){   
			header('location:'.LOCAL.'usuario/adminpage');				
		} else if(Sessao::getsessao('id_perfil') == Constantes::$iUSER_COMUN_ID) {
			header('location:'.LOCAL.'usuario/userpage');
			} 
		
		}

	

	public function cadastrar () {
		
		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			
			require "view/viewsCadastro/cadastrarSituacao.php";
		} else {
			require "view/viewsCadastro/cadastrarSituacaoUser.php";
		}
	}


	public function registrar () {

		$aSituacao = array('situacao' => $_POST['situacao']);
		$bResultado = Situacao::registrar($aSituacao);

		if($bResultado) {
			echo "<script>alert('Cadastro efetuado com sucesso');
				  window.location='".ROTA."cadastrar'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar o cadastro');
				  window.location='".ROTA."cadastrar'</script>";
		}
	}


	public function gerenciarSituacao () {

		$aSituacao = Situacao::listar();

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsListar/listarSituacao.php";
		} else {
			require "view/viewsListar/listarSituacaoUser.php";
		}

	}

	public function deletar () {

		$aId_Situacao = array('id_situacao' => $_GET['id']);
		$bResultado = Situacao::remover($aId_Situacao);

		if($bResultado) {
			echo "<script>alert('Remoção efetuado com sucesso');
				  window.location='".ROTA."gerenciarSituacao'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar a remoção');
				  window.location='".ROTA."gerenciarSituacao'</script>";
		}
	}

	public function editar () {

		$aId_Situacao = array('id_situacao' => $_GET['id']);
		$aSituacao = Situacao::buscaUnica($aId_Situacao);

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsEditar/editarSituacao.php";
		} else {
			require "view/viewsEditar/editarSituacaoUser.php";
		}
	}

	public function atualizar () {

		$aSituacao = array('id_situacao'=> $_POST['id_situacao'], 'nome' => $_POST['nome']);
		$bResultado = Situacao::update($aSituacao);

		if($bResultado) {
			echo "<script>alert('Atulização efetuada com sucesso');
				  window.location='".ROTA."gerenciarSituacao'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar a atualização');
				  window.location='".ROTA."gerenciarSituacao'</script>";
		}
	}
}