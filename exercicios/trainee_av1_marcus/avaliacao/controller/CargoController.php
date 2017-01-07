<?php

include_once('controller/AbstractController.php');
include_once(SESSAO);
include_once(CONSTANTES);
include_once('model/Cargo.php');
define('PATH','http://localhost/exercicios/trainee_av1_marcus/avaliacao/cargo/');

class CargoController extends AbstractController {

	public function definirAcesso () {

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID){   
			header('location:'.LOCAL.'usuario/adminpage');				
		} else if(Sessao::getsessao('id_perfil') == Constantes::$iUSER_COMUN_ID) {
			header('location:'.LOCAL.'usuario/userpage');
		} 		
	}


	public function cadastrar () {

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {	
			require "view/viewsCadastro/cadastrarCargo.php";
		} else {
			require "view/viewsCadastro/cadastrarCargoUser.php";
		}
	}

	public function registrar () {

		$aCargo = array('cargo' => $_POST['cargo']);
		$bResultado = Cargo::salvar($aCargo) ;

		if($bResultado) {
			echo "<script>alert('Cadastro efetuado com sucesso');
				  window.location='".PATH."cadastrar'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar o cadastro');
				  window.location='".PATH."cadastrar'</script>";
		}
	}

	public function gerenciarCargo () {

		$aCargo = Cargo::listar();

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsListar/listarCargo.php";
		} else {
			require "view/viewsListar/listarCargoUser.php";
		}

	}

	public function deletar () {

		$aId_Cargo = array('id_cargo' => $_GET['id']);
		$bResultado = Cargo::remover($aId_Cargo);

		if($bResultado) {
			echo "<script>alert('Remoção efetuada com sucesso');
				  window.location='".PATH."gerenciarCargo'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar a remoção');
				  window.location='".PATH."gerenciarCargo'</script>";
		}
	}

	public function editar () {

		$aId_Cargo = array('id_cargo' => $_GET['id']);
		$aCargo = Cargo::buscaUnica($aId_Cargo);

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsEditar/editarCargo.php";
		} else {
			require "view/viewsEditar/editarCargoUser.php";
		}
	}


	public function atualizar () {

		$aCargo = array('id_cargo'=> $_POST['id_cargo'], 'nome' => $_POST['nome']);
		$bResultado = Cargo::update($aCargo);

		if($bResultado) {
			echo "<script>alert('Atulização efetuada com sucesso');
				  window.location='".PATH."gerenciarCargo'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar a atualização');
				  window.location='".PATH."gerenciarCargo'</script>";
		}
	}


		
}