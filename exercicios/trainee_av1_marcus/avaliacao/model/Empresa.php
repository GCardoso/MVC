<?php

include_once(SESSAO);
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Empresa {


	public static function salvar ($aDados) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="INSERT INTO av1_empresa (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['nomeEmpresa']);
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
		$sSql = "SELECT id_empresa , nome FROM av1_empresa";
		return $aConexao[0]->query($sSql);

	}

	public static function remover ($aId_Empresa) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "DELETE FROM av1_empresa where id_empresa =".$aId_Empresa['id_empresa']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;

	}


	public static function buscaUnica ($aId_empresa) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "SELECT id_empresa,nome FROM av1_empresa where id_empresa =".$aId_empresa['id_empresa']."";
		return $aConexao[0]->query($sSql);

	}


	public static function update ($aEmpresa) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="UPDATE av1_empresa SET nome =" ."\"". $aEmpresa['nome']."\""." WHERE id_empresa=".$aEmpresa['id_empresa']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;

	}

}