<?php

namespace Superwen\Response\Formats;

use Superwen\Response\Facades\PaginateUtil;

class PaginatorFormat
{
    public function formatData($data): array
    {
        $formatData = $data->items();
        $pagination = PaginateUtil::simplePagenates($data);
        return [
            'data' => $formatData,
            'meta' => ['pagination' => $pagination]
        ];
    }
}
