<?php

namespace App\Http\Controllers;

use App\Models\VentaDetalle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaDetalleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VentaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ventaDetalles = VentaDetalle::paginate();

        return view('venta-detalle.index', compact('ventaDetalles'))
            ->with('i', ($request->input('page', 1) - 1) * $ventaDetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ventaDetalle = new VentaDetalle();

        return view('venta-detalle.create', compact('ventaDetalle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaDetalleRequest $request): RedirectResponse
    {
        VentaDetalle::create($request->validated());

        return Redirect::route('venta_detalles.index')
            ->with('success', 'VentaDetalle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ventaDetalle = VentaDetalle::find($id);

        return view('venta-detalle.show', compact('ventaDetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ventaDetalle = VentaDetalle::find($id);

        return view('venta-detalle.edit', compact('ventaDetalle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaDetalleRequest $request, VentaDetalle $ventaDetalle): RedirectResponse
    {
        $ventaDetalle->update($request->validated());

        return Redirect::route('venta_detalles.index')
            ->with('success', 'VentaDetalle updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        VentaDetalle::find($id)->delete();

        return Redirect::route('venta_detalles.index')
            ->with('success', 'VentaDetalle deleted successfully');
    }
}
