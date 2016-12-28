<?php

include ('../navegacao/Config.php'); 

http_response_code(200);
$iHTTPNumber = http_response_code();
echo "O valor de retorno foi :" . $iHTTPNumber;


?>