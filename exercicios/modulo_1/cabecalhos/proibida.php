<?php
include('../navegacao/Config.php');

header("HTTP: 403", false, 403);    

echo "O valor de retorno:".http_response_code();

exit();