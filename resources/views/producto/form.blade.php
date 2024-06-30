<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $producto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $producto?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $producto?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stock" class="form-label">{{ __('Stock') }}</label>
            <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $producto?->stock) }}" id="stock" placeholder="Stock">
            {!! $errors->first('stock', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="marca" class="form-label">{{ __('Marca') }}</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca', $producto?->marca) }}" id="marca" placeholder="Marca">
            {!! $errors->first('marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categoria_id" class="form-label">Categoria</label>
            <!-- <input type="text" name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror" value="{{ old('categoria_id', $producto?->categoria_id) }}" id="categoria_id" placeholder="Categoria Id"> -->
            <select name="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror" id="categoria_id">
                <option value="">Seleccion</option>
                @foreach($categorias as $categoria)
			    <option value="{{$categoria->id}}">{{$categoria-> name}}</option>
			    @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" value="{{ old('imagen', $producto?->imagen) }}" id="imagen" placeholder="Imagen">
            {!! $errors->first('imagen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <small class="text-muted">Archivo permitidos: png, jpg, jpeg</small>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especificacion" class="form-label">{{ __('Especificacion') }}</label>
            <input type="text" name="especificacion" class="form-control @error('especificacion') is-invalid @enderror" value="{{ old('especificacion', $producto?->especificacion) }}" id="especificacion" placeholder="Especificacion">
            {!! $errors->first('especificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

