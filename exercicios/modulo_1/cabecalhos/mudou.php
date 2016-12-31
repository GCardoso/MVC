<?php
include('../navegacao/Config.php');

header("HTTP: 302", false, 302);    
header("location:nova.php");

echo http_response_code();

exit();