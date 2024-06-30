<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentaDetalle
 *
 * @property $id
 * @property $producto_id
 * @property $venta_id
 * @property $precio
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VentaDetalle extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['producto_id', 'venta_id', 'precio', 'cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venta()
    {
        return $this->belongsTo(\App\Models\Venta::class, 'venta_id', 'id');
    }
    
}
