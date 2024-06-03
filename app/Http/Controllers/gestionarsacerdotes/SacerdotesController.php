<?php

namespace App\Http\Controllers\gestionarsacerdotes;

use App\Models\Sacerdotes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SacerdotesController extends Controller
{
  public function index()
  {
    $tsacerdotes = Sacerdotes::all();
    return view('content.gestionarsacerdotes.sacerdotes', compact('tsacerdotes'));
  }
}