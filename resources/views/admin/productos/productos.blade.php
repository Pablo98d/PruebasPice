@extends('admin.layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="mb-2">
                                    PRODUCTOS
                                    <a href="{{route('nuevoProducto')}}" style="float: right" class="btn btn-primary btn-sm ">NUEVO PRODUCTO</a>
                                </h3>
                                <hr>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('advertencia'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('advertencia') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                {{-- {{$productos}} --}}
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estock</th>
                                        <th>Precio</th>
                                        <th>Marca</th>
                                        <th>Categoria</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $producto)
                                            @php
                                                $marca = DB::table('marcas')
                                                ->where('IdMarca', $producto->IdMarca)
                                                ->first();
                                                $categoria = DB::table('categorias')
                                                ->where('IdCategoria', $producto->IdCategoria)
                                                ->first();
                                            @endphp
                                            <tr>
                                                <td>{{$producto->idProducto}}</td>
                                                <td>{{$producto->Nombre}}</td>
                                                <td>{{$producto->Descripcion}}</td>
                                                <td>{{$producto->Estock}}</td>
                                                <td>${{number_format($producto->Precio,2)}}</td>
                                                {{-- <td>{{$producto->IdMarca}}</td> --}}
                                                <td>{{$marca->Nombre}}</td>
                                                {{-- <td>{{$producto->IdCategoria}}</td> --}}
                                                <td>{{$categoria->Nombre}}</td>
                                                <td>
                                                    
                                                    <form action="{{route('eliminarProducto')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="idProducto" 
                                                        value="{{$producto->idProducto}}">

                                                        <a href="{{url('editar-producto/'.$producto->idProducto)}}" 
                                                            class="btn btn-warning btn-sm">
                                                            Editar
                                                        </a>
                                                        <button type="submit" 
                                                            onclick="return confirm('¿Estas seguro de continuar?')" 
                                                            class="btn btn-danger btn-sm">
                                                            Eliminar
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection