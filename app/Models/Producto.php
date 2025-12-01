<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'es_activo' // 0 y 1 -> admin
    ];
}
