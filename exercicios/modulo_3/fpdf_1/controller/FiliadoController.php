<?php
include_once('controller/AbstractController.php');
include_once('model/Filiado.php');
include_once('pdf/relatorio/FiliadoFPDF.php');

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
		$aTelefones = array("tel_fixo" => $this->post('fixo'), "tel_movel" => $this->post('Movel'));
		$aFiliado = array("nome" => $this->post('nomeFiliado'),
						   "cpf" => $scpf,
						   "rg" => $this->post('rg'),
						   "data_de_nascimento" => $this->post('data_de_nascimento'),
						   "idade" => $this->post('idade'),
						   "empresa"=> $this->post('empresa'),
						   "situacao" => $this->post('situacao'),
						   "cargo" => $this->post('cargo'));
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
			'nomeDependente' => $this->post('nomeDependente'),
			'data_de_nascimento' => $this->post('data_de_nascimento'),
			'Parentesco' => $this->post('Parentesco'),
			'chave' =>md5(time()));

      	Sessao::setsessao($aDependente['chave'],$aDependente);

      	if(Sessao::getsessao('logado') == Constantes::$iADM_ID) {
      		require_once('view/viewsCadastro/cadastrarFiliado.php');
      	} else {
      		require_once('view/viewsCadastro/cadastrarFiliadoUser.php');
      	}
	}

	public function listaDependentes () {

		  return Filiado::listarDependentes();
	
  	}

	public function removerDependente() {

		Sessao::limpar($this->get('id'));
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

		$iId = $this->get('id');
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

		$aId_filiado = array('id_filiado' => $this->get('id'));
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
		$aFiliado = array('nomeFiliado' => $this->post('nomeFiliado'),
						 'cpf' => $scpf,
						 'rg' => $this->post('rg'),
						 'data_de_nascimento' => $this->post('data_de_nascimento'),
						 'idade' => $this->post('idade'),
						 'empresa' => $this->post('empresa'),
						 'situacao' => $this->post('situacao'),
						 'cargo' => $this->post('cargo'),
						 'id_filiado' => $this->post('id_filiado'));

		$aTelefones = array("tel_movel" => $this->post('tel_movel'), "tel_fixo" => $this->post('tel_fixo'));
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
			$aFiliados = Filiado::paginacao($this->post('pagina'));
			if(!empty($aFiliados)){
			    include "view/viewsPaginacao/tabela_ajaxFiliados.php";
		    }
	}

	public function atualizarDependente() {

		$aDependente = Sessao::getsessao($this->get('id'));
		include_once('view/viewsModal/modalDependente.php');
	}

	public function cadastrarDependente() {

		include_once('view/viewsModal/modalDependente.php');
	}

	public function updateDependentes() {

		$aDependenteUpdate = array(
			'nomeDependente' => $this->post('nomeDependente'),
			'data_de_nascimento' => $this->post('data_de_nascimento'),
			'Parentesco' => $this->post('Parentesco'),
			'chave' =>$this->post('chave'));

      	Sessao::setsessao($aDependenteUpdate['chave'],$aDependenteUpdate);
	    
	    if (true) {
	    	echo json_encode(['status' => true, 'msg' => 'Atualizado com sucesso!']);
	    } else {
	    	echo json_encode(['status' => false, 'msg' => 'Erro ao salvar!']);
	    }
	}

	public function CreatePdfTodosFiliados() {

		$aListaFiliados = Filiado::listarTodosFiliados();
		$oFiliadoPDF = new FiliadoFDPF();
		$oFiliadoPDF->abrirPDF($aListaFiliados,"Lista de Filiados");
	}
}