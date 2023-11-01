<?php

use Coleus\Notes\Http\Controller\NoteController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('notes.route_prefix', 'notes'),
    'as' => config('notes.route_prefix', 'notes').'.',
    // 'middleware' => HandleInertiaRequests::class,
], function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::resource('/', NoteController::class)
            ->parameter('', 'note')
            ->withTrashed();
        Route::post('/{note}/restore', [NoteController::class, 'restore'])
            ->name('notes.restore')
            ->withTrashed();
        Route::delete('/{note}/force-delete', [NoteController::class, 'forceDelete'])
            ->name('notes.forceDelete')
            ->withTrashed();
    });
});
