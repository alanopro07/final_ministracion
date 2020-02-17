@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-2 d-flex bg-dark d-flex justify-content-center align-items-center rounded ">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearMovimiento">
                    Crear movimiento
                </button>
            </div>
            <div class="col-md-10 bg-light rounded">
                <h2 class="text-center" >
                    Ministración del estado de {{$estado}} - municipio: {{$municipio}}
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
                                <h5 class="modal-title" id="exampleModalLabel">Documentación  de {{$municipio}}</h5>
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
                {{-- Modal de la creación de movimientos --}}
                <div class="modal fade" id="crearMovimiento" tabindex="-1" role="dialog" aria-labelledby="crearMovimientoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Crear Movimiento de {{$municipio}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form name="create_activity" method="POST" action="/municipio/crear_movimiento" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset name="bankAccount_file-upload" class="form-group" data-form-step="1">
                                        <legend>Carta bancaria de cuenta</legend>
                                        <input id="bankAccount_file" name="bankAccount_file" type="file" accept=".pdf" required data-form-include>
                                        <button type="button">Guardar</button>
                                    </fieldset>
                                    <fieldset name="fiscalID_file-upload" class="form-group" data-form-step="2">
                                        <legend>Cédula de identificación fiscal SAT</legend>
                                        <input id="fiscalID_file" name="fiscalID_file" type="file" accept=".pdf" required data-form-include>
                                        <button type="button">Guardar</button>
                                    </fieldset>
                                    <fieldset name="addressCertificate_file-upload" class="form-group" data-form-step="3">
                                        <legend>Constancia de domicilio</legend>
                                        <input id="addressCertificate_file" name="addressCertificate_file" type="file" accept=".pdf" required data-form-include>
                                        <button type="button">Guardar</button>
                                    </fieldset>
                                    <fieldset name="namesRecord_file-upload" class="form-group"  data-form-step="4">
                                        <legend>Oficio de designación o nombramientos</legend>
                                        <input id="namesRecord_file" name="namesRecord_file" type="file" accept=".pdf" required data-form-include>
                                        <button type="button">Guardar</button>
                                    </fieldset>
                                    <input type="submit" value="Enviar">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-lg btn-primary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    const create_activity = new DynamicForm('create_activity');
                </script>
@endsection


