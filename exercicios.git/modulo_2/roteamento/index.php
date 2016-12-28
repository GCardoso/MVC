<?php

include ('Config.php');

define('SYS_ABS_PATH','..');

    if(isset($_GET['controller'])){
    $scontroller = ucfirst(strtolower($_GET['controller']));
    $sacao = ucfirst(strtolower($_GET['acao']));
	
	if (!file_exists('controller/'.$scontroller.'Controller.php')){
         require 'view/404.php';
         exit();
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



}
else{
    require 'view/404.php';
}