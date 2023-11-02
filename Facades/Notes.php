<?php

namespace Coleus\Notes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coleus\Notes\Notes
 */
class Notes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Coleus\Notes\Notes::class;
    }
}
