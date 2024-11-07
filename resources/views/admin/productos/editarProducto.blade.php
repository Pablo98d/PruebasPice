@extends('admin.layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        EDITAR PRODUCTO
                        <a href="{{route('productos')}}" 
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
                                <form action="{{route('actualizarProducto')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="idProducto" 
                                        value="{{$producto->idProducto}}">

                                        <div class="col-md-4">
                                            <label for="Nombre">Nombre</label>
                                            <input type="text" name="Nombre" id="Nombre" value="{{$producto->Nombre}}" class="form-control" >
                                        </div>
                                        <div class="col-md-8">
                                            <label for="Descripcion">Descripción</label>
                                            <input type="text" name="Descripcion" id="Descripcion" value="{{$producto->Descripcion}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Estock">Estock</label>
                                            <input type="number" name="Estock" id="Estock" value="{{$producto->Estock}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Precio">Precio</label>
                                            <input type="number" name="Precio" step="0.10" id="Precio" value="{{$producto->Precio}}"
                                            class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="IdMarca">Marca</label>
                                            <select name="IdMarca" id="IdMarca" class="form-select">
                                                <option value="" >Seleccionar</option>
                                                @foreach ($marcas as $marca)
                                                    <option value="{{$marca->IdMarca}}" 
                                                        {{$marca->IdMarca == $producto->IdMarca ? 'selected':''}}>
                                                        {{$marca->Nombre}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="IdCategoria">Categorias</label>
                                            <select name="IdCategoria" id="IdCategoria" class="form-select">
                                                <option value="">Seleccionar</option>
                                                @foreach ($categorias as $categoria)
                                                    <option value="{{$categoria->IdCategoria}}"
                                                        {{$categoria->IdCategoria == $producto->IdCategoria ? 'selected':''}}>
                                                        {{$categoria->Nombre}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-sm"
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