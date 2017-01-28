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
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function stop() {
        return session_destroy();
    }

    public static function setsessao($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function getsessao($key) {
        self::start();
        return $_SESSION[$key];
    }

    public static function buscar() {        
        self::start();
        return $_SESSION;
    }

    public static function autenticar($usuario, $senha) {
        self::start();
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
      self::start();
      unset($_SESSION[$key]);
   }

   public static function limpar($key) {
       self::start();
       unset($_SESSION[$key]);
   }

   public static function hasSessao() {
        if(empty($_SESSION)) {
            return true;
        }
            return false;
   }
}