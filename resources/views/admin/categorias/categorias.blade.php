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
                                    CATEGORIAS
                                    {{-- <a href="{{route('nuevaCategoria')}}" style="float: right" class="btn btn-primary btn-sm ">NUEVA CATEGORIA</a> --}}
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
                            <div class="col-md-5">
                                @if ($opcion=='nuevo')
                                    <form action="{{route('guardarCategoria')}}" method="post">
                                        @csrf
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" name="Nombre" class="form-control">
                                        <button class="btn btn-primary btn-sm mt-2" style="float: right;">Registrar</button>
                                    </form>
                                @elseif($opcion=='editar')
                                    <form action="{{route('actualizarCategoria')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="IdCategoria" 
                                            value="{{$categoria->IdCategoria}}">
    
                                            <div class="col-md-12">
                                                <label for="Nombre">Nombre</label>
                                                <input type="text" name="Nombre" id="Nombre" value="{{$categoria->Nombre}}" class="form-control" >
                                            </div>
                                            <div class="col-md-12">
                                                <a href="{{route('categorias')}}" class="btn btn-danger btn-sm mt-4">
                                                    Cancelar
                                                </a>
                                                <button type="submit" class="btn btn-primary btn-sm mt-4"
                                                    style="float: right"
                                                    onclick="return confirm('¿Estas seguro de continuar?')">
                                                    Guardar Cambios
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                                
                            </div>
                            
                            <div class="col-md-1"></div>

                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorias as $categoria)
                                            <tr>
                                                <td>{{$categoria->IdCategoria}}</td>
                                                <td>{{$categoria->Nombre}}</td>
                                                <td>
                                                    <form action="{{route('eliminarCategoria')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="IdCategoria" 
                                                        value="{{$categoria->IdCategoria}}">

                                                        <a href="{{url('categorias?opcion=editar&&idcategoria='.$categoria->IdCategoria)}}" 
                                                            class="btn btn-warning btn-sm">
                                                            Editar
                                                        </a>
                                                        {{-- <a href="{{url('editar-categoria/'.$categoria->IdCategoria)}}" 
                                                            class="btn btn-warning btn-sm">
                                                            Editar
                                                        </a> --}}
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