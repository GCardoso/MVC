<?php

define("CAMINHO","../../../");
$sPasta = '/exercicios/modulo_2/login/';
define("APP_ROOT", "http://".$_SERVER['HTTP_HOST'].$sPasta);
include_once(CAMINHO.'exercicios/modulo_1/sessoes/sessao.php');
include('Config.php');
include_once('controller/UsuarioController.php');
date_default_timezone_set('America/Sao_Paulo');

	sessao::start();

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
			require 'view/404.php';
	}
