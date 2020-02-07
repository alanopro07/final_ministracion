@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 bg-light">

                <h1 class="text-center" >
                    Dashboard {{ $estado }}
                </h1>
{{--                <form enctype="application/x-www-form-urlencoded" method="POST" action="{{route('cargaArchivos')}}">--}}
                {{ Form::open(array('url' => 'cargarArchivos', 'method' => 'post')) }}

                @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Numero de oficio</label>
                                <input type="number" enctype="multipart/form-data" class="form-control" name="numero_oficio">
                            </div>
                            <div class="form-group">
                                <label>Fecha de oficio</label>
                                <input size="16" type="text" class="form-control" id="datetime" name="fecha_oficio" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 subir-archivos flex flex-column">
                            <div class="form-group">
                                <label>Subir archivos (has clic en el boton)</label>
                                <div class="input-group">
                            <span class="input-group-btn">
                                    <!-- image-preview-input -->
                                    <div class="btn btn-default carga-archivo-input">
                                        <span class="carga-archivo-input-title">Constancia nombramiento</span>
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
                                        <span class="carga-archivo-input-title">Carta bancaria</span>
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
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection


