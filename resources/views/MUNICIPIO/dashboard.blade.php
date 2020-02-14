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
@endsection


