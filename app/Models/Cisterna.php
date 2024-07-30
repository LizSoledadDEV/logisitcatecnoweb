<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cisterna extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca', 'modelo', 'longitud', 'pais_origen', 'placa', 'material', 'nro_chasis', 'capacidad', 'tipo_carga', 'fecha_fabricacion', 'altura', 'anchura', 'peso_vacio', 'peso_maximo', 'tipo_combustible', 'fecha_adquisicion', 'fecha_desactivacion', 'nro_ejes', 'color'
    ];

    public function cargas(){
        return $this->hasMany(Carga::class);
    }
}
