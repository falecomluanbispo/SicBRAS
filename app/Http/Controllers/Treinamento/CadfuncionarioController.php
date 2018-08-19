<?php

namespace App\Http\Controllers\Treinamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadfuncionarioController extends Controller
{
  public function index()
  {
      return view('treinamento.cadfuncionario');
  }
}
	


