
<?php

include ('Config.php');

define('SYS_ABS_PATH','..');

	$scontroller = ucfirst(strtolower($_GET['controller']));
	$sacao = ucfirst(strtolower($_GET['acao']));

	if(file_exists('controller/'.$scontroller.'Controller.php')) {
	$sarquivo = 'controller/'.$scontroller.'Controller.php';
	echo $sarquivo;
	require $sarquivo;

	$scontroller = $scontroller. "Controller";
	$ocontroller = new scontroller();

	$ocontroller->setPostData($_POST);
	$ocontroller->setGetData($_GET);
	$ocontroller->setFilesData($_FILES);

	if(method_exists($ocontroller,$sacao)) {
		$ocontroller->$sacao();
	} else {
		echo "Não existe metodo";
	}

} 
   else {
    echo "Nao existe controller";
}






