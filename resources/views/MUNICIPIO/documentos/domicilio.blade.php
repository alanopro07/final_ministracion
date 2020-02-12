@extends('layouts.app')
@section('content')

    <div class="container bg-light">
        <div class="col-md-12 bg-light">
            <h3 class="text-center">Constacia de domicilio</h3>
        </div>
        <div class="row ">
            <div class="col-md-6 bg-light">

                {{ Form::open(array('url' => 'cargaDatosCartaBancaria', 'method' => 'post' , 'accept-charset' =>"UTF-8",'enctype' => 'multipart/form-data'))  }}

                <div class="form-group">
                    <label>Documento (copia)</label>
                    <input type="text"  class="form-control"  id="carta_bancaria_nombre" name="carta_bancaria_nombre" value="" placeholder="Ingrese documento" >
                </div>

                <div class="form-group">
                    <label>Calle</label>
                    <input type="text"  class="validanumericos form-control"  id="cuenta_clave" name="cuenta_clave" value="" placeholder="Ingresa calle" >
                </div>
                <div class="form-group">
                    <label>Numero</label>
                    <input type="text"  class="validanumericos form-control"  id="numero_cuenta" name="numero_cuenta" value="" placeholder="Ingresar numero" >
                </div>
                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text"  class="form-control"  id="cuenta_clave" name="cuenta_clave" value="" placeholder="Ingresar colonia" >
                </div>
                <div class="form-group">
                    <label>Delegación/Municipio</label>
                    <input type="text"  class="form-control"  id="cuenta_clave" name="cuenta_clave" value="" placeholder="Ingresar delegación" >
                </div>
                <div class="form-group">
                <label>CP</label>
                <input type="text"  class="form-control"  id="cuenta_clave" name="cuenta_clave" value="" placeholder="Ingresar codigo postal" >
            </div>
            </div>
            <div class="col-md-6 bg-light">

                <div class="form-group">
                    <label>Documentos validos</label>
                    <input type="text"  class="form-control"  id="nombre_titular" name="nombre_titular" value="" placeholder="Ingresar nombre titular" >
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Predio</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Luz</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agua</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Teléfono</label>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de documento</label>
                            <input size="16" type="text" class="form-control" id="datetime" name="fecha_oficio" readonly>
                            <span>*Recibo de no mas de dos meses de antiguedad</span>
                        </div>
                    </div>
                </div>
            <div class="col-md-12 bg-light">
                <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
            </div>
        </div>
        </div>
@endsection
