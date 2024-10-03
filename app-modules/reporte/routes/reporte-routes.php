<?php

use Modules\Reporte\Http\Controllers\ReporteController;

Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');
// Route::get('/reportes/create', [ReporteController::class, 'create'])->name('reportes.create');
// Route::post('/reportes', [ReporteController::class, 'store'])->name('reportes.store');
// Route::get('/reportes/{reporte}', [ReporteController::class, 'show'])->name('reportes.show');
// Route::get('/reportes/{reporte}/edit', [ReporteController::class, 'edit'])->name('reportes.edit');
// Route::put('/reportes/{reporte}', [ReporteController::class, 'update'])->name('reportes.update');
// Route::delete('/reportes/{reporte}', [ReporteController::class, 'destroy'])->name('reportes.destroy');
