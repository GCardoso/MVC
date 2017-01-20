<?php

include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Cargo {


	public static function salvar ($aDados) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="INSERT INTO av1_cargos (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['cargo']);
		$rDatabase->execute($sSql,$aAux,$rConexao);
		$rDatabase->commit($rConexao);
		$rDatabase->close();
		return true;
	}

	public static function listar () {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_cargo,nome FROM av1_cargos";
		return $rConexao->query($sSql);
	}


	public static function remover ($aId_Cargo) {
		
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql2 = "SELECT  f.nome ,c.id_cargo from av1_filiados f  inner join av1_cargos c  on f.id_cargo = c.id_cargo   where  f.id_cargo =".$aId_Cargo['id_cargo']."";
		$rLinhasRetonadas  =  $rConexao->query($sSql2);
		$iContadorRows = $rLinhasRetonadas->rowCount();
		if($iContadorRows != 0 ){
			return false;
		}
		$sSql = "DELETE FROM av1_cargos where id_cargo =".$aId_Cargo['id_cargo']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;
	}

	public static function update ($aCargo) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="UPDATE av1_cargos SET nome =" ."\"". $aCargo['nome']."\""." WHERE id_cargo=".$aCargo['id_cargo']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;

	}

	public static function buscaUnica ($aId_Cargo) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();	
		$sSql = "SELECT id_cargo, nome FROM av1_cargos where id_cargo =".$aId_Cargo['id_cargo']."";
		$aResultado = $rConexao->query($sSql);
		return $aResultado->fetch();

	}


	public static function paginacao ($pagina = null) {

		$iquantidade_por_pagina = JsonConfig::getValue('quantidade_por_pagina');
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();	
		$sSql = "SELECT  * FROM av1_cargos";
		$aLinhasRetornadas = $rConexao->query($sSql);
		$iLimitePorPagina = $rDatabase->getQuantidadeDePaginas($aLinhasRetornadas,$iquantidade_por_pagina);
		Sessao::setsessao('limitPaginaCargos',$iLimitePorPagina);
		Sessao::setsessao('numitensCargos',$iquantidade_por_pagina);
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
				$iItens = $pagina+3;
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
