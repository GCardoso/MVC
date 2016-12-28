<?php 
include ('../navegacao/Config.php');
include 'Array2XML.php';


$aconteudo = getallheaders();
$scontent = null;

if (isset($aconteudo['Content-Type'])) {
	$scontent = $aconteudo['Content-Type'];
}
$sreposta = 'Hello World';
$areposta = array('response' => $sreposta);

if ($scontent != null && $scontent == 'application/xml') {
	header('Content-Type: application/xml');

	$xml = Array2XML::createXML('response',$areposta);
	echo $xml->saveXML();
// 
} elseif ($scontent == 'application/javascript') {
	header('Content-Type: application/json');
	echo json_encode($areposta);
}else{
	echo $sreposta;
}