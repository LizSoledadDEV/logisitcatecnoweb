<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'direccion', 'ciudad', 'pais', 'telefono', 'correo', 'empresa'
    ];

    public function cargas(){
        return $this->hasMany(Carga::class);
    }
}
