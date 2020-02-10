@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 bg-light">
                <h1 class="text-center" >
                    Crear movimiento de - {{ $estado }} - {{$municipio}}
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
                                {{--@foreach($tableRows as $row)--}}
                                        <tr>
                                            <td>{{$estado}}- {{$municipio}}</td>
                                            <td>prueba</td>
                                            <td>prueba</td>
                                            <td>prueba</td>
                                            <td>prueba</td>
                                            <td>prueba</td>
                                            <td>prueba</td>
                                            <td>
                                                <a href="#" class="btn btn-primary" type="button">Revisar</a>
                                            </td>
                                        </tr>
                                {{-- @endforeach--}}
                                    </tbody>
                                    <tfoot></tfoot>
                                </table>
                <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Crear ministración
                            </button>
                </div>
            </div>
        </div>


        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Llenar Documentacion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{--                <form enctype="application/x-www-form-urlencoded" method="POST" action="{{route('cargaArchivos')}}">--}}
                            {{ Form::open(array('url' => 'cargarArchivos', 'method' => 'post' , 'accept-charset' =>"UTF-8",'enctype' => 'multipart/form-data'))  }}

                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Estado:</label>
                                        <input type="text"  class="form-control"  id="{{$estado}}" name="estado" value="{{$estado}}" placeholder="{{$estado}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Municipio:</label>
                                        <input type="text"  class="form-control"  id="{{$municipio}}" name="estado" value="{{$municipio}}" placeholder="{{$municipio}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Numero de oficio</label>
                                        <input type="text" id="numero_oficio" class="form-control" name="numero_oficio">
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de oficio</label>
                                        <input size="16" type="text" class="form-control" id="datetime" name="fecha_oficio" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Comentarios:</label>
                                        <textarea   rows="4" cols="50" size="16" type="text" class="form-control" name="commentarios" >
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 subir-archivos flex flex-column">
                                    <div class="form-group">
                                        <label>Subir archivos (has clic en el boton)</label>
                                        <div class="input-group">
                                        <span class="input-group-btn">
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default carga-archivo-input">
                                                    <span class="carga-archivo-input-title">Carta coparticipacion</span>
                                                    <input type="file" accept="application/pdf" name="constancia_nombramiento" />
                                                    <!-- rename it -->
                                                </div>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <span class="input-group-btn">
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default carga-archivo-input">
                                                    <span class="carga-archivo-input-title">Comprobante domicilio fiscal</span>
                                                    <input type="file" accept="application/pdf" name="comprobante_domicilio_fiscal" />
                                                    <!-- rename it -->
                                                </div>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <span class="input-group-btn">
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default carga-archivo-input">
                                                    <span class="carga-archivo-input-title">Oficio</span>
                                                    <input type="file" accept="application/pdf" name="oficio" />
                                                    <!-- rename it -->
                                                </div>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <span class="input-group-btn">
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default carga-archivo-input">
                                                    <span class="carga-archivo-input-title">Carta bancaria </span>
                                                    <input type="file" accept="application/pdf" name="carta_bancaria" />
                                                    <!-- rename it -->
                                                </div>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-btn">
                                                        <!-- image-preview-input -->
                                                        <div class="btn btn-default carga-archivo-input">
                                                            <span class="carga-archivo-input-title">Cedula fiscal</span>
                                                            <input type="file" accept="application/pdf" name="cedula_fiscal" />
                                                            <!-- rename it -->
                                                        </div>
                                                </span>
                                        </div>
                                        <div class="input-group">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                </form>--}}
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                            <button type="button" class="btn btn-lg btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                </div>
@endsection


