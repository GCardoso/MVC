<?php

/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 25/12/2016
 * Time: 15:02
 */
class sessao
{

    public static function start()
    {
        return session_start();
    }

    public static function stop()
    {
        return session_destroy();
    }

    public static function setsessao($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function getsessao($key)
    {
        return $_SESSION[$key];
    }

    public static function buscar()
    {
        $valor = $_SESSION;
        return $valor;
    }

    public static function autenticar($usuario, $senha)
    {
        $todosUsers = self::buscar();
        if (!empty($todosUsers)) {
            foreach ($todosUsers as $lista) {
                if ($lista['usuario'] == $usuario && $lista['senha'] == $senha ) {
                    return true;
                }
            }
        }else{
            return false;
        }
    }


}