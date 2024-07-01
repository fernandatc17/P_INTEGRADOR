<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    public function index()
    {
        // $cart = session()->get('cart', []);
        // $productos = Producto::find(array_keys($cart));
        $productos = Producto::whereIn('id', array_keys(session('cart', [])))->get();
        $cart = session('cart', []);
    
        $total = 0;
        foreach ($productos as $producto) {
            $total += $producto->precio * $cart[$producto->id];
        }
    
        return view('cart.index', compact('productos', 'cart', 'total'));
    }

    public function add(Request $request, $id)
    {
        $product = Producto::find($id);
        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart', []);
        $cart[$id] = ($cart[$id] ?? 0) + 1;
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Product removed successfully!');
    }

    public function getCartSummary()
    {
        $cart = session('cart', []);
        $productos = Producto::whereIn('id', array_keys($cart))->get();

        $totalItems = 0;
        $subtotal = 0;
        foreach ($productos as $producto) {
            $quantity = $cart[$producto->id];
            $totalItems += $quantity;
            $subtotal += $producto->precio * $quantity;
        }

        return response()->json([
            'totalItems' => $totalItems,
            'subtotal' => $subtotal,
            'productos' => $productos,
            'cart' => $cart
        ]);
    }



    


}
