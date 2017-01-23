<?php
include_once('controller/AbstractController.php');
include_once('model/Filiado.php');

class FiliadoController extends AbstractController {
	

	public function cadastrar () {
		
		$aEmpresas = Filiado::listarEmpresa();
		$aSituacao = Filiado::listarSituacao();
		$aCargos = Filiado::listarCargos();	
 		$aDependentes = self::listaDependentes();

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID){  
			require "view/viewsCadastro/cadastrarFiliado.php"; 
		} else if(Sessao::getsessao('id_perfil') == Constantes::$iUSER_COMUN_ID) {
			require "view/viewsCadastro/cadastrarFiliadoUser.php";
		}
	}

	public function registrar () {

		$scpf = self::tratarCPF($_POST);
		$aTelefones = array("tel_fixo" => $_POST['fixo'], "tel_movel" => $_POST['Movel']);
		$aFiliado = array("nome" => $_POST['nomeFiliado'],
						   "cpf" => $scpf,
						   "rg" => $_POST['rg'],
						   "data_de_nascimento" => $_POST['data_de_nascimento'],
						   "idade" => $_POST['idade'],
						   "empresa"=> $_POST['empresa'],
						   "situacao" => $_POST['situacao'],
						   "cargo" => $_POST['cargo']);
		 $bResultado = Filiado::salvar($aFiliado,$aTelefones);
		 if($bResultado) {
			echo "<script>alert('Cadastro efetuado com sucesso');
				  window.location='".LOCAL."filiado/cadastrar'</script>";
		} else {
			echo "<script>alert('Já existe este cpf no banco de dados');
				  window.location='".LOCAL."filiado/cadastrar'</script>";
		}
	}

	public function tratarCPF ($svalor) {

		$scpf = $svalor['cpf'];
		$scpf = str_replace(".","",$scpf);
		$scpf = str_replace("-","",$scpf);
		return $scpf;
	}


	public function salvardependentes () {

		
		$aDependente = array(
			'nomeDependente' => $_POST['nomeDependente'],
			'data_de_nascimento' => $_POST['data_de_nascimento'],
			'Parentesco' => $_POST['Parentesco'],
			'chave' =>md5(time()));

      	Sessao::setsessao($aDependente['chave'],$aDependente);
	    
	    /*if (true) {
	    	echo json_encode(['status' => true, 'msg' => 'Salvo com sucesso!']);
	    } else {
	    	echo json_encode(['status' => false, 'msg' => 'Erro ao salvar!']);
	    } */
	}

	public function listaDependentes () {

		  return Filiado::listarDependentes();
	
  	}

	public function removerDependente() {

		Sessao::limpar($_GET['id']);
		 echo "<script>alert('Removido  dependente com sucesso');
				   window.location='".LOCAL."filiado/cadastrar'</script>";
	}

	public function gerenciarFiliados () {

			// $aFiliados = Filiado::listarFiliados();

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsListar/listarFiliados.php";
		} else {
			require "view/viewsListar/listarFiliadosUser.php";
		}
	}

	public function deletar () {

		$iId = $_GET['id'];
		$bResultado = Filiado::removerFiliado($iId);

		if($bResultado) {
			echo "<script>alert('Removido o filiado com sucesso');
				   window.location='".LOCAL."filiado/gerenciarFiliados'</script>";
		} else {
			echo "<script>alert('Nao possivel remover o filiado');
				   window.location='".LOCAL."filiado/gerenciarFiliados'</script>";
		}
	}

	public function editar () {

		$aId_filiado = array('id_filiado' => $_GET['id']);
		$aFiliado = Filiado::buscaUnica($aId_filiado);
		$aEmpresas = Filiado::listarEmpresa();
		$aSituacao = Filiado::listarSituacao();
		$aCargos = Filiado::listarCargos();
		$aTelefones = Filiado::listarTelefones($aId_filiado);

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) {
			require "view/viewsEditar/editarFiliado.php";
		} else {
			require "view/viewsEditar/editarFiliadoUser.php";
		}
	}

	public function atualizar () {

		$scpf = self::tratarCPF($_POST);
		$aFiliado = array('nomeFiliado' => $_POST['nomeFiliado'],
						 'cpf' => $scpf,
						 'rg' => $_POST['rg'],
						 'data_de_nascimento' => $_POST['data_de_nascimento'],
						 'idade' => $_POST['idade'],
						 'empresa' => $_POST['empresa'],
						 'situacao' => $_POST['situacao'],
						 'cargo' => $_POST['cargo'],
						 'id_filiado' => $_POST['id_filiado']);

		$aTelefones = array("tel_movel" => $_POST['tel_movel'], "tel_fixo" => $_POST['tel_fixo']);
		$bResultado = Filiado::update($aFiliado,$aTelefones);

		if($bResultado) {
			echo "<script>alert('Atualizado o filiado com sucesso');
				   window.location='".LOCAL."filiado/gerenciarFiliados'</script>";
		} else {
			echo "<script>alert('Nao possivel atualizar o filiado');
				   window.location='".LOCAL."filiado/gerenciarFiliados'</script>";
		}
		
	}

	public function consultarajax() {
		if(isset($_POST['pagina'])){
			$aFiliados = Filiado::paginacao($_POST['pagina']);
			if(!empty($aFiliados)){
			    include "view/viewsPaginacao/tabela_ajaxFiliados.php";
		    }
		}
	}

	public function atualizarDependente() {

		$aDependente = Sessao::getsessao($_GET['id']);
		include_once('view/viewsModal/modalDependente.php');
	}

	public function cadastrarDependente() {

		include_once('view/viewsModal/modalDependente.php');
	}

	public function updateDependentes() {

		$aDependenteUpdate = array(
			'nomeDependente' => $_POST['nomeDependente'],
			'data_de_nascimento' => $_POST['data_de_nascimento'],
			'Parentesco' => $_POST['Parentesco'],
			'chave' =>$_POST['chave']);

      	Sessao::setsessao($aDependenteUpdate['chave'],$aDependenteUpdate);
	    
	    if (true) {
	    	echo json_encode(['status' => true, 'msg' => 'Atualizado com sucesso!']);
	    } else {
	    	echo json_encode(['status' => false, 'msg' => 'Erro ao salvar!']);
	    }
	}
}