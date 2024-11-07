@extends('admin.layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h3>INVENTARIO</h3>
                                </center>
                                <hr>
                                
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-4 d-grid gap-2">

                                <a href="{{route('productos')}}" class="btn btn-dark btn-lg">Productos</a>
                            </div>
                            <div class="col-md-4 d-grid gap-2">
                                <a href="{{route('categorias')}}" class="btn btn-dark btn-lg">Categorias</a>
                            </div>
                            <div class="col-md-4 d-grid gap-2">
                                <a href="{{route('marcas')}}" class="btn btn-dark btn-lg">Marcas</a>
                            </div>
                        </div>

                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection