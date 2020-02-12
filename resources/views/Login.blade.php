@extends('layouts.layoutInicial')
@section('content')

    <div class="row  d-flex justify-content-center align-content-center">
        <div class="col-md-4 d-flex rounded justify-content-center bg-light">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3 class="panel-title">Acceso a la aplicación</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" {{$errors->has('email') ? 'has-error' : ''}}>
                            <label for="email">Email</label>
                            <input class="form-control"
                                   type="email"
                                   name="email"
                                   id="email"
                                   value="{{old('email')}}"
                                   placeholder="Ingresa tu email">

                            {!! $errors->first('email','<span class="help-block btn-danger">:message</span>') !!}
                        </div>
                        <div class="form-group" {{$errors->has('password') ? 'has-error' : ''}}>
                            <label for="email">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Ingresa tu email">
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
