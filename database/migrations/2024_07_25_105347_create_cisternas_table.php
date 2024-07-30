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
        Schema::create('cisternas', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->float('longitud', 8, 2);
            $table->string('pais_origen');
            $table->string('placa');
            $table->string('material');
            $table->string('nro_chasis');
            $table->float('capacidad', 8, 2);
            $table->string('tipo_carga');
            $table->date('fecha_fabricacion');
            $table->float('altura', 8, 2);
            $table->float('anchura', 8, 2);
            $table->float('peso_vacio', 8, 2);
            $table->float('peso_maximo', 8, 2);
            $table->string('tipo_combustible');
            $table->date('fecha_adquisicion');
            $table->date('fecha_desactivacion');
            $table->integer('nro_ejes');
            $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cisternas');
    }
};
