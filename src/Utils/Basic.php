<?php

namespace Superwen\Response\Utils;

use stdClass;

class Basic
{
    /**
     * 默认返回值
     * @return stdClass|array
     */
    public function defaultValue()
    {
        return config('laravel-response.is_object') ? new stdClass() : [];
    }
}
