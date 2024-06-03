<?php

namespace App\Http\Controllers\gestionarsacerdotes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SacerdotesController extends Controller
{
  public function index()
  {
    return view('content.gestionarsacerdotes.sacerdotes');
  }
}