@extends('admin.layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        EDITAR MARCA
                        <a href="{{route('marcas')}}" 
                        class="btn btn-dark btn-sm" 
                        style="float: right">Atras</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('actualizarMarca')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="IdMarca" 
                                        value="{{$marca->IdMarca}}">

                                        <div class="col-md-12">
                                            <label for="Nombre">Nombre</label>
                                            <input type="text" name="Nombre" id="Nombre" value="{{$marca->Nombre}}" class="form-control" >
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-sm mt-4"
                                                style="float: right"
                                                onclick="return confirm('¿Estas seguro de continuar?')">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection