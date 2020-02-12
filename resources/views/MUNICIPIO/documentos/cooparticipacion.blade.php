@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row text-center">
            <div class="col-md-12 bg-light">

                <h3>Carta bancaria de cuenta cooparticipación</h3>
            </div>
            <div class="col-md-6 bg-light">

                {{ Form::open(array('url' => 'cargaDatosCartaBancaria', 'method' => 'post' , 'accept-charset' =>"UTF-8",'enctype' => 'multipart/form-data'))  }}
                <div class="form-group">
                    <label>Carta Bancaria</label>
                    <input type="text"  class="form-control"  id="carta_bancaria_nombre" name="carta_bancaria_nombre" value="" placeholder="Ingresar carta bancaria" >
                </div>

                <div class="form-group">
                    <label>Cuenta clave</label>
                    <input type="text"  class="validanumericos form-control"  id="cuenta_clave" name="cuenta_clave" value="" placeholder="Ingresar cuenta clave" >
                </div>

                <div class="form-group">
                    <label>Numero de cuenta</label>
                    <input type="text"  class="validanumericos form-control"  id="numero_cuenta" name="numero_cuenta" value="" placeholder="Ingresar numero de cuenta" >
                </div>
            </div>
            <div class="col-md-6 bg-light">

                <div class="form-group">
                    <label>Nombre titular</label>
                    <input type="text"  class="form-control"  id="nombre_titular" name="nombre_titular" value="" placeholder="Ingresar nombre titular" >
                </div>

                <div class="form-group">
                    <label>RFC - Bancario</label>
                    <input type="text" class="form-control" id="rfc_bancario" name="rfc_bancario" value="" placeholder="Ingresar rfc bancario"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Institución Bancaria</label>
                        <select class="browser-default custom-select" name="institucion_bancaria" id="institucion_bancaria" >
                            <option value="0">Selecciona un banco</option>
                            <option value="1">dos</option>
                            <option value="2">tres</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Clic para cargar documento *PDF</label>
                        <div class="btn btn-default carga-archivo-input">
                            <span class="carga-archivo-input-title">Adjuntar carta bancaria</span>
                            <input type="file" accept="application/pdf" name="carta_bancaria" />
                            <!-- rename it -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bg-light">
                <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
            </div>
        </div>
    </div>
@endsection
