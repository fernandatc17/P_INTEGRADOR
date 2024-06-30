@extends('layouts.app')

@section('template_title')
    Ventas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <a href="{{ route('categorias.index') }}"   data-placement="left">
                                  Categoria
                                </a>
                            </span>
                            <span id="card_title">
                                <a href="{{ route('productos.index') }}"   data-placement="left">
                                  Producto
                                </a>
                            </span>
                            <span id="card_title">
                                <a href="{{ route('producto-movimientos.index') }}"   data-placement="left">
                                  Movimientos
                                </a>
                            </span>
                            <span id="card_title">
                                <a href="{{ route('ventas.index') }}"   data-placement="left">
                                  Ventas
                                </a>
                            </span>
                            <span id="card_title">
                                <a href="{{ route('contactos.index') }}"   data-placement="left">
                                  Contactos
                                </a>
                            </span>
                            <span id="card_title">
                                <a href="{{ route('reclamos.index') }}"   data-placement="left">
                                  Reclamos
                                </a>
                            </span>

                            <div class="float-right">
                                <br>
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Cliente Id</th>
									<th >Fecha Venta</th>
									<th >Monto</th>
									<th >Metodo Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $venta->cliente_id }}</td>
										<td >{{ $venta->fecha_venta }}</td>
										<td >{{ $venta->monto }}</td>
										<td >{{ $venta->metodo_pago }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas.show', $venta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas.edit', $venta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ventas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
