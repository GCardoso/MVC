<?php

	class  MoobiDatabaseHandler  {

	private static $sHost;
	private static $sDataBase;
	private static $sUser;
	private static $spassword;
	private static $aConexao;


    public function __construct($aConfigJson) {

    	if(!empty($aConfigJson['host'])) {
    		self::$sHost = $aConfigJson['host'];
    	}

    	if(!empty($aConfigJson['user'])) {
    		self::$sUser = $aConfigJson['user'];

    	}

    	if(!empty($aConfigJson['password'])) {
    		self::$spassword = $aConfigJson['password'];
    	}

    	if(!empty($aConfigJson['database'])) {
    		self::$sDataBase = $aConfigJson['database'];
    	}
 		
 		self::$aConexao = array();
    	 
      
    }


    public static function getInstance () {
  
		$host = self::$sHost;
		$banco = self::$sDataBase;
    	$dns ="mysql:host=$host;dbname=$banco";



		if (count(self::$aConexao) > 0){
			return $aConexao[0];	
		}
			try {
				self::$aConexao[] = new PDO($dns,self::$sUser, self::$spassword);
		    	end(self::$aConexao)->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
			catch(PDOException $erro){
		    	echo "Falha : ". $erro->getMessage();
		    }	
		return self::$aConexao[0]; 
		}

		public static function getNewInstance() {	

		$host = self::$sHost;
		$banco = self::$sDataBase;
    	$dns ="mysql:host=$host;dbname=$banco";

		try {
			self::$aConexao[] = new PDO("mysql:host=$host;dbname=$banco", self::$sUser, self::$spassword);
			end(self::$aConexao)->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	
    	}
		catch(PDOException $erro) {
    		echo "Falha : " . $erro->getMessage();
   	 	}

    		return  end(self::$aConexao);
   		}

   		// Inicia a transação.
     	public static function begin ($rConexao) {
        	$rConexao->beginTransaction();
        	return $rConexao;
    	} 

    	//Commit o resultado da execução do sql
    	public static function commit ($rConexao) {
    		$rConexao->commit();
    		return $rConexao;
    	} 

    	//Executa um sql de realizará alterações no banco de dados;
    	public static function execute ($sSql,$rConexao) {
    		$resultado = $rConexao->prepare($sSql)->execute();
    	}

    	//Fecha  a primeira conexao;
    	public static function close () {
    		self::$aConexao[0] = null;
    		return self::$aConexao[0];
    	}

    	// Fecha todas as conexoes abertas
    	public static function closeAll () {

    		foreach (self::$aConexao as &$key) {
    			  $key = null;
    		}
    		unset($key);
    		return self::$aConexao;
    	}

    	//Executa uma busca  e retorna o resultado
    	public static function query ($sSql, $rConexao) {
    		$aResultado = $rConexao->query($sSql);
    		return $aResultado;
    	}

}