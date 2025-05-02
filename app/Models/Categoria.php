<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'tipo',
    ];

    /**
     * Get the movimientos for the categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }

    /**
     * Get the presupuestos for the categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function presupuestos()
    {
        return $this->hasMany(Presupuesto::class);
    }

}
 