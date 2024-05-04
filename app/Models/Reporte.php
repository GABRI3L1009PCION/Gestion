<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';

    protected $fillable = [
        'tipo_reporte', 'fecha', 'datos'
    ];

    protected $dates = ['fecha'];  // Asegura que 'fecha' es tratada como una instancia de Carbon

    protected $casts = [
        'datos' => 'array',
    ];
}
