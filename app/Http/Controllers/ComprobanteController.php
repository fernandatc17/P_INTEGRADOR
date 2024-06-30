<?php

namespace App\Http\Controllers;

use App\Models\Comprobante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ComprobanteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $comprobantes = Comprobante::paginate();

        return view('comprobante.index', compact('comprobantes'))
            ->with('i', ($request->input('page', 1) - 1) * $comprobantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $comprobante = new Comprobante();

        return view('comprobante.create', compact('comprobante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComprobanteRequest $request): RedirectResponse
    {
        Comprobante::create($request->validated());

        return Redirect::route('comprobantes.index')
            ->with('success', 'Comprobante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $comprobante = Comprobante::find($id);

        return view('comprobante.show', compact('comprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $comprobante = Comprobante::find($id);

        return view('comprobante.edit', compact('comprobante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComprobanteRequest $request, Comprobante $comprobante): RedirectResponse
    {
        $comprobante->update($request->validated());

        return Redirect::route('comprobantes.index')
            ->with('success', 'Comprobante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Comprobante::find($id)->delete();

        return Redirect::route('comprobantes.index')
            ->with('success', 'Comprobante deleted successfully');
    }
}
