<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'estado', 'lider_id'
    ];

    public function lider()
    {
        return $this->belongsTo(User::class, 'lider_id');
    }
}
