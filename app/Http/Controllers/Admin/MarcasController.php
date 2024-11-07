<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marcas;

class MarcasController extends Controller
{
    public function marcas(){
        $marcas = Marcas::all();
        return view('admin.marcas.marcas',compact('marcas'));
    }
    public function guardarMarca(Request $request){

        try {
            $marca = new Marcas();
            $marca->Nombre = $request->Nombre;
            $marca->save();
            return redirect()->back()->with('success',
            'Marca registrada con éxito');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',
            'Hubo un error: '.$th);
        }
    }
    public function editarMarca($IdMarca){
        
        $marca = Marcas::find($IdMarca);
        if ($marca==null) {
            return redirect()->back()->with('advertencia',
            'Marca no encontrada');
        }

        return view('admin.marcas.editarMarca',
        compact('marca'));
    }

    public function actualizarMarca(Request $request){
        $marca = Marcas::find($request->IdMarca);
        
        if ($marca==null) {
            return redirect()->back()->with('advertencia',
            'Marca no encontrada');
        }
        $marca->Nombre = $request->Nombre;
        $marca->save();
        return redirect()->back()->with('success',
            'Datos de marca actualizada');
    } 

    public function eliminarMarca(Request $request){
        $marca = Marcas::find($request->IdMarca);

        if ($marca==null) {
            return redirect()->back()->with('advertencia',
            'Marca no encontrada');
        }
        $marca->delete();

        return redirect()->back()->with('success',
            'Marca eliminada!');
    }
}
