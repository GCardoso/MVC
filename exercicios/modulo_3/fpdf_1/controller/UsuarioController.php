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

		$aUsuario = array("login" => $this->post('login'),
		                  "password" => $this->post('senha'),
		                  "tipo" => $this->post('tipo'));

		$bResultado = Usuario::registrar($aUsuario);
         
         require_once("view/cadastrarUsuarios.php");
	}

	public function gerenciarUsuarios () {

		// $aUsuarios = Usuario::listar();

		if(Sessao::getsessao('id_perfil') != Constantes::$iADM_ID){
			require "view/listarusuarios.php";
		 } else {
		 	require "view/gerirUsuarios.php";
		 }
		
	}

	public function deletar () {

		$aIduser = array("id_user" => $this->get('id'));

		$bResultado = Usuario::remover($aIduser);

		if($bResultado) {
			echo "<script>alert('Remoção efetuado com sucesso');
				  window.location='".LOCAL."usuario/gerenciarUsuarios'</script>";
		}
	}

	public function editar () {

		$iId = $this->get('id');
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

	public function consultarajax() {

		$aUsuarios = Usuario::paginacao($this->post('pagina'));
		if(!empty($aUsuarios)){
		    include "view/viewsPaginacao/tabela_ajaxUsuarios.php";
	    } else {
	    	echo "<td>Nao tem mais itens</td>";
	    }
	}
}