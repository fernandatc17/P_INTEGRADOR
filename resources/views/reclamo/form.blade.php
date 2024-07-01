<!-- 

<head>
    <style>
        .form-card {
            --primary: #EB1616;
            --secondary: #191C24;
            --light: #6C7293;
            --dark: #000000;

            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%; /* Ajustamos el ancho del formulario */
            margin: 0 auto; /* Centramos el formulario horizontalmente */
            padding: 20px;
        }

        .form-card .card-header {
            background-color: var(--primary);
            color: white;
            font-weight: bold;
            border-bottom: 2px solid var(--dark);
        }

        .form-card .card-body {
            background-color: var(--secondary);
        }

        .form-card .form-label {
            color: white;
            font-weight: bold;
        }

        .form-card .form-control {
            background-color: var(--dark);
            color: white;
            border: 1px solid var(--light);
        }

        .form-card .form-control:focus {
            background-color: var(--dark);
            color: white;
            border: 1px solid var(--primary);
        }

        .form-card .btn-primary {
            background-color: var(--dark);
            border-color: var(--dark);
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .form-card .btn-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .form-card .invalid-feedback {
            color: #e3342f;
        }
    </style>
</head>

<body>
    <div class="centered-form">
        <div class="form-container">
            <div class="card form-card">
                <div class="card-header">
                    Create New Reclamo
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('reclamos.store') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
                            <select name="tipo" class="form-control @error('tipo') is-invalid @enderror" id="tipo">
                                <option value="producto_dañado">Producto dañado</option>
                                <option value="defectos_de_producto">Defectos de producto</option>
                                <option value="problemas_de_facturacion">Problemas de facturación</option>
                                <option value="retrasos_en_la_entrega">Retrasos en la entrega</option>
                            </select>
                            @error('tipo')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="fecha_reclamo" class="form-label">{{ __('Fecha Reclamo') }}</label>
                            <input type="text" name="fecha_reclamo" class="form-control @error('fecha_reclamo') is-invalid @enderror"
                                value="{{ old('fecha_reclamo', $reclamo?->fecha_reclamo) }}" id="fecha_reclamo" placeholder="Fecha Reclamo">
                            @error('fecha_reclamo')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror"
                                value="{{ old('descripcion', $reclamo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
                            @error('descripcion')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="venta_id" class="form-label">{{ __('Venta Id') }}</label>
                            <input type="text" name="venta_id" class="form-control @error('venta_id') is-invalid @enderror"
                                value="{{ old('venta_id', $reclamo?->venta_id) }}" id="venta_id" placeholder="Venta Id">
                            @error('venta_id')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->


 <div class="centered-form">
        <div class="row padding-1 p-1">
            <div class="col-md-12">
                <div class="form-group mb-2 mb20">
                    <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
                    <select name="tipo" class="form-control @error('tipo') is-invalid @enderror" id="tipo">
                        <option value="producto_dañado">Producto dañado</option>
                        <option value="defectos_de_producto">Defectos de producto</option>
                        <option value="problemas_de_facturacion">Problemas de facturación</option>
                        <option value="retrasos_en_la_entrega">Retrasos en la entrega</option>
                    </select>
                    {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="fecha_reclamo" class="form-label">{{ __('Fecha Reclamo') }}</label>
                    <input type="date" name="fecha_reclamo" class="form-control @error('fecha_reclamo') is-invalid @enderror" value="{{ old('fecha_reclamo', $reclamo?->fecha_reclamo) }}" id="fecha_reclamo" placeholder="Fecha Reclamo">
                    {!! $errors->first('fecha_reclamo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                    <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $reclamo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
                    {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="venta_id" class="form-label">{{ __('Venta Id') }}</label>
                    <input type="text" name="venta_id" class="form-control @error('venta_id') is-invalid @enderror" value="{{ old('venta_id', $reclamo?->venta_id) }}" id="venta_id" placeholder="Venta Id">
                    {!! $errors->first('venta_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-12 mt20 mt-2">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>
        </div>
    </div>
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
   
        }
    </style>