<?php

namespace Superwen\Response\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array paginates(object |array $data = [])
 * @method static array simplePagenates(object |array $data = [])
 */
class PaginateUtil extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Superwen\Response\Utils\PaginateUtil::class;
    }
}
