<?php

namespace Opencbs\Person;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Opencbs\Person\Commands\PersonCommand;

class PersonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('person')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_person_table')
            ->hasCommand(PersonCommand::class);
    }
}
