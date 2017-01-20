<?php
define('CONSTANTES','classes/Constantes.php');
include_once(CONSTANTES);
define("APP_ERROS","../../");
include_once(APP_ERROS.'modulo_2/error/Config.php');
$aLocalProject = json_decode(file_get_contents('ambiente.json',true));
define ("LOCAL","http://".$_SERVER['HTTP_HOST'].$aLocalProject->local_do_Projeto);
define('SESSAO','classes/Sessao.php');
include_once(SESSAO);
Sessao::start();
define('AVISOS','classes/Avisos.php');
include_once(AVISOS);

if(!isset($_GET['controller'])) { 
	$_GET['controller'] = 'login';
}
 
if(!isset($_GET['acao'])) {
	$_GET['acao'] = "";
}  

$sController = ucfirst(strtolower($_GET['controller']));
$sAcao =ucfirst(strtolower($_GET['acao']));
  
 
if (!file_exists('controller/'.$sController.'Controller.php')){
		 require 'view/404.php';
		 exit();
}

$sarquivo = 'controller/' . $sController . 'Controller.php';
require_once $sarquivo;

$sController = $sController . "Controller";
$oController = new $sController();
$oController->setPostData($_POST);
$oController->setGetData($_GET);
$oController->setFilesData($_FILES);


if (method_exists($oController,$sAcao)) {
		$oController->$sAcao();
		
} else {

		if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID){   
			header('location:'.LOCAL.'usuario/adminpage');				
		} else if(Sessao::getsessao('id_perfil') == Constantes::$iUSER_COMUN_ID) {
			header('location:'.LOCAL.'usuario/userpage');
		} 
}