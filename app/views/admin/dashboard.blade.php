
@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <a href="/dashboard/users"><button type="button" class="btn btn-success btn-block" style="margin-top: 16px;">Usuarios</button></a>
                <a href="/dashboard/roles"><button type="button" class="btn btn-info btn-block" style="margin-top: 16px;">Roles</button></a>
                <a href="/dashboard/types"><button type="button" class="btn btn-success btn-block" style="margin-top: 16px;">Tipos de Productos</button></a>
                <a href="/dashboard/products"><button type="button" class="btn btn-info btn-block" style="margin-top: 16px;">Productos</button></a>
            </div>
        </div>
        <div class="col-sm-9 padding-right">
            @yield('main','')
        </div>
    </div>
@endsection