<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('notes.route_prefix', 'notes'),
], function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::resource('notes', \Coleus\Notes\Http\Controller\NoteController::class);
    });
});
