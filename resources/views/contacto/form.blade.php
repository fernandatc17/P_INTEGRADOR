<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
        <div class="container">
            <center>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Formulario de Contacto</h1>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- CONTENIDO -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/enviar_formulario.php" method="post">
                    <div class="row padding-1 p-1">
                        <div class="col-md-12">
                            <div class="form-group mb-2 mb20">
                                <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $contacto?->nombre) }}" id="nombre" placeholder="Nombre">
                                {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $contacto?->email) }}" id="email" placeholder="Email">
                                {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <label for="asunto" class="form-label">{{ __('Asunto') }}</label>
                                <input type="text" name="asunto" class="form-control @error('asunto') is-invalid @enderror" value="{{ old('asunto', $contacto?->asunto) }}" id="asunto" placeholder="Asunto">
                                {!! $errors->first('asunto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <label for="mensaje" class="form-label">{{ __('Mensaje') }}</label>
                                <input type="text" name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" value="{{ old('mensaje', $contacto?->mensaje) }}" id="mensaje" placeholder="Mensaje">
                                {!! $errors->first('mensaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                        <div class="col-md-12 mt20 mt-2">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO -->