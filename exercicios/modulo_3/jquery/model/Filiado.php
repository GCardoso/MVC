<?php 
include_once('classes/MoobiDatabaseHandler.php');
include_once('classes/JsonConfig.php');

class Filiado {
	
	public static function listarEmpresa () {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_empresa,nome FROM av1_empresa";
		return $rConexao->query($sSql);
	}

	public static function listarCargos () {


		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_cargo,nome FROM av1_cargos";
		return $rConexao->query($sSql);
	}

	public static function listarSituacao () {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT id_situacao,nome FROM av1_situacao";
		return $rConexao->query($sSql);
	}


	public static function listarTelefones ($aIdFiliado) {

		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "SELECT telefone,telefone_fixo FROM av1_telefones where id_dono = ".$aIdFiliado['id_filiado'];
		return $rConexao->query($sSql);
	}
	
	public static function salvar ($aFiliado,$aTelefones) {
		
		$aTelefonesFormat = self::TratarNumeros($aTelefones);
		$aDependentes = self::listarDependentes();
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "SELECT id_filiado,nome,cpf FROM av1_filiados where cpf LIKE '".$aFiliado['cpf']."'";
		$aTeste = $rConexao->query($sSql);
		foreach ($aTeste as $key) {
			 if($key['cpf'] == $aFiliado['cpf']) {
			 	return false;
			 }
		}
		$sSql2 = "INSERT INTO
  			  av1_filiados(
   				 nome,
    			 cpf,
    			 rg,
                 data_de_nascimento,
                 idade,
                 id_empresa,
                 id_situacao,
                 id_cargo
                )
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

                if(empty($aFiliado['data_de_nascimento'])) {
                	$aFiliado['data_de_nascimento'] = null;
                }
                 if(empty($aFiliado['idade'])) {
                	$aFiliado['idade'] = null;
                }
                 if(empty($aFiliado['cpf'])) {
                	$aFiliado['cpf'] = null;
                }
                if(empty($aFiliado['empresa'])) {
                	$aFiliado['empresa'] = null;
                } 
                if(empty($aFiliado['situacao'])) {
                	$aFiliado['situacao'] = null;
                }
                if(empty($aFiliado['cargo'])) {
                	$aFiliado['cargo'] = null;
                }
                if(empty($aFiliado['rg'])) {
                	$aFiliado['rg'] = null;
                }
        $aAux = array();
        array_push($aAux,$aFiliado['nome'],$aFiliado['cpf'],$aFiliado['rg'], $aFiliado['data_de_nascimento'],
							$aFiliado['idade'],$aFiliado['empresa'],$aFiliado['situacao'],$aFiliado['cargo']);       
		$rDatabase->execute($sSql2,$aAux,$rConexao);
		$sSql3 = "SELECT id_filiado,cpf FROM av1_filiados where cpf LIKE '".$aFiliado['cpf']."'";
		$aIdFiliado = $rConexao->query($sSql3);
		foreach ($aIdFiliado as $key) {
			 if($key['cpf'] == $aFiliado['cpf']) {
			 	$id = $key['id_filiado'];
			 }
		}

		$sSql4 = "INSERT
					INTO
  			 av1_dependentes (
    			 id_filiado ,
    			 nome ,
    			 data_de_nascimento,
    			 grau_parentesco 
 							 )
						VALUES(?,?,?,?)";
		foreach ($aDependentes as $key) {

				if(isset($key['nomeDependente'])) {
				$aAuxiliar = array();
				array_push($aAuxiliar,$id,$key['nomeDependente'],$key['data_de_nascimento'], $key['Parentesco']);
				$rDatabase->execute($sSql4,$aAuxiliar,$rConexao);
				Sessao::limpar($key['chave']);
				}
		}

		$sSql5 = "INSERT INTO av1_telefones (id_dono,telefone,telefone_fixo) VALUES (?,?,?)";
		$aAuxiliarTel = array();
		array_push($aAuxiliarTel,$id,$aTelefonesFormat[0],$aTelefonesFormat[1]);
		$rDatabase->execute($sSql5,$aAuxiliarTel,$rConexao);
		$rDatabase->commit($rConexao);
		$rDatabase->close();
		return true;
	}

