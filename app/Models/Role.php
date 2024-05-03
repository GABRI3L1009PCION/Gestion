<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;  // Asegúrate de añadir esta línea

class Role extends Model
{
    protected $fillable = ['nombre'];  // Si tienes atributos asignables masivamente

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'role_usuario');
    }
}
