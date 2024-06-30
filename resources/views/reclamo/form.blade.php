<!-- <div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $reclamo?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_reclamo" class="form-label">{{ __('Fecha Reclamo') }}</label>
            <input type="text" name="fecha_reclamo" class="form-control @error('fecha_reclamo') is-invalid @enderror" value="{{ old('fecha_reclamo', $reclamo?->fecha_reclamo) }}" id="fecha_reclamo" placeholder="Fecha Reclamo">
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

 -->

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
                    <input type="text" name="fecha_reclamo" class="form-control @error('fecha_reclamo') is-invalid @enderror" value="{{ old('fecha_reclamo', $reclamo?->fecha_reclamo) }}" id="fecha_reclamo" placeholder="Fecha Reclamo">
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