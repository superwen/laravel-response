<?php

namespace Superwen\Response\Formats;

use Superwen\Response\Facades\PaginateUtil;

class LengthAwarePaginatorFormat
{
    public function formatData($data): array
    {
        $formatData = $data->items();
        $pagination = PaginateUtil::paginates($data);
        return [
            'data' => $formatData,
            'meta' => ['pagination' => $pagination]
        ];
    }
}
