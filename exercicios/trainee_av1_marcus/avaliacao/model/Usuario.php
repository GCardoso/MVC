<?php 
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Usuario {

	public static function listar() {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		return $rConexao->query('SELECT id_user,login,senha,id_perfil FROM av1_Usuarios');


	}

	public static function registrar ($aDados) {

        $rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="INSERT INTO av1_Usuarios (login,senha,id_perfil)VALUES (?,?,?)";
		$aAux = array();
		array_push($aAux,$aDados['login'],md5($aDados['password']),$aDados['tipo']); 	
		$rDatabase->execute($sSql,$aAux,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
      	return true;
    }

    public static function remover ($aId_user) {

    	$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "DELETE FROM av1_Usuarios where id_user =".$aId_user['id_user']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;
    }

    public static function buscaUnica($iId) {

    	$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_user,login,senha,id_perfil FROM av1_Usuarios WHERE id_user =".$iId."";
		return $rConexao->query($sSql);
    }

    public static function update ($aUsuario) {

    	$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "UPDATE av1_Usuarios set senha ="."\"". md5($aUsuario['senha'])."\"".
				",id_perfil =".$aUsuario['tipo']." WHERE id_user=".$aUsuario['id_user']."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;
		
    }

    public static function logarUsuario($aUsuario) {
	
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = 'SELECT id_user,login,senha,id_perfil FROM av1_Usuarios 
							 where login='."\"". $aUsuario['login']."\"".' and senha ='."\"".md5($aUsuario['senha'])."\"";				 
		return $rConexao->query($sSql);


	}

}