@extends('layouts.app')

@section('content')

    <!-- CONTENIDO -->
    <div class="container">
        <h1>Formulario de Reclamos</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/clientesp/reclamos" method="post">
                    <div class="form-group">
                        <label for="codigo_venta">Código de Venta:</label>
                        <input type="text" class="form-control" id="codigo_venta" name="codigo_venta" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_reclamo">Tipo de Reclamo:</label>
                        <select class="form-control" id="tipo_reclamo" name="tipo_reclamo" required>
                            <option value="">Selecciona el tipo de reclamo</option>
                            <option value="Producto dañado">Producto dañado</option>
                            <option value="Defectos de producto">Defectos de producto</option>
                            <option value="Problemas de facturación">Problemas de facturación</option>
                            <option value="Retrasos en la entrega">Retrasos en la entrega</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Reclamo</button>
                </form>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO -->

    
@endsection