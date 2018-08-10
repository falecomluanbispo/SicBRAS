<?php

namespace App\Http\Controllers\Qualidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QualidadeController extends Controller
{
  public function index()
  {
      return view('qualidade.index');
  }
}
