<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Marcas;
use App\Models\Categorias;


class ProductosController extends Controller
{
    public function productos(){
        $productos = Productos::all();
        // dd($productos);
        // return view('admin.productos.productos',['products'=>$productos]);
        return view('admin.productos.productos',compact('productos'));
    }

    public function nuevoProducto(){
        $marcas=Marcas::all();
        $categorias=Categorias::all();

        return view('admin.productos.nuevoProducto',
        compact('marcas','categorias'));
    }

    public function guardarProducto(Request $request){

        try {
            $producto = new Productos();
            $producto->Nombre = $request->Nombre;
            $producto->Descripcion = $request->Descripcion;
            $producto->Estock = $request->Estock;
            $producto->Precio = $request->Precio;
            $producto->IdMarca = $request->IdMarca;
            $producto->IdCategoria = $request->IdCategoria;
            $producto->save();

            return redirect()->back()->with('success',
            'Producto registrado con éxito');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error',
            'Hubo un error: '.$th);
        }

    }

    public function editarProducto($idProducto){
        $marcas=Marcas::all();
        $categorias=Categorias::all();
        $producto = Productos::find($idProducto);
        if ($producto==null) {
            return redirect()->back()->with('advertencia',
            'Producto no encontrado');
        }

        return view('admin.productos.editarProducto',
        compact('producto','marcas','categorias'));
    }

    public function actualizarProducto(Request $request){
        $producto = Productos::find($request->idProducto);
        
        if ($producto==null) {
            return redirect()->back()->with('advertencia',
            'Producto no encontrado');
        }
        $producto->Nombre = $request->Nombre;
        $producto->Descripcion = $request->Descripcion;
        $producto->Estock = $request->Estock;
        $producto->Precio = $request->Precio;
        $producto->IdMarca = $request->IdMarca;
        $producto->IdCategoria = $request->IdCategoria;
        $producto->save();
        return redirect()->back()->with('success',
            'Datos de producto actualizado');
    }
    public function eliminarProducto(Request $request){
        $producto = Productos::find($request->idProducto);
        // dd($producto);
        if ($producto==null) {
            return redirect()->back()->with('advertencia',
            'Producto no encontrado');
        }
        // Productos::where('idProducto','=',$request->idProducto)
        // ->delete();
        $producto->destroy();

        return redirect()->back()->with('success',
            '¡Producto eliminado!');

    }

    public function pruebas(){
        $p=Productos::find(1);
        // dd($p,$p->nombreCategoria());
        return view('admin.productos.prueba',compact('p'));
    }
    // ProductController.php

}
