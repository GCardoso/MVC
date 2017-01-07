<?php

include_once('../error/Config.php');
include 'MoobiDatabaseHandler.php';

class JSONConfig{
	public $aConfig;

	public function __construct($sPath){
		$this->aConfig = json_decode(file_get_contents($sPath),true);
	}

}

$rConfig = new JSONConfig('.config.json');

$rDatabaseHandler = new MoobiDatabaseHandler($rConfig->aConfig);

$aConexao = array();

$aConexao[] = $rDatabaseHandler->getInstance(); // método retorna uma única conexão

echo var_dump($aConexao)."<p>";

$aConexao[1] = $rDatabaseHandler->getNewInstance(); // método sempre retorna uma nova conexão

echo var_dump($aConexao[1])."<p>";

$aConexao[0]= $rDatabaseHandler->begin($aConexao[0]);

var_dump($aConexao[0])."<p>";
	
$rDatabaseHandler->execute("INSERT INTO pessoas(nome, idade) VALUES('Pedro', 27)",$aConexao[0]);
$rDatabaseHandler->execute("INSERT INTO pessoas(nome, idade) VALUES('Bruno', 28)",$aConexao[0]);
$rDatabaseHandler->execute("INSERT INTO pessoas(nome, idade) VALUES('Marcel', 29)",$aConexao[0]);

$aPessoas = $rDatabaseHandler->query("SELECT nome FROM pessoas",$aConexao[1]);

echo var_dump($aPessoas)."<p>";

//Entendento metodologia do metodo
$rDatabaseHandler->execute("DELETE FROM pessoas WHERE idade in(27,28)",$aConexao[0]);

//Confirmando o execução.
$rDatabaseHandler->commit($aConexao[0]);

$aPessoas = $rDatabaseHandler->query("SELECT nome , idade FROM pessoas where idade in(27,28,29)",$aConexao[0]);

foreach ($aConexao[1]->query("SELECT nome,idade FROM pessoas where idade in(27,28,29)") as $key) {
	echo "nome :".$key['nome']."<br>";
	echo "nome :".$key['idade']."<br>";
}

echo var_dump($aPessoas)."<p>";



$aConexao[0] = $rDatabaseHandler->close();

$aConexao = $rDatabaseHandler->closeAll();