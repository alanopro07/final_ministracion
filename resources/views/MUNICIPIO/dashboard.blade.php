@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-2 d-flex bg-dark d-flex justify-content-center align-items-center rounded ">
                <button type="button" class="btn btn-primary"  >
                    Crear movimiento
                </button>
            </div>
            <div class="col-md-10 bg-light rounded">
                <h2 class="text-center" >
{{--                    Ministración del estado de {{$estado}} - municipio: {{$municipio}}--}}
                </h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Entidad - Municipio</th>
                            <th>Fecha de Movimiento</th>
                            <th>Número de Oficio</th>
                            <th>Fecha de Oficio</th>
                            <th>Comentarios</th>
                            <th>Estatus</th>
                            <th>Observación</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>prueba</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Ver documentación</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>

{{--    modal del detalle de movimientos--}}
            <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
{{--                                <h5 class="modal-title" id="exampleModalLabel">Documentación  de {{$municipio}}</h5>--}}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                aqui van los enlaces de los diferentes documentos
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-lg btn-primary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>


{{-- seccion para integracion de formularios   --}}

{{--        Carta bancaria            --}}

    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 bg-light">
                <h3 class="text-center bg-light">Carta bancaria  (cuenta concentradora)</h3>
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
                <div class="form-group">
                    <label>Sucursal</label>
                    <input type="text" class="form-control" id="sucursal" name="sucursal" value="" placeholder="Ingresar rfc bancario"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Institución Bancaria</label>
                        <select class="browser-default custom-select" name="institucion_bancaria" id="institucion_bancaria" >
                            <option value="0">Selecciona un banco</option>
                            <option value="1">Banco Nacional de México (Banamex)</option>
                            <option value="2">Banco Santander (México)</option>
                            <option value="3">HSBC México</option>
                            <option value="4">Scotiabank Inverlat</option>
                            <option value="5">BBVA Bancomer</option>
                            <option value="6">Banco Mercantil del Norte (Banorte)</option>
                            <option value="7">Banco Inbursa</option>
                            <option value="8">Banco del Bajio</option>
                            <option value="9">Banco Azteca</option>
                            <option value="10">Bancopel</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Clic para cargar documento *PDF</label>
                        <div class="btn btn-default carga-archivo-input">
                            <span class="carga-archivo-input-title">Adjuntar carta bancaria</span>
                            <input type="file" accept="application/pdf" name="archivo_carta_bancaria" />
                            <!-- rename it -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bg-light pt-2">
                <button type="submit" class="btn btn-lg btn-primary">Siguiente</button>
            </div>
        </div>
    </div>

    <br>

