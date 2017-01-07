<?php

/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 15:02
 */
class Sessao
{

    public static function start() {
        return session_start();
    }

    public static function stop() {
        return session_destroy();
    }

    public static function setsessao($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function getsessao($key) {
        return $_SESSION[$key];
    }

    public static function buscar() {        
        return $_SESSION;
    }

    public static function autenticar($usuario, $senha) {
        if (!empty($_SESSION)) {
            foreach ($_SESSION as &$lista) {
                if ($lista['usuario'] == $usuario && $lista['senha'] == $senha ) {
                    $lista['logado'] = 'sim';
                    return true;
                }
            }
            unset($lista);
        } else {
            return false;
        }
    }

   public static function deslogarunico($key) {
      unset($_SESSION[$key]);
   }

   public static function limpar($key) {
       unset($_SESSION[$key]);
   }
}