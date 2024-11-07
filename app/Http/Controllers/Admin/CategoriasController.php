<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function categorias(Request $request){
        // dd($request->all());
        $categorias = Categorias::all();
        $opcion='nuevo';
        if (empty($request->opcion)) {
            $opcion='nuevo';
        } elseif($request->opcion == 'editar'){
            $opcion='editar';
            $categoria = Categorias::find($request->idcategoria);
            if ($categoria==null) {
                return redirect('categorias')->with('advertencia',
                'Categoria no encontrada');
            }
            return view('admin.categorias.categorias',
            compact('categorias','opcion','categoria'));
        } else{
            return redirect('categorias')->with('advertencia',
                'Ups. No encontramos lo que buscabas');
        }

        return view('admin.categorias.categorias',compact('categorias','opcion'));
    }

    public function guardarCategoria(Request $request){

        try {
            $categoria = new Categorias();
            $categoria->Nombre = $request->Nombre;
            $categoria->save();
            return redirect()->back()->with('success',
            'Categoria registrado con éxito');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',
            'Hubo un error: '.$th);
        }
    }
    public function editarCategoria($IdCategoria){
        
        $categoria = Categorias::find($IdCategoria);
        if ($categoria==null) {
            return redirect()->back()->with('advertencia',
            'Categoria no encontrada');
        }

        return view('admin.categorias.editarCategoria',
        compact('categoria'));
    }

    public function actualizarCategoria(Request $request){
        $categoria = Categorias::find($request->IdCategoria);
        
        if ($categoria==null) {
            return redirect()->back()->with('advertencia',
            'Categoria no encontrada');
        }
        $categoria->Nombre = $request->Nombre;
        $categoria->save();
        return redirect()->back()->with('success',
            'Datos de categoria actualizada');
    } 

    public function eliminarCategoria (Request $request){
        $categoria = Categorias::find($request->IdCategoria);

        if ($categoria==null) {
            return redirect()->back()->with('advertencia',
            'Categoria no encontrada');
        }
        $categoria->delete();

        return redirect()->back()->with('success',
            'Categoria eliminada!');
    }
}
