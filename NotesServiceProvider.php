<?php

namespace Coleus\Notes;

use Illuminate\Support\ServiceProvider;

class NotesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('notes', function ($app) {
            return new Notes();
        });
    }

    public function boot()
    {
        //
    }
    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     $package
    //         ->name('notes')
    //         ->hasConfigFile()
    //         ->hasViews()
    //         ->hasMigration('create_notes_table')
    //         ->hasRoute('notes')
    //         ->hasCommand(NotesCommand::class)
    //         ->publishesServiceProvider(NotesServiceProvider::class);
    // }
}