{{--  cooparticipación  --}}

    <div class="container">

        <div class="row text-center">
            <div class="col-md-12 bg-light ">

                <h3>Carta bancaria de cuenta (coparticipación)</h3>
            </div>
            <div class="col-md-6 bg-light">

               <div class="form-group">
                    <label>Carta Bancaria</label>
                    <input type="text"  class="form-control"  id="coparticipacion_nombre" name="coparticipacion_nombre" value="" placeholder="Ingresar carta bancaria" >
                </div>

                <div class="form-group">
                    <label>Cuenta clave</label>
                    <input type="text"  class="validanumericos form-control"  id="cuenta_clave_coparticipacion" name="cuenta_clave_coparticipacion" value="" placeholder="Ingresar cuenta clave" >
                </div>

                <div class="form-group">
                    <label>Numero de cuenta</label>
                    <input type="text"  class="validanumericos form-control"  id="numero_cuenta_coparticipacion" name="numero_cuenta_coparticipacion" value="" placeholder="Ingresar numero de cuenta" >
                </div>
            </div>
            <div class="col-md-6 bg-light">

                <div class="form-group">
                    <label>Nombre titular</label>
                    <input type="text"  class="form-control"  id="nombre_titular_coparticipacion" name="nombre_titular_coparticipacion" value="" placeholder="Ingresar nombre titular" >
                </div>

                <div class="form-group">
                    <label>RFC - Bancario</label>
                    <input type="text" class="form-control" id="rfc_bancario_coparticipacion" name="rfc_bancario_coparticipacion" value="" placeholder="Ingresar rfc bancario"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Institución Bancaria</label>
                        <select class="browser-default custom-select" name="institucion_bancaria_coparticiacion" id="institucion_bancaria_coparticiacion" >
                            <option value="0">Selecciona un banco</option>
                            <option value="1">Banco Nacional de México (Banamex)</option>
                            <option value="2">Banco Santander (México)</option>
                            <option value="3">HSBC México</option>
                            <option value="4">Scotiabank Inverlat</option>
                            <option value="5">BBVA Bancomer</option>
                            <option value="6">Banco Mercantil del Norte (Banorte)</option>
                            <option value="7">Banco Inbursa</option>
                            <option value="8">Banco del Bajio</option>
                            <option value="9">Banco Azteca</option>
                            <option value="10">Bancopel</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Clic para cargar documento *PDF</label>
                        <div class="btn btn-default carga-archivo-input">
                            <span class="carga-archivo-input-title">Adjuntar carta bancaria coparticipacion</span>
                            <input type="file" accept="application/pdf" name="carta_bancaria_coparticipacion" />
                            <!-- rename it -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bg-light">
                <button type="submit" class="btn btn-lg btn-primary">Siguiente</button>
            </div>
        </div>
    </div>

    <br>
    {{--    cedula fiscal--}}

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 bg-light">
                <h3>Cédula de identificación fiscal (SAT)</h3>
            </div>
            <div class="col-md-6 bg-light">

                <div class="form-group">
                    <label>RFC</label>
                    <input type="text"   class="form-control"  id="rfc" name="rfc" value="" placeholder="Ingresar RFC" pattern="^[A-Z]{3}\d{6}[A-Z\d]{3}">
                </div>
                <div class="form-group">
                    <label>Razón social</label>
                    <input type="text"  class="form-control"  id="razon_social" name="razon_social" value="" placeholder="Ingresar razón social" >
                </div>
            </div>
            <div class="col-md-6 bg-light">
                <label class="text-center">Clic para cargar documento *PDF</label>
                <div class="col-md-12 ">
                    <div class="btn btn-default carga-archivo-input">
                        <span class="carga-archivo-input-title">Adjuntar cedula fiscal (SAT)</span>
                        <input type="file" accept="application/pdf" name="cedula_fiscal_sat" />
                    </div>
                </div>
            </div>
            <div class="d-inline align-bottom col-md-12 bg-light ">
                <button type="submit" class="mt-3 btn btn-lg btn-primary">Siguiente</button>
            </div>
        </div>
    </div>

    <br>

{{-- carta domicilio   --}}

    <div class="container bg-light">
        <div class="col-md-12 bg-light">
            <h3 class="text-center">Constancia de domicilio</h3>
        </div>
        <div class="row ">
            <div class="col-md-6 bg-light text-center">

                <div class="form-group">
                    <label>Calle</label>
                    <input type="text"  class="calle form-control"  id="calle" name="calle" value="" placeholder="Ingresa calle" >
                </div>
                <div class="form-group">
                    <label>Numero</label>
                    <input type="text"  class="validanumericos form-control"  id="numero_domicilio" name="numero_domicilio" value="" placeholder="Ingresar numero de domicilio" >
                </div>
                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text"  class="form-control"  id="colonia" name="colonia" value="" placeholder="Ingresar colonia" >
                </div>
                <div class="form-group">
                    <label>Delegación/Municipio</label>
                    <input type="text"  class="form-control"  id="delegacion" name="delegacion" value="" placeholder="Ingresar delegación" >
                </div>
                <div class="form-group">
                    <label>CP</label>
                    <input type="text"  class="form-control"  id="codigo_postal" name="codigo_postal" value="" placeholder="Ingresar codigo postal" >
                </div>
            </div>
            <div class="col-md-6 bg-light d-flex flex-column justify-content-center align-items-center ">
                <label>Documentos validos</label>
                <div class="form-group">
                    <input type="radio" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Predio</label>
                </div>
                <div class="form-group">
                    <input type="radio" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Luz</label>
                </div>
                <div class="form-group">
                    <input type="radio" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agua</label>
                </div>
                <div class="form-group">
                    <input type="radio" class="form-group-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Teléfono</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Fecha de documento</label>
                        <input size="16" type="text" class="form-control" id="datetime" name="fecha_comprobante_domicilio" readonly>
                        <span>(*Recibo de no mas de dos meses de antiguedad)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bg-light d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
            </div>
        </div>
    </div>

    <br>
{{--    carta de nombramientos--}}

    <div class="container bg-light">

        <div class="col-md-12 bg-light">
            <h3 class="text-center">Carta nombramiento</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group text-center">
                    <label>Titulo documento copia</label>
                    <input type="text"  class="form-control"  id="colonia" name="colonia" value="" placeholder="Ingresar colonia" >
                </div>
            </div>

        </div>

    </div>

@endsection


