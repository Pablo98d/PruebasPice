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
                                    MARCAS
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
                                <form action="{{route('guardarMarca')}}" method="post">
                                    @csrf
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" id="Nombre" name="Nombre" class="form-control">
                                    <button class="btn btn-primary btn-sm mt-2" 
                                    style="float: right;">Registrar</button>
                                </form>
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
                                        @foreach ($marcas as $marca)
                                            <tr>
                                                <td>{{$marca->IdMarca}}</td>
                                                <td>{{$marca->Nombre}}</td>
                                                <td>
                                                    <form action="{{route('eliminarMarca')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="IdMarca" 
                                                        value="{{$marca->IdMarca}}">

                                                        <a href="{{url('editar-marca/'.$marca->IdMarca)}}" 
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection