<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $stock
 * @property $marca
 * @property $categoria_id
 * @property $imagen
 * @property $especificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property ProductoMovimiento[] $productoMovimientos
 * @property VentaDetalle[] $ventaDetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'marca', 'categoria_id', 'imagen', 'especificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productoMovimientos()
    {
        return $this->hasMany(\App\Models\ProductoMovimiento::class, 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventaDetalles()
    {
        return $this->hasMany(\App\Models\VentaDetalle::class, 'id', 'producto_id');
    }
    
}
