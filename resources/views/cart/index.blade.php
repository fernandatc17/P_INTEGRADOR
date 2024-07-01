<!-- resources/views/cart/index.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $cart[$producto->id] }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $producto->id) }}" method="POST">
                            @csrf
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> -->


@extends('layouts.app')

@section('content')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <br><br>
        <!-- row -->
        <div class="row">

            <div class="col-md-7">
                <h1>Carrito de compra</h1>
                <br><br>
                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $cart[$producto->id] }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $producto->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <br><br><br>
                        <h3 class="title">Datos del cliente</h3>
                    </div>
                
                    <div class="form-group">
                        <input class="input" type="text" name="first-name" placeholder="First Name">
                    </div>
                
                    <div class="form-group">
                        <input class="input" type="email" name="email" placeholder="Email">
                    </div>
                
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" placeholder="Telephone">
                    </div>
                    <div class="form-group">
            
                        <select class="input" name="tipo_documento" id="tipo_documento">
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CARNET DE EXTRANJERIA">Carnet de Extranjería</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="numero_doc" placeholder="Numero Documento">
                    </div>
                
                    
                    <div class="form-group">
                        <div class="input-checkbox">
                            <input type="checkbox" id="create-account">
                            <label for="create-account">
                                <span></span>
                                ¿Crear una cuenta?
                            </label>
                            <div class="caption">
                                <p>Introduce tu contraseña para tu cuenta</p>
                                <input class="input" type="password" name="password" placeholder="Ingresa tu Password">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Billing Details -->              
            </div>
            



            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Tu orden</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCTO</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        @foreach($productos as $producto)
                            <div class="order-col">
                                <div>{{ $cart[$producto->id] }}x {{ $producto->nombre }}</div>
                                <div>${{ $producto->precio * $cart[$producto->id] }}</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="order-col">
                        <div>Envio</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">${{ $total }}</strong></div>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1">
                        <label for="payment-1">
                            <span></span>
                            Transferencia bancaria directa
                        </label>
                        <div class="caption">
                            <p>Realiza tu pago directamente a nuestra cuenta bancaria. Por favor, usa tu número de pedido como referencia de pago. Tu pedido no será enviado hasta que los fondos se hayan recibido en nuestra cuenta.</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2">
                        <label for="payment-2">
                            <span></span>
                            Pago con cheque
                        </label>
                        <div class="caption">
                            <p>Puedes realizar tu pago mediante cheque. Por favor, asegúrate de que el cheque esté a nombre de nuestra empresa y envíalo a la dirección proporcionada. Tu pedido será procesado una vez que el cheque haya sido recibido y aprobado.</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3">
                        <label for="payment-3">
                            <span></span>
                            Sistema Paypal 
                        </label>
                        <div class="caption">
                            <p>Realiza tu pago de forma segura a través de PayPal. Puedes usar tu cuenta de PayPal o pagar con tarjeta de crédito o débito. Tu pedido se procesará de inmediato una vez que se complete el pago.</p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms">
                    <label for="terms">
                        <span></span>
                        He leído y acepto  <a href="https://www.macroplastics.com/images/docs/Terminos-y-Condiciones-de-Venta.pdf">los términos y condiciones</a>
                    </label>
                </div>
                <a href="#" class="primary-btn order-submit">Realizar Pedido</a>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection