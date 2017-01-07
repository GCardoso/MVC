<?php

include_once(SESSAO);
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Cargo {


	public static function salvar ($aDados) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="INSERT INTO av1_cargos (nome) VALUES (?)";
		$aAux = array();
		array_push($aAux,$aDados['cargo']);
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
		$sSql = "SELECT id_cargo,nome FROM av1_cargos";
		return $aConexao[0]->query($sSql);
	}


	public static function remover ($aId_Cargo) {
		
		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "DELETE FROM av1_cargos where id_cargo =".$aId_Cargo['id_cargo']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;
	}

	public static function update ($aCargo) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="UPDATE av1_cargos SET nome =" ."\"". $aCargo['nome']."\""." WHERE id_cargo=".$aCargo['id_cargo']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;

	}

	public static function buscaUnica ($aId_Cargo) {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "SELECT id_cargo, nome FROM av1_cargos where id_cargo =".$aId_Cargo['id_cargo']."";
		return $aConexao[0]->query($sSql);

	}
}
