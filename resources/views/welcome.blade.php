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
								<a href="/clientesp" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="/clientesp" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
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
								<h3>Cámaras<br>Recopilación</h3>
								<a href="/clientesp" class="cta-btn">Compra ahora<i class="fa fa-arrow-circle-right"></i></a>
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
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#">Smartphones</a></li>
									<li><a data-toggle="tab" href="#">Cameras</a></li>
									<li><a data-toggle="tab" href="#">Accessoriesx</a></li>
								</ul>
							</div> -->
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
												<h4 class="product-price">S/1980.00 <del class="product-old-price">S/.2000.00</del></h4>
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
												<h4 class="product-price">S/.680.00 <del class="product-old-price">S/.800.00</del></h4>
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
												<h4 class="product-price">S/.3980.00 <del class="product-old-price">S/.4000.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/canon_pixma.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Impresoras</p>
												<h3 class="product-name"><a href="#">Canon Pixma G3170 </a></h3>
												<h4 class="product-price">S/.680.00 <del class="product-old-price">S/.700.00</del></h4>
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
							<a class="primary-btn cta-btn" href="/clientesp">Compra ahora</a>
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
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div> -->
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
												<img src="{{asset('assets/img/Laptop_lenovo_thinkPad_12.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Laptops</p>
												<h3 class="product-name"><a href="#">Laptop lenovo thinkPad 12</a></h3>
												<h4 class="product-price">S/.1870.00 <del class="product-old-price">S/.2000.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/Epson_Expression_Premium_XP.png')}}" alt="">
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Impresoras</p>
												<h3 class="product-name"><a href="#">Epson Expression Premium XP</a></h3>
												<h4 class="product-price">S/.250.00 <del class="product-old-price">S/.300.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/Lenovo_Thinkpad_x1.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Laptops</p>
												<h3 class="product-name"><a href="#">Lenovo Thinkpad x1</a></h3>
												<h4 class="product-price">S/.1680.00 <del class="product-old-price">S/.2000.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/Impresora_Inalámbrica_Epson.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Impresoras</p>
												<h3 class="product-name"><a href="#">Impresora Inalámbrica Epson</a></h3>
												<h4 class="product-price">S/.450.00 <del class="product-old-price">S/.500.00</del></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('assets/img/Macbook_pro_12.png')}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptops</p>
												<h3 class="product-name"><a href="#">Macbook pro 12</a></h3>
												<h4 class="product-price">S/.4200.00 <del class="product-old-price">S/.5000.00</del></h4>
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
										<img src="{{asset('assets/img/Laptop_Dell_XPS.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptops</p>
										<h3 class="product-name"><a href="#">Laptop Dell XPS</a></h3>
										<h4 class="product-price">S/.1200.00<del class="product-old-price">S/.1250.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Procesador_Intel_i9-10900K.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Componentes</p>
										<h3 class="product-name"><a href="#">Procesador Intel i9-10900K</a></h3>
										<h4 class="product-price">S/.500.00 <del class="product-old-price">S/.550.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Impresora_HP_LaserJet_Pro.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Impresoras</p>
										<h3 class="product-name"><a href="#">Impresora HP LaserJet Pro</a></h3>
										<h4 class="product-price">S/.250.00 <del class="product-old-price">S/.300.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Teclado_Mecánico_Corsair_K95.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Periféricos</p>
										<h3 class="product-name"><a href="#">Teclado Mecánico Corsair K95</a></h3>
										<h4 class="product-price">S/.360.00 <del class="product-old-price">S/.400.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Disco_Duro_Externo_Seagate_2TB.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Store</p>
										<h3 class="product-name"><a href="#">Disco Duro Externo Seagate 2TB</a></h3>
										<h4 class="product-price">S/.430.00 <del class="product-old-price">S/.500.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Router_TP-Link_Archer_AX6000.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Redes</p>
										<h3 class="product-name"><a href="#">Router TP-Link Archer AX6000</a></h3>
										<h4 class="product-price">S/.800.00 <del class="product-old-price">S/.850.00</del></h4>
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
										<img src="{{asset('assets/img/MacBook_Air_M1.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptops</p>
										<h3 class="product-name"><a href="#">MacBook Air M1</a></h3>
										<h4 class="product-price">S/.4890.00 <del class="product-old-price">S/.5000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Procesador_AMD_Ryzen_9_5900X.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Componentes</p>
										<h3 class="product-name"><a href="#">Procesador AMD Ryzen 9 5900X</a></h3>
										<h4 class="product-price">S/.640.00 <del class="product-old-price">S/.700.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Impresora_Epson_EcoTank_ET-2760.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Impresoras</p>
										<h3 class="product-name"><a href="#">Impresora Epson EcoTank ET-2760</a></h3>
										<h4 class="product-price">S/.480.00 <del class="product-old-price">S/.540.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Mouse_Logitech_G502_Hero.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Periféricos</p>
										<h3 class="product-name"><a href="#">Mouse Logitech G502 Hero</a></h3>
										<h4 class="product-price">S/.180.00 <del class="product-old-price">S/.290.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/SSD_Samsung_970_EVO_1TB.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Store</p>
										<h3 class="product-name"><a href="#">SSD Samsung 970 EVO 1TB</a></h3>
										<h4 class="product-price">S/.420.00 <del class="product-old-price">S/.460.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/Router_ASUS_RT-AX89X.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Redes</p>
										<h3 class="product-name"><a href="#">Router ASUS RT-AX89X</a></h3>
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
										<img src="{{asset('assets/img/HP_Spectre_x360.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Laptops</p>
										<h3 class="product-name"><a href="#">HP Spectre x360</a></h3>
										<h4 class="product-price">S/.1299.00 <del class="product-old-price">S/.4009.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/nvidia_rtx_3080.png')}}"p alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Componentes</p>
										<h3 class="product-name"><a href="#">Tarjeta Gráfica NVIDIA RTX 3080</a></h3>
										<h4 class="product-price">S/.7800.00 <del class="product-old-price">S/.9000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/razer_blackwidow.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Impresoras</p>
										<h3 class="product-name"><a href="#">Impresora Canon PIXMA TS8320</a></h3>
										<h4 class="product-price">S/.980.00 <del class="product-old-price">S/.990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/razer_blackwidow.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Periféricos</p>
										<h3 class="product-name"><a href="#">Teclado Razer BlackWidow Elite</a></h3>
										<h4 class="product-price">S/.1680.00 <del class="product-old-price">S/.2000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/western_digital_4tb.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Store</p>
										<h3 class="product-name"><a href="#">Disco Duro Externo WD Elements 4TB</a></h3>
										<h4 class="product-price">S/.260.00 <del class="product-old-price">S/.300.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('assets/img/netgear_nighthawk.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Redes</p>
										<h3 class="product-name"><a href="#">Router NETGEAR Nighthawk X10</a></h3>
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