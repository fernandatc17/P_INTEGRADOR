@extends('layouts.app')

@section('template_title')
    {{ $comprobante->name ?? __('Show') . " " . __('Comprobante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comprobante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('comprobantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Venta Id:</strong>
                                    {{ $comprobante->venta_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $comprobante->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Emision:</strong>
                                    {{ $comprobante->fecha_emision }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $comprobante->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
