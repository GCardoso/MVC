<?php

include_once(SESSAO);
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Situacao {

	public static function registrar ($aDados) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "INSERT INTO av1_situacao (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['situacao']);
		$rDb->execute($sSql,$aAux,$aConexao[0]);
		$rDb->commit($aConexao[0]);
		$rDb->close();
		return true;
	}

	public static function listar () {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "SELECT id_situacao,nome FROM av1_situacao";
		return $aConexao[0]->query($sSql);
	}

	public static function remover ($aId_Situacao) {
		
		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "DELETE FROM av1_situacao where id_situacao =".$aId_Situacao['id_situacao']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;
	}

	public static function update ($aSituacao) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="UPDATE av1_situacao SET nome =" ."\"". $aSituacao['nome']."\""." WHERE id_situacao=".$aSituacao['id_situacao']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;

	}

	public static function buscaUnica ($aId_Situacao) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "SELECT id_situacao, nome FROM av1_situacao where id_situacao =".$aId_Situacao['id_situacao']."";
		return $aConexao[0]->query($sSql);

	}
}