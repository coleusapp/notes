<?php

namespace Coleus\Notes;

use Coleus\Notes\Commands\NotesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('notes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_notes_table')
            ->hasRoute('notes')
            ->hasCommand(NotesCommand::class)
            ->publishesServiceProvider(NotesServiceProvider::class);
    }
}
