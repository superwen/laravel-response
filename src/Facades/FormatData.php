<?php

namespace Superwen\Response\Facades;

use Illuminate\Support\Facades\Facade;
use Superwen\Response\Formats\Format;

/**
 * @method static array format(object |array $data = [])
 * @method static array formatData(object |array $data = [])
 */
class FormatData extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Format::class;
    }
}
