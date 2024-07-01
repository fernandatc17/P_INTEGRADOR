@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Contacto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                

                <div class="card card-default">
                    
                    <div class="card-header">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success m-4">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <br>
                    </div>
                    
                    
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('contactos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contacto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
