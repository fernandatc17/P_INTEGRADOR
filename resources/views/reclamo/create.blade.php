@extends('layouts.app')
@section('template_title')
    {{ __('Create') }} Reclamo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <!-- <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Reclamo</span>
                    </div> -->
                    <!-- BREADCRUMB -->
                    <div id="breadcrumb" class="section">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3 class="breadcrumb-header">RECLAMOS</h3>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /container -->
                    </div>
                    <!-- /BREADCRUMB -->
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('reclamos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('reclamo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

