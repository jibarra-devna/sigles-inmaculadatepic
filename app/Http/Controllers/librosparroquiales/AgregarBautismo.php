<?php

namespace App\Http\Controllers\librosparroquiales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgregarBautismo extends Controller
{
  public function index()
  {
    return view('content.librosparroquiales.agregarbautismo');
  }
}
