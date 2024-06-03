<?php

namespace App\Http\Controllers\librosparroquiales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgregarBautismoController extends Controller
{
  public function index()
  {
    return view('content.librosparroquiales.agregarbautismo');
  }
}
