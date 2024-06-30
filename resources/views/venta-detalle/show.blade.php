@extends('layouts.app')

@section('template_title')
    {{ $ventaDetalle->name ?? __('Show') . " " . __('Venta Detalle') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('venta-detalles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Producto Id:</strong>
                                    {{ $ventaDetalle->producto_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Venta Id:</strong>
                                    {{ $ventaDetalle->venta_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $ventaDetalle->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $ventaDetalle->cantidad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
