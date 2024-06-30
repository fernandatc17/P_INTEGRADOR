<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class AdminController extends Controller
{
    public function index(Request $request): View
    {
        // $productos = Producto::paginate();
        $productos = Producto::all() ;
        return view('clientes/index', compact('productos'));
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }
}
