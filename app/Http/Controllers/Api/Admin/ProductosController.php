<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;
use App\Models\Marcas;

class ProductosController extends Controller
{
    public function index(){
        $productos=Productos::all();
       
        return response()->json($productos,200);
    }
    public function producto($id){
        $producto=Productos::find($id);
        if ($producto==null) {
            return response()->json('No hemos encontrado el producto',400);
        }

        return response()->json($producto,200);
    }

    public function guardar_producto(Request $request){

        $categoria=Categorias::find($request->idCategoria);
        if ($categoria==null) {
            return response()->json('No hemos encontrado la categoria',400);
        }
        $marca=Marcas::find($request->idMarca);
        if ($marca==null) {
            return response()->json('No hemos encontrado la marca',400);
        }

        try {
            $producto = new Productos();
            $producto->Nombre = $request->nombre;
            $producto->Descripcion = $request->descripcion;
            $producto->Estock = $request->estock;
            $producto->Precio = $request->precio;
            $producto->IdMarca = $request->idMarca;
            $producto->IdCategoria = $request->idCategoria;
            $producto->save();
            return response()->json('Producto registrado con éxito',200);
        } catch (\Throwable $th) {
            return response()->json('Hubo un error: '.$th,400);
        }

    }
}
