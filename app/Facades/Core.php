<?php
/**
 * User: Codizer
 * Date: 3/3/16
 * Time: 10:06 AM
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Core extends Facade
{
    /**
     * Devuelve una instancia de la
     * clase Core (Components)
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'core';
    }
}