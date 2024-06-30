<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $cliente_id
 * @property $fecha_venta
 * @property $monto
 * @property $metodo_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Comprobante[] $comprobantes
 * @property Reclamo[] $reclamos
 * @property VentaDetalle[] $ventaDetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cliente_id', 'fecha_venta', 'monto', 'metodo_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comprobantes()
    {
        return $this->hasMany(\App\Models\Comprobante::class, 'id', 'venta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reclamos()
    {
        return $this->hasMany(\App\Models\Reclamo::class, 'id', 'venta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventaDetalles()
    {
        return $this->hasMany(\App\Models\VentaDetalle::class, 'id', 'venta_id');
    }
    
}
