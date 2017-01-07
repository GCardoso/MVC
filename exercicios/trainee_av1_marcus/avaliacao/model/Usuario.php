<?php 
include_once(SESSAO);
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Usuario {

	public static function listar() {

		$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		return $aConexao[0]->query('SELECT id_user,login,senha,id_perfil FROM av1_Usuarios');


	}

	public static function registrar ($aDados) {

        $rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql ="INSERT INTO av1_Usuarios (login,senha,id_perfil)VALUES (?,?,?)";
		$aAux = array();
		array_push($aAux,$aDados['login'],$aDados['password'],$aDados['tipo']); 	
		$rDb->execute($sSql,$aAux,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
      	return true;
    }

    public static function remover ($aId_user) {

    	$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "DELETE FROM av1_Usuarios where id_user =".$aId_user['id_user']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;
    }

    public static function buscaUnica($iId) {

    	$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "SELECT id_user,login,senha,id_perfil FROM av1_Usuarios WHERE id_user =".$iId."";
		return $aConexao[0]->query($sSql);
    }

    public static function update ($aUsuario) {

    	$rJson = new JSONConfig();
		$rJson->setJson('ambiente.json');
		$rDb = new MoobiDatabaseHandler($rJson->getJson());
		$aConexao = array();
		$aConexao[] = $rDb->getInstance();
		$aConexao[0] = $rDb->begin($aConexao[0]);
		$sSql = "UPDATE av1_Usuarios set senha ="."\"". $aUsuario['senha']."\"".
				",id_perfil =".$aUsuario['tipo']." WHERE id_user=".$aUsuario['id_user']."";
		$rDb->executeAux($sSql,$aConexao[0]);
		$rDb->commit($aConexao[0]);
        $rDb->close();
        return true;
		
    }
}