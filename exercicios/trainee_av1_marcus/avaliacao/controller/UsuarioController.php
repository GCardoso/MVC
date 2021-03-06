<?php

include_once('controller/AbstractController.php');
include_once('model/Usuario.php');

class UsuarioController extends AbstractController {


	public function adminPage () {

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/paginaInicial.php";
		} else {
			$this->userPage();
		} 
	}

	public function userPage () {

		require "view/paginaInicialuser.php";
	}

	public function cadastrar () {

		require "view/cadastrarUsuarios.php";
	}

	public function salvar () {

		$aUsuario = array("login" => $_POST['login'],
		                  "password" => $_POST['senha'],
		                  "tipo" => $_POST['tipo']);

		$bResultado = Usuario::registrar($aUsuario);
         
		if(!$bResultado){

			echo "<script>alert('Nao possivel cadastrar');
				  window.location='".LOCAL."usuario/cadastrar'</script>";

		} else {

			echo "<script>alert('Cadastro efetuado com sucesso');
				  window.location='".LOCAL."usuario/cadastrar'</script>";
		} 
	}

	public function gerenciarUsuarios () {

		$aUsuarios = Usuario::listar();

		if(Sessao::getsessao('id_perfil') != Constantes::$iADM_ID){
			require "view/listarusuarios.php";
		 } else {
		 	require "view/gerirUsuarios.php";
		 }
		
	}

	public function deletar () {

		$aIduser = array("id_user" => $_GET['id']);

		$bResultado = Usuario::remover($aIduser);

		if($bResultado) {
			echo "<script>alert('Remoção efetuado com sucesso');
				  window.location='".LOCAL."usuario/gerenciarUsuarios'</script>";
		}
	}

	public function editar () {

		$iId = $_GET['id'];
		$aUsuario = Usuario::buscaUnica($iId);
		require "view/editarUsuarios.php";
	}

	public function atualizar () {

		$bResultado = Usuario::update($_POST);
			
		if($bResultado) {
			echo "<script>alert('Atualizaçao efetuada com sucesso');
				 window.location='".LOCAL."usuario/gerenciarUsuarios'</script>";
		} 		
	}
}