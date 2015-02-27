
@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <a href="#"><button type="button" class="btn btn-success btn-block" style="margin-top: 16px;">Usuarios</button></a>
                <a href="#"><button type="button" class="btn btn-info btn-block" style="margin-top: 16px;">Roles</button></a>
                <a href="#"><button type="button" class="btn btn-success btn-block" style="margin-top: 16px;">Tipos de Productos</button></a>
                <a href="#"><button type="button" class="btn btn-info btn-block" style="margin-top: 16px;">Productos</button></a>
            </div>
        </div>
        <div class="col-sm-9 padding-right">
            <h2 class="title text-center">Seleccione Opcion</h2>
        </div>
    </div>
@endsection