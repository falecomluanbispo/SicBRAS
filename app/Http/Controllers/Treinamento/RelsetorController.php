<?php

namespace App\Http\Controllers\Treinamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelsetorController extends Controller
{
  public function index()
  {
      return view('treinamento.relsetor');
  }
}