	public static function listarDependentes () {

		 return Sessao::buscar();
	}


	public static function listarFiliados () {

		$aDependentes = self::listarDependentes();
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT f.id_filiado id ,f.nome Filiado,COUNT(d.id_dependente) Qtd_Dependentes ,
				 f.data_de_nascimento data  , f.idade idade
		         FROM av1_filiados f INNER JOIN
  		         av1_dependentes d ON f.id_filiado = d.id_filiado
		         GROUP BY
  		         f.id_filiado,f.nome";
  		$aConsulta = $rConexao->query($sSql);
  		return $aConsulta;         
	}


	public static function removerFiliado ($id) {

		$aDependentes = self::listarDependentes();
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql = "DELETE FROM av1_filiados WHERE id_filiado =".$id."";
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->commit($rConexao);
		$rDatabase->close();
		return true;
	}

	public static function buscaUnica ($aId_filiado) {

		
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$sSql = "SELECT * FROM av1_filiados where id_filiado =".$aId_filiado['id_filiado']."";
		return $rConexao->query($sSql);

	}

	public static function update ($aFiliado,$aTelefones) {

		$dTempoDaAtualizacao =  date("Y-m-d H:i:s");
		$aTelefonesFormat = self::TratarNumeros($aTelefones);
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();
		$rConexao = $rDatabase->begin($rConexao);
		$sSql ="UPDATE av1_filiados SET nome =" ."\"". $aFiliado['nomeFiliado']."\"".",
                cpf =" ."\"".$aFiliado['cpf']."\"".",
                rg =" ."\"".$aFiliado['rg']."\"".",
                data_de_nascimento ="."\"".$aFiliado['data_de_nascimento']."\"".",
                idade =".$aFiliado['idade'].",
                id_empresa =".$aFiliado['empresa'].",
                id_situacao =".$aFiliado['situacao'].",
                id_cargo = ".$aFiliado['cargo'].",
                data_ultima_atualizacao ="."\"".$dTempoDaAtualizacao."\""."
				WHERE id_filiado=".$aFiliado['id_filiado']."";

		$sSql2 = "UPDATE av1_telefones set telefone ="."\"".$aTelefonesFormat[0]."\"".",
		telefone_fixo ="."\"".$aTelefonesFormat[1]."\""."WHERE id_dono =".$aFiliado['id_filiado']."";	
		$rDatabase->executeAux($sSql,$rConexao);
		$rDatabase->executeAux($sSql2,$rConexao);
		$rDatabase->commit($rConexao);
        $rDatabase->close();
        return true;

	}

	public static function TratarNumeros($aTelefones) {

		$sFixo = $aTelefones['tel_fixo'];
		$sFixo = str_replace("-","",$sFixo);

		$sMovel = $aTelefones['tel_movel'];
		$sMovel = str_replace("(","",$sMovel);
		$sMovel = str_replace(")","",$sMovel);
		$sMovel = str_replace("-","",$sMovel);
		$aTelefonesCorreto = array();
		array_push($aTelefonesCorreto,$sMovel,$sFixo);
		return $aTelefonesCorreto;
	}

	public static function paginacao ($pagina = null) {

		$iquantidade_por_pagina = JsonConfig::getValue('quantidade_por_pagina');
		$rDatabase = MoobiDatabaseHandler::getDatabase();
		$rConexao = $rDatabase->getInstance();	
		$sSql = "SELECT f.id_filiado id ,f.nome Filiado,COUNT(d.id_dependente) Qtd_Dependentes ,
				 f.data_de_nascimento data  , f.idade idade
		         FROM av1_filiados f LEFT JOIN
  		         av1_dependentes d ON f.id_filiado = d.id_filiado
		         GROUP BY
  		         f.id_filiado,f.nome";
		$aLinhasRetornadas = $rConexao->query($sSql);
		$iLimitePorPagina = $rDatabase->getQuantidadeDePaginas($aLinhasRetornadas,$iquantidade_por_pagina);
		Sessao::setsessao('limitPaginaFiliados',$iLimitePorPagina);
		Sessao::setsessao('numitensFiliados',$iquantidade_por_pagina);
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