<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $productos = Producto::paginate();
        return view('producto/index', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }


    public function index2(Request $request): View
    {
        $productos = Producto::all() ;
        return view('clientes/index', compact('productos'));
    }

    public function filtrar(Request $request)
    {
        // Obtener los parámetros de búsqueda
        $categoriaId = $request->input('categoria_id');
        $search = $request->input('search');

        // Consultar los productos según los filtros
        $query = Producto::query();

        if ($categoriaId) {
            $query->where('categoria_id', $categoriaId);
        }

        if ($search) {
            $query->where('nombre', 'LIKE', "%{$search}%");
        }

        $productos = $query->get();

        // Retornar la vista con los productos filtrados
        return view('clientes/filtro', compact('productos'));
    }


    public function somos(Request $request): View
    {
        return view('clientes/somos');
    }

    public function carrito(Request $request): View
    {
        return view('clientes/carrito');
    }

    
    public function detalle($id): View
    {
        $producto = Producto::find($id);
        return view('clientes.detalle', compact('producto'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $producto = new Producto();
        $categorias = Categoria::all() ;

        return view('producto.create', compact('producto','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request): RedirectResponse
    {
    // Validamos y guardamos los datos del producto
        $validated = $request->validated();

        // Procesamos la imagen
        if ($request->hasFile('imagen')) {
            $prefijo = 'producto_';
            $actual = date("dmYHis"); // 29062024124023
            $extension = $request->imagen->extension();
            $nombreArchivo = $prefijo . $actual . '.' . $extension; // producto_29062024124023.jpg
            $request->imagen->storeAs('productos', $nombreArchivo); // Guardamos la imagen en storage/app/public/productos
            $validated['imagen'] = $nombreArchivo; // Guardamos el nombre del archivo en el array validado
        }

        // Creamos el producto con los datos validados
        Producto::create($validated);

        return Redirect::route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    // public function store(ProductoRequest $request): RedirectResponse
    // {
    //     Producto::create($request->validated());

    //     return Redirect::route('productos.index')
    //         ->with('success', 'Producto created successfully.');
    // }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(StoreProductoRequest $request, Producto $producto): RedirectResponse
    // {
    //     $producto->update($request->validated());

    //     return Redirect::route('productos.index')
    //         ->with('success', 'Producto updated successfully');
    // }

    public function update(StoreProductoRequest $request, Producto $producto): RedirectResponse
    {
        // Validar los datos del request
        $validatedData = $request->validated();

        // Si se envió una nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen actual si existe
            if ($producto->imagen) {
                $rutaImagenActual = 'productos/' . $producto->imagen;
                Storage::delete($rutaImagenActual);
            }

            // Procesar y guardar la nueva imagen
            $prefijo = 'producto_';
            $actual = date("dmYHis");
            $extension = $request->imagen->extension();
            $nombreArchivo = $prefijo . $actual . '.' . $extension;
            $request->imagen->storeAs('productos', $nombreArchivo);
            $validatedData['imagen'] = $nombreArchivo; // Actualizar el nombre de la imagen en los datos validados
        }

        // Actualizar el producto con los datos validados
        $producto->update($validatedData);

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }


    public function destroy($id): RedirectResponse
    {
        $producto = Producto::find($id);
        // Obtén la ruta de la imagen
        $rutaImagen = 'productos/' . $producto->imagen;    
        // Elimina la imagen del almacenamiento
        Storage::delete($rutaImagen);   
        // Elimina el producto de la base de datos
        $producto->delete();
        return Redirect::route('productos.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}
