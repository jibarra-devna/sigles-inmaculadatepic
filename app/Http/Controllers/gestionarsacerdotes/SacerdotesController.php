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
 

  public function edit(Request $request){

     Sacerdotes::where('ID_SACERDOTE',$request->id_edit)->update([
          'NOMBRE' => $request->nombre_edit,
          'APELLIDOS' => $request->apellido_edit,
        ]);
  }

   public function delete($id){

    $eliminar_parroco = Sacerdotes::where('ID_SACERDOTE', $id)->delete();
    //elimina los datos
    return response()->json(["success"=>true],200); 
    }
}