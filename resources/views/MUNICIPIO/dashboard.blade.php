@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex bg-dark d-flex justify-content-center align-items-center ">
                <button type="button" class="btn btn-primary"  >
                    Crear movimiento
                </button>
            </div>
            <div class="col-md-10 bg-light">
                <h1 class="text-center" >
                    Crear movimiento {{$municipio}}
                </h1>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#"  class="btn btn-primary" type="button">Ver detalle</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>

@endsection


