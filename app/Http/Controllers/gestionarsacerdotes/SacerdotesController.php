<?php

namespace App\Http\Controllers\gestionarsacerdotes;

use App\Models\Sacerdotes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class SacerdotesController extends Controller
{
  public function index()
  {
    $tsacerdotes = Sacerdotes::all();
    return view('content.gestionarsacerdotes.sacerdotes', compact('tsacerdotes'));
  }

  public function store(Request $request){

    $postSacerdote = new Sacerdotes();
    $postSacerdote->NOMBRE = $request->NOMBRE;
    $postSacerdote->APELLIDOS = $request->APELLIDOS;
    $postSacerdote->save();

   return redirect()->route('parrocos.index');
  }
}