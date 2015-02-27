
@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Ingrese Sus Datos</h2>
                        {{ Form::open(['route'=> 'sessions.store']) }}
                        {{ Form::text('email',Input::old('email'), ['class'=> 'form-control input-lg','required'=>'required','placeholder' => "Direccion de Correo"]) }}
                        {{ Form::password('password', ['class'=> 'form-control input-lg','required'=>'required','placeholder' => 'Contraseña']) }}
                        {{ Form::submit('Ingresar', ['class'=> 'btn btn-success btn-lg align']) }}
                        @if(Session::has('flash_message'))
                            <span class="label label-danger">
                                {{ Session::get('flash_message') }}
                            </span>
                        @endif
                        {{ Form::close() }}
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="#">
                            <input type="text" placeholder="Name"/>
                            <input type="email" placeholder="Email Address"/>
                            <input type="password" placeholder="Password"/>
                            <button type="submit" class="btn btn-success btn-lg align">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    @include('layouts.footer')
@stop