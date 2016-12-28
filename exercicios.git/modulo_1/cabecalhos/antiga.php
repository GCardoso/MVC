<?php
include('../sessoes/sessao.php');
sessao::start();	
include('../navegacao/Config.php');

header("Status: 301 Moved Permanently", false, 301);    
header('location:nova.php');


exit();
