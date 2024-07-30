<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cargas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_glp');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_actual');
            $table->date('fecha_salida');
            $table->date('fecha_recogida');            
            $table->float('tasa_transporte', 8, 2);
            $table->float('descarga', 8, 2);
            $table->float('reembolso', 8, 2);
            $table->float('detencion', 8, 2);
            $table->string('escala');
            $table->string('otros_cargos');
            $table->float('tarifa_total', 8, 2);
            $table->float('peso', 8, 2);
            $table->float('volumen', 8, 2);
            $table->foreignId('cliente_id');
            $table->foreignId('cisterna_id');
            $table->foreignId('user_id'); //CHOFER
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargas');
    }
};
