<?php

include_once('controller/AbstractController.php');
include_once('model/Cargo.php');

class CargoController extends AbstractController {



	public function consultarajax () {
		
	    $aValor = Cargo::paginacao($_POST['pagina']);
	    if(!empty($aValor)){
		    include "view/viewsPaginacao/tabela_ajaxCargos.php";
	    } else {
	    	echo "<td>Nao tem mais itens</td>";

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
				  window.location='".LOCAL."cargo/cadastrar'</script>";
		} else {
			echo "<script>alert('Nao possivel efetuar o cadastro');
				  window.location='".LOCAL."cargo/cadastrar'</script>";
		}
	}

	public function gerenciarCargo () {

		// $aCargo = Cargo::listar();

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
				  window.location='".LOCAL."cargo/gerenciarCargo'</script>";
		} else {
			echo "<script>alert('Nao possivel remoção devido existir filiados vinculados a este cargo');
				  window.location='".LOCAL."cargo/gerenciarCargo'</script>";
		}
	}

	public function editar () {

		$aId_Cargo = array('id_cargo' => $_GET['id']);
		$aCargo = Cargo::buscaUnica($aId_Cargo);

		include_once('view/viewsModal/modalCargo.php');

		// if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
		// 	require "view/viewsEditar/editarCargo.php";
		// } else {
		// 	require "view/viewsEditar/editarCargoUser.php";
		// }
	}


	public function atualizar () {

		$aCargo = array('id_cargo'=> $_POST['id_cargo'], 'nome' => $_POST['nome']);
		$bResultado = Cargo::update($aCargo);

		if($bResultado) {
			echo json_encode(['status' => true ,"msg" => "Atualizado o cargo!"]);
		} else {
			echo json_encode(['status' => true ,"msg" => "Ocorreu um erro , nao possivel atualizar!"]);
		}
	}


		
}