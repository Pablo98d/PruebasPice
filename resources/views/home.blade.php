@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('INVENTARIO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-dark">Productos</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-dark">Categorias</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-dark">Marcas</a>
                        </div>
                    </div>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
