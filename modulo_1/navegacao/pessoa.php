<?php

/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 24/12/2016
 * Time: 11:40
 */
class pessoa {

    private $snome;
    private $scpf;
    private $ssenha;
    private $musuario;
    static $user;

    function __construct()
    {
        self::$user=$this;
        $this->ssenha=null;
        $this->scpf=null;
        $this->snome=null;
    }


    public function getUsuario()
    {
        return $this->musuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($musuario)
    {
        $this->musuario = $musuario;
    }

    public static function getInstance() {
        if(self::$user==null){
            self::$user  = new pessoa();
        }
        return self::$user;
    }


    public function getSnome()
    {
        return $this->snome;
    }

    public function setSnome($snome)
    {
        $this->snome = $snome;
    }

    public function getScpf()
    {
        return $this->scpf;
    }

    public function setScpf($scpf)
    {
        $this->scpf = $scpf;
    }

    public function getSsenha()
    {
        return $this->ssenha;
    }

    public function setSsenha($ssenha)
    {
        $this->ssenha = $ssenha;
    }




}