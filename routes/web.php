<?php

use App\Http\Controllers\CargaController;
use App\Http\Controllers\CisternaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.template.login');
    /* return view('welcome'); */
});

Route::get('/dashboard', function () {
    return redirect()->route('reportes.create');
    /* return view('dashboard'); */
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resources([
        'usuarios'      =>      UsuarioController::class,
        'clientes'      =>      ClienteController::class,
        'cisternas'     =>      CisternaController::class,
        'gastos'        =>      GastoController::class,
        'cargas'        =>      CargaController::class,
        'reportes'      =>      ReporteController::class,
    ]);

    Route::get('/cargas-chofer', [ReporteController::class, 'cargas'])->name('cargas-chofer');
    /* Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); */
});

require __DIR__.'/auth.php';
