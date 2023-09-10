<?php

use Coleus\Notes\Http\Controller\NoteController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('notes.route_prefix', 'notes'),
    'as' => config('notes.route_prefix', 'notes.'),
    // 'middleware' => HandleInertiaRequests::class,
], function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('/', [NoteController::class, 'index'])->name('index');
    });
});
