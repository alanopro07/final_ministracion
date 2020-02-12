@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row text-center">
            <div class="col-md-12 bg-light">
                <h3>Cédula de identificación fiscal (SAT)</h3>
            </div>
            <div class="col-md-6 bg-light">
                {{ Form::open(array('url' => 'cargaDatosCartaBancaria', 'method' => 'post' , 'accept-charset' =>"UTF-8",'enctype' => 'multipart/form-data'))  }}

                <div class="form-group">
                    <label>RFC</label>
                    <input type="text"   class="form-control"  id="rfc" name="rfc" value="" placeholder="Ingresar RFC" pattern="^[A-Z]{3}\d{6}[A-Z\d]{3}">
                </div>
                <div class="form-group">
                    <label>Razón social</label>
                    <input type="text"  class="form-control"  id="razon_social" name="razon_social" value="" placeholder="Ingresar razón social" >
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Observaciones DGVS</label>
                            <textarea   class="form-control"  id="observaciones_dgvs" name="numero_cuenta" value="" >
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Documento aprobado por DGVS</label>
                        <div class="form-group">
                            <input type="checkbox"  class="form-check form-control"  id="aprobado_dgvs" name="aprobado_dgvs" value="0" >

                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
            <div class="col-md-6 bg-light">
                <h4 class="text-center">Situación del registro</h4>
                <div class="form-check">
                    <input class="custom-checkbox" id='situacion1' type='checkbox' value='1' name='situacion1'>
                    <input class="custom-checkbox" id='situacion2' type='hidden' value='0' name='situacion2'>                    <label class="form-check-label">Activo</label>
                </div>
                <label class="text-center">Clic para cargar documento *PDF</label>
                <div class="col-md-12 ">
                        <div class="btn btn-default carga-archivo-input">
                            <span class="carga-archivo-input-title">Adjuntar cedula fiscal</span>
                            <input type="file" accept="application/pdf" name="carta_bancaria" />
                        </div>
                </div>

                <div class="d-inline align-bottom ">
                    <button type="submit" class="mt-3 btn btn-lg btn-primary">Enviar</button>
                    <button class="mt-3 btn btn-lg btn-primary">Cerrar</button>
                </div>

            </div>
        </div>
        </div>

@endsection
