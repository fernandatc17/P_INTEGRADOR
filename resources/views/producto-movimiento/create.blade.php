@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Producto Movimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <br>
                        <center><h3 style="color:red" class="card-title">Registrar Movimiento</h3></center>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('producto-movimientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('producto-movimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
