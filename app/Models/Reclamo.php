<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reclamo
 *
 * @property $id
 * @property $tipo
 * @property $fecha_reclamo
 * @property $descripcion
 * @property $venta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reclamo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tipo', 'fecha_reclamo', 'descripcion', 'venta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venta()
    {
        return $this->belongsTo(\App\Models\Venta::class, 'venta_id', 'id');
    }
    
}
