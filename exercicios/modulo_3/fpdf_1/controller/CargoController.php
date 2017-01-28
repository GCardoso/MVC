<?php

include_once('controller/AbstractController.php');
include_once('model/Cargo.php');

class CargoController extends AbstractController {



	public function consultarajax () {
		
	    $aValor = Cargo::paginacao($this->post('pagina')); 	
	    if(!empty($aValor)){
		    include "view/viewsPaginacao/tabela_ajaxCargos.php";
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

		$aCargo = array('cargo' => $this->post('cargo'));
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

		$aId_Cargo = array('id_cargo' => $this->get('id'));
		$bResultado = Cargo::remover($aId_Cargo);

		if($bResultado) {
			echo json_encode(['status' => true ,"msg" => "Deletado com sucesso o cargo!","img" => "imagens/success.png"]);
		} else {
			echo json_encode(['status' => false ,"msg" => "Ocorreu um erro , nao possivel remover, cargo esta vinculado a filiados!","img" =>"imagens/failed.png"]);
		}
		// if($bResultado) {
		// 	echo "<script>alert('Remoção efetuada com sucesso');
		// 		  window.location='".LOCAL."cargo/gerenciarCargo'</script>";
		// } else {
		// 	echo "<script>alert('Nao possivel remoção devido existir filiados vinculados a este cargo');
		// 		  window.location='".LOCAL."cargo/gerenciarCargo'</script>";
		// }
	}

	public function editar () {

		$aId_Cargo = array('id_cargo' => $this->get('id'));
		$aCargo = Cargo::buscaUnica($aId_Cargo);

		include_once('view/viewsModal/modalCargo.php');

		// if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
		// 	require "view/viewsEditar/editarCargo.php";
		// } else {
		// 	require "view/viewsEditar/editarCargoUser.php";
		// }
	}


	public function atualizar () {

		$aCargo = array('id_cargo'=> $this->post('id_cargo'), 'nome' => $this->post('nome'));
		$bResultado = Cargo::update($aCargo);

		if($bResultado) {
			echo json_encode(['status' => true ,"msg" => "Atualizado o cargo!"]);
		} else {
			echo json_encode(['status' => true ,"msg" => "Ocorreu um erro , nao possivel atualizar!"]);
		}
	}


	public function salvarCargoModal() {

		$aCargo = array('cargo' => $this->post('nome'));
		$bResultado = Cargo::salvar($aCargo);
		$aCargos = Cargo::listar();
		$sHtml = self::createComboCargo($aCargos);
		echo $sHtml;
	}


	public function createComboCargo($aArray) {
		$sHtml = "";
		foreach ($aArray as $key) {
			$sHtml .= "<option value= ". $key['id_cargo']." > ".$key['nome']." </option>";
		}
		return $sHtml;
	}


	public function cadastroCargoModal() {

		include_once("view/viewsModal/modalCargo.php");
	}


		
}