<?php

include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Empresa {


	public static function salvar ($aDados) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="INSERT INTO av1_empresa (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['nomeEmpresa']);
		$rDatabase->execute($sSql,$aAux,$rConexao);
		$rDatabase->commit($rConexao);
		$rDatabase->close();
		return true;
	}



	public static function listar () {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_empresa , nome FROM av1_empresa";
		return $rConexao->query($sSql);

	}

	public static function remover ($aId_Empresa) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql2 = "SELECT  f.nome ,e.id_empresa from av1_filiados f  inner join av1_empresa e  on f.id_empresa = e.id_empresa   where  f.id_empresa =".$aId_Empresa['id_empresa']."";
		$rLinhasRetonadas  =  $rConexao->query($sSql2);
		$iContadorRows = $rLinhasRetonadas->rowCount();
		if($iContadorRows != 0 ){
			return false;
		}	
		$sSql = "DELETE FROM av1_empresa where id_empresa =".$aId_Empresa['id_empresa']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;

	}


	public static function buscaUnica ($aId_empresa) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_empresa,nome FROM av1_empresa where id_empresa =".$aId_empresa['id_empresa']."";
		return $rConexao->query($sSql);

	}


	public static function update ($aEmpresa) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="UPDATE av1_empresa SET nome =" ."\"". $aEmpresa['nome']."\""." WHERE id_empresa=".$aEmpresa['id_empresa']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;

	}

	public static function paginacao ($pagina = null) {

		$iquantidade_por_pagina = JsonConfig::getValue('quantidade_por_pagina');
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();	
		$sSql = "SELECT  * FROM av1_empresa";
		$aLinhasRetornadas = $rConexao->query($sSql);
		$iLimitePorPagina = $rDatabase->getQuantidadeDePaginas($aLinhasRetornadas,$iquantidade_por_pagina);
		Sessao::setsessao('limitPaginaEmpresas',$iLimitePorPagina);
		Sessao::setsessao('numitensEmpresas',$iquantidade_por_pagina);
		$aVazio = array();
		if (!empty($pagina)) {
			if($pagina > $iLimitePorPagina) {
				return null;
			}
			if($pagina == 1){
				$iItens = 0;
				$sSql .= " LIMIT ".$iItens.", ".$iquantidade_por_pagina."";
				return $rConexao->query($sSql);
			}
			if($pagina % 2 == 1) {
				$iItens = $pagina+2;
				$sSql .= " LIMIT ".$iItens.", ".$iquantidade_por_pagina."";
				return $rConexao->query($sSql);
			}
			$iItens = $pagina;
			$iItens *=2; 
			$sSql .= " LIMIT ".$iItens.", ".$iquantidade_por_pagina."";
			return $rConexao->query($sSql);
		}
	}	
}