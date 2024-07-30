<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_glp', 'origen', 'destino', 'fecha_actual', 'fecha_salida', 'fecha_recogida', 'tasa_transporte', 'descarga', 'reembolso', 'detencion', 'escala', 'otros_cargos', 'tarifa_total', 'peso', 'volumen', 'cliente_id', 'cisterna_id', 'user_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function cisterna(){
        return $this->belongsTo(Cisterna::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
