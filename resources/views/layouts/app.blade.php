<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TechNet Solutions</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>
 		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
	</head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> fernanda@technet.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						
						@guest
							<li><a href="{{ route('register')}}"><i class="fa fa-user-o"></i> Registrate </a></li>
							<li><a href="{{ route('login')}}"><i class="fa fa-user-o"></i> Iniciar Sesion </a></li>
						@endguest

						@auth
							<li style="display: inline;">
								<a href="#"><i class="fa fa-user-o"></i>Mi Cuenta</a> &nbsp;&nbsp;&nbsp;&nbsp;
								<form action="{{ route('logout')}}" method="POST" style="display: inline;" >
									@csrf
									<button class="Btn1" style="display: inline; vertical-align: middle;" >
										<div class="sign" style="display: inline;" >
											<svg viewBox="0 0 512 512" >
												<path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
											</svg>
										</div>
										<div class="text" style="display: inline;" >Cerrar Sesión</div>
									</button>
								</form>
							</li>
						@endauth
						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo">
									<img src="{{asset('assets/img/logo.png')}}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{ route('productos.filtrar') }}" method="GET">
									<select class="input-select" name="categoria_id">
										<option value="">Categorias</option>
										<option value="1">Laptops</option>
										<option value="2">Componentes</option>
										<option value="3">Impresoras</option>
										<option value="4">Periféricos</option>
										<option value="5">Store</option>
										<option value="6">Redes</option>
									</select>
									<input class="input" placeholder="Buscar ....">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Tu Carrito</span>
										<div class="qty" id="cart-qty">0</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list" id="cart-list">
											<!-- Productos del carrito se cargarán aquí -->
										</div>
										<div class="cart-summary" id="cart-summary">
											<small id="cart-items-count">0 Item(s) seleccionados</small>
											<h5>SUBTOTAL: <span id="cart-subtotal">S/.0.00</span></h5>
										</div>
										<div class="cart-btns">
											<a href="{{ route('cart.index') }}">Ver Carrito</a>
											<a href="{{ route('cart.index') }}">Verificar  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="/">Inicio</a></li>
						<li ><a href="/clientesp">Productos</a></li>
						<li><a href="/reclamos/create">Reclamos</a></li>
						<li><a href="/clientes/somos">Quienes  Somos</a></li>
						@auth
							@if(auth()->user()->rol == 1)
							<li><a href="/admin">Administrador</a></li>
							@endif
						@endauth
						<li><a href="/contactos/create">Contactanos</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
	

<!-- CONTENIDO -->

@yield('content')
<!-- FIN DE CONTENIDO -->
 
    
		<!-- NEWSLETTER -->
		<div  class="section" id="newsletter" >
			<!-- container -->
			<div class="container">
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<br><br><br>
							<p>Regístrate para el <strong>BOLETIN INFORMATIVO</strong></p>
							<form>
								<input class="input" type="email" placeholder="Ingresa tu email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://x.com/es/home"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Quienes Somos</h3>
								<p>Somos una empresa vanguardista que brinda productos tecnológicos</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="/clientesp">Las mejores ofertas</a></li>
									<li><a href="/clientesp">Laptops</a></li>
									<li><a href="/clientesp">Smartphones</a></li>
									<li><a href="/clientesp">Cámaras</a></li>
									<li><a href="/clientesp">Accesorios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="/clientes/somos">Quienes Somos</a></li>
									<li><a href="#">Contacta con nosotros</a></li>
									<li><a href="#">política de privacidad</a></li>
									<li><a href="#">Pedidos y Devoluciones</a></li>
									<li><a href="https://www.macroplastics.com/images/docs/Terminos-y-Condiciones-de-Venta.pdf">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicio</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="/cart">Ver carrito</a></li>
									<li><a href="/cart">Lista de deseos</a></li>
									<li><a href="/cart">Seguimiento de mi pedido</a></li>
									<li><a href="/cart">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>

						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/slick.min.js')}}"></script>
		<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
		$(document).ready(function() {
			function updateCartDropdown() {
				$.ajax({
					url: "{{ route('cart.summary') }}",
					method: 'GET',
					success: function(data) {
						$('#cart-qty').text(data.totalItems);
						$('#cart-items-count').text(data.totalItems + ' Item(s) selected');
						$('#cart-subtotal').text('S/.' + data.subtotal.toFixed(2));

						let cartListHtml = '';
						data.productos.forEach(function(producto) {
							let quantity = data.cart[producto.id];
							cartListHtml += `
								<div class="product-widget">
									<div class="product-img">
										<img src="#" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="#">${producto.nombre}</a></h3>
										<h4 class="product-price"><span class="qty">${quantity}x</span>S/.${(producto.precio * quantity).toFixed(2)}</h4>
									</div>
									<button class="delete" onclick="removeFromCart(${producto.id})"><i class="fa fa-close"></i></button>
								</div>
							`;
						});
						$('#cart-list').html(cartListHtml);
					}
				});
			}

			updateCartDropdown();

			// Puedes llamar a updateCartDropdown() cada vez que se actualice el carrito
		});

			function removeFromCart(productId) {
				$.ajax({
					url: "{{ route('cart.remove', '') }}/" + productId,
					method: 'POST',
					data: {
						_token: "{{ csrf_token() }}"
					},
					success: function() {
						updateCartDropdown();
					}
				});
			}
		</script>


	</body>
</html>