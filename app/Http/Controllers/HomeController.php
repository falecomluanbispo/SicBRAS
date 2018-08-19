<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function help()
    {
        return view('home');
    }

    /* FUNÇÃO DO GERENCIADOR DE ARQUIVOS */ 
    public function gerenciador()
    {
        return view('home');
    }

    /* RELATORIOS */ 
    public function reltreinamento()
    {
        return view('home');
    }

    public function relfuncionario()
    {
        return view('home');
    }

    public function relcargo()
    {
        return view('home');
    }

    public function relsetor()
    {
        return view('home');
    }

    public function reldepartamento()
    {
        return view('home');
    }

    public function relturma()
    {
        return view('home');
    }



    /* CADASTROS */ 
    public function cadtreinamento()
    {
        return view('home');
    }

    public function cadturma()
    {
        return view('home');
    }

    public function cadcargo()
    {
        return view('home');
    }

    public function cadsetor()
    {
        return view('home');
    }

    public function caddepartamento()
    {
        return view('home');
    }

    public function cadfuncionario()
    {
        return view('home');
    }

        /* CONSULTAS */ 
    public function contreinamento()
    {
        return view('home');
    }

    public function confuncionario()
    {
        return view('home');
    }

    public function concargo()
    {
        return view('home');
    }

    public function conturma()
    {
        return view('home');
    }

    public function consetor()
    {
        return view('home');
    }

    public function condepartamento()
    {
        return view('home');
    }




}
