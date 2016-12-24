<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //

    function index(){
        return view('WebSites.home');
    }

    function folha(){
        return view('WebSites.tabela');
    }

    function inserir(Request $request){

        return var_dump($_GET);
    }

    function  Nova(){
        return view('welcome');
    }
}
