<?php 

include_once(CAMINHOS.'exercicios/modulo_1/sessoes/sessao.php');

class Usuario {

	public static function listar() {
		return json_decode(file_get_contents('u.json'),true);
	}


	//Salvando dados no arquivo Novocadstro.Json;
	public static function salvar ($aDados) {
        $fp = fopen('novocadastro.json','w');
        var_dump($fp);
        fwrite($fp,'{'. '"'.$aDados['login'].'"'.':'.json_encode($aDados)."}");
        fclose($fp);
    }
}