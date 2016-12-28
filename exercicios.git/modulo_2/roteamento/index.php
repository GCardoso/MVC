<?php

include ('Config.php');

define('SYS_ABS_PATH','..');

	$scontroller = ucfirst(strtolower($_GET['controller']));
	$sacao = ucfirst(strtolower($_GET['acao']));

	if (!file_exists('controller/'.$scontroller.'Controller.php')){
        echo "Nao existe controller";
    }
        $sarquivo = 'controller/' . $scontroller . 'Controller.php';
        require $sarquivo;

        $scontroller = $scontroller . "Controller";
        $ocontroller = new $scontroller();

        $ocontroller->setPostData($_POST);
        $ocontroller->setGetData($_GET);
        $ocontroller->setFilesData($_FILES);

        if (method_exists($ocontroller, $sacao)) {
            $ocontroller->$sacao();
        }
         else {
             $ocontroller->cadastrar();
        }
