<?php

namespace App\Http\Controllers;

use App\Models\ProductoMovimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoMovimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductoMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $productoMovimientos = ProductoMovimiento::paginate();

        return view('producto-movimiento.index', compact('productoMovimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $productoMovimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productoMovimiento = new ProductoMovimiento();

        return view('producto-movimiento.create', compact('productoMovimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoMovimientoRequest $request): RedirectResponse
    {
        ProductoMovimiento::create($request->validated());

        return Redirect::route('producto-movimientos.index')
            ->with('success', 'ProductoMovimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $productoMovimiento = ProductoMovimiento::find($id);

        return view('producto-movimiento.show', compact('productoMovimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $productoMovimiento = ProductoMovimiento::find($id);

        return view('producto-movimiento.edit', compact('productoMovimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoMovimientoRequest $request, ProductoMovimiento $productoMovimiento): RedirectResponse
    {
        $productoMovimiento->update($request->validated());

        return Redirect::route('producto-movimientos.index')
            ->with('success', 'ProductoMovimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ProductoMovimiento::find($id)->delete();

        return Redirect::route('producto-movimientos.index')
            ->with('success', 'ProductoMovimiento deleted successfully');
    }
}
