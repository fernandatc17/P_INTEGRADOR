<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comprobante
 *
 * @property $id
 * @property $venta_id
 * @property $tipo
 * @property $fecha_emision
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comprobante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['venta_id', 'tipo', 'fecha_emision', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venta()
    {
        return $this->belongsTo(\App\Models\Venta::class, 'venta_id', 'id');
    }
    
}
