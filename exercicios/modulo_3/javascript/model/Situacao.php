<?php

include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Situacao {

	public static function registrar ($aDados) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "INSERT INTO av1_situacao (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['situacao']);
		$rDatabase->execute($sSql,$aAux,$rConexao);
		$rDatabase->commit($rConexao);
		$rDatabase->close();
		return true;
	}

	public static function listar () {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_situacao,nome FROM av1_situacao";
		return $rConexao->query($sSql);
	}

	public static function remover ($aId_Situacao) {
		
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql2 = "SELECT  f.nome ,s.id_situacao from av1_filiados f  inner join av1_situacao s  on f.id_situacao = s.id_situacao   where  f.id_situacao =".$aId_Situacao['id_situacao']."";
		$rLinhasRetonadas  =  $rConexao->query($sSql2);
		$iContadorRows = $rLinhasRetonadas->rowCount();
		if($iContadorRows != 0 ){
			return false;
		}
		$sSql = "DELETE FROM av1_situacao where id_situacao =".$aId_Situacao['id_situacao']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;
	}

	public static function update ($aSituacao) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="UPDATE av1_situacao SET nome =" ."\"". $aSituacao['nome']."\""." WHERE id_situacao=".$aSituacao['id_situacao']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;

	}

	public static function buscaUnica ($aId_Situacao) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_situacao, nome FROM av1_situacao where id_situacao =".$aId_Situacao['id_situacao']."";
		return $rConexao->query($sSql);

	}

	public static function paginacao ($pagina = null) {

		$iquantidade_por_pagina = JsonConfig::getValue('quantidade_por_pagina');
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();	
		$sSql = "SELECT  * FROM av1_situacao";
		$aLinhasRetornadas = $rConexao->query($sSql);
		$iLimitePorPagina = $rDatabase->getQuantidadeDePaginas($aLinhasRetornadas,$iquantidade_por_pagina);
		Sessao::setsessao('limitPaginaSituacao',$iLimitePorPagina);
		Sessao::setsessao('numitensSituacao',$iquantidade_por_pagina);
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