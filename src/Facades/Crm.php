<?php

namespace Helaplus\Crm\Facades;

use Illuminate\Support\Facades\Facade;

class Crm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'crm';
    }
}
