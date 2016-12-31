<?php

include ('../navegacao/Config.php');

if (! autenticar_user($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="MoobiTech"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario ou senha invalida.";
    exit;
}else{
	echo "Usuário: " . $_SERVER['PHP_AUTH_USER'] ." logado com sucesso";
}

function autenticar_user($usuario,$password) {
    
    $acesso = array('usuario' => 'marcus','senha'  => '161193mv');

    if (isset($acesso['usuario'])== $usuario  && ($acesso['senha'] == $password)) {
        return true;
    } else {
        return false;
    }
}
exit();