@extends('layouts.app')

@section('content')
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop01.png')}}"alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Recopilación</h3>
								<a href="#" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop03.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Recopilación</h3>
								<a href="#" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop02.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Recopilación</h3>
								<a href="#" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos Productos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#">Smartphones</a></li>
									<li><a data-toggle="tab" href="#">Cameras</a></li>
									<li><a data-toggle="tab" href="#">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">


										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product01.png')}}" alt="">
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Laptops</p>
												<h3 class="product-name"><a href="#">Laptop Hp Ryzen 5 4500u</a></h3>
												<h4 class="product-price">S/1980.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product02.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Perifericos</p>
												<h3 class="product-name"><a href="#">Auriculares Inalámbricos WH-CH520
												</a></h3>
												<h4 class="product-price">S/.680.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product03.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptops</p>
												<h3 class="product-name"><a href="#">Macbook 14</a></h3>
												<h4 class="product-price">S/.3980.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product04.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Impresoras</p>
												<h3 class="product-name"><a href="#">Canon Pixma G3170 </a></h3>
												<h4 class="product-price">S/.680.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Dias</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Seg</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Gran oferta esta semanak</h2>
							<p>Nueva colección Hasta 25% de descuento</p>
							<a class="primary-btn cta-btn" href="#">Compra ahora</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Más vendidos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product06.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoría</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">S/.1.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product07.png')}}" alt="">
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoría</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">S/.2.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product08.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoría</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">S/.3.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product09.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoría</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">S/.4.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/product01.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoría</p>
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price">S/.5.00 <del class="product-old-price">S/.990.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product02.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product06.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product02.png')}}"p alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/product06.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoría</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


@endsection