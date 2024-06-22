<?php

namespace App\Http\Controllers\gestionarsacerdotes;

use App\Models\Sacerdotes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Validator;

class SacerdotesController extends Controller
{
  public function index()
  {
    $tsacerdotes = Sacerdotes::orderBy('id_sacerdote')
              ->paginate('5');
    //$tsacerdotes = Sacerdotes::all();

    return view('content.gestionarsacerdotes.sacerdotes', compact('tsacerdotes'));
  }

  public function store(Request $request){

    $postSacerdote = new Sacerdotes();
    $postSacerdote->nombre_sacerdote = $request->nombre_sacerdote;
    $postSacerdote->apellidos_sacerdote = $request->apellidos_sacerdote;
    $postSacerdote->titulo = $request->titulo;
    $postSacerdote->fecha_nacimiento = $request->fecha_nacimiento;
    $postSacerdote->periodo_inicio = $request->periodo_inicio;
    $postSacerdote->periodo_fin = $request->periodo_fin;
    $postSacerdote->save();

   return redirect()->route('parrocos.index');
  }
 

  public function edit(Request $request){

     Sacerdotes::where('id_sacerdote',$request->id_edit)->update([
          'nombre_sacerdote' => $request->nombre_edit,
          'apellidos_sacerdote' => $request->apellido_edit,
          'titulo' => $request->titulo_edit,
          'fecha_nacimiento' => $request->fecha_nacimiento_edit,
          'periodo_inicio' => $request->periodo_inicio_edit,
          'periodo_fin' => $request->periodo_fin_edit,
        ]);
  }

   public function delete($id){

    $eliminar_parroco = Sacerdotes::where('id_sacerdote', $id)->delete();
    //elimina los datos
    return response()->json(["success"=>true],200); 
    }
}