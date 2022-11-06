<?php

namespace Mintreu\LaravelForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintreu\LaravelForm\LaravelForm
 */
class LaravelForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mintreu\LaravelForm\LaravelForm::class;
    }
}
