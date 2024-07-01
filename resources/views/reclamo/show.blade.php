@extends('layouts.app')

@section('template_title')
    {{ $reclamo->name ?? __('Show') . " " . __('Reclamo') }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div >
                            <center><h3 class="card-title">Show Reclamo</h3></center>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reclamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $reclamo->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Reclamo:</strong>
                                    {{ $reclamo->fecha_reclamo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $reclamo->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Venta Id:</strong>
                                    {{ $reclamo->venta_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
