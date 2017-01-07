<?php

include_once('controller/AbstractController.php');
include_once(SESSAO);
include_once(CONSTANTES);
include_once('model/Empresa.php');

class EmpresaController extends AbstractController {


	public function cadastro () {
		
		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {

			require "view/viewsCadastro/cadastrarEmpresa.php";
		} else {
			require "view/viewsCadastro/cadastrarEmpresaUser.php";
		}
	}

	public function definirAcesso () {

			if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID){   
				header('location:'.LOCAL.'usuario/adminpage');				
			} else if(Sessao::getsessao('id_perfil') == Constantes::$iUSER_COMUN_ID) {
				header('location:'.LOCAL.'usuario/userpage');
			} 
	}

	public function registrar () {

		$aEmpresa = array('nomeEmpresa' => $_POST['empresa']);
		$bResultado = Empresa::salvar($aEmpresa);

		if(!$bResultado){
			echo "<script>alert('Nao possivel cadastrar');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/cadastro'</script>";
		} else {

			echo "<script>alert('Cadastro efetuado com sucesso');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/cadastro'</script>";
		}
	}

	public function gerirEmpresa () {

		$aEmpresas = Empresa::listar();
		if(Sessao::getsessao('id_perfil')== Constantes::$iADM_ID) {
			
			require "view/viewsListar/listarEmpresa.php";
		} else {
			require "view/viewsListar/listarEmpresaUser.php";
		}
	}	

	public function deletar () {

		$aId_Empresa = array('id_empresa' => $_GET['id']);
	    $bResultado = Empresa::remover($aId_Empresa);

	    if(!$bResultado){
			echo "<script>alert('Nao possivel Remover');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/gerirEmpresa'</script>";
		} else {
			echo "<script>alert('Remoção efetuada com sucesso');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/gerirEmpresa'</script>";
		}
	}


	public function editar () {

		$aId_empresa = array('id_empresa' =>$_GET['id']);
		$aEmpresa = Empresa::buscaUnica($aId_empresa);
		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {

			require "view/viewsEditar/editarEmpresa.php";
		} else {
			require "view/viewsEditar/editarEmpresaUser.php";
		}
	}


	public function atualizar () {

		$aEmpresa = array('nome'=> $_POST['empresa'],'id_empresa' => $_POST['id_empresa']);
		$bResultado = Empresa::update($aEmpresa);
		
		if(!$bResultado){
			echo "<script>alert('Nao possivel Atualizar');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/gerirEmpresa'</script>";
		} else {
			echo "<script>alert('Atualizaçao efetuada com sucesso');
			window.location='http://localhost/exercicios/trainee_av1_marcus/avaliacao/empresa/gerirEmpresa'</script>";
		}
	}
}