@extends('layouts.app')

@section('template_title')
    Productos
@endsection

@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<center><h3 class="breadcrumb-header">Catálogo de Productos</h3></center>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->


@forelse($productos as $producto)

<div class="col-md-3 col-xs-6">
    <div class="product">
        <div class="product-img ">
            <center><img src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="card-img-top img-fluid" style="max-width: 300px;"></center>
        </div>
        <div class="product-body">
            <p class="card-text">{{ $producto->stock }}</p>
            <h3 class="product-name"><a href="/clientes/detalle/{{ $producto->id }}" class="text-decoration-none">{{ $producto->nombre }}</a></h3>
            <h4 class="product-price">${{ $producto->precio }}</h4>
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="product-btns">
				<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Añadir a deseados</span></button>
				<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
				<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
			</div>
        </div>
            
        <div class="add-to-cart">
            <form action="{{ route('cart.add', $producto->id) }}" method="POST">
				@csrf
                <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
            </form>
        </div>
     
    </div>

</div>
@empty
    <p>No se encontraron productos para los filtros seleccionados.</p>

@endforelse


@endsection