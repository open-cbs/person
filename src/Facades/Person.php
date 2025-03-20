<?php

namespace Opencbs\Person\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Opencbs\Person\Person
 */
class Person extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Opencbs\Person\Person::class;
    }
}
