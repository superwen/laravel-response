<?php

namespace Superwen\Response\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * @method static JsonResponse success(object |array $data = [], string $message = '请求成功.', int $code = 0)
 * @method static JsonResponse fail(int $code = -1, string $message = '请求失败.')
 * @method static JsonResponse error(int $code = -1, string $message = '系统故障.', string $error = '', array $debug = [])
 * @method static JsonResponse created(int $code = 0, string $message = '操作成功.', object|array $data = [])
 * @method static JsonResponse noContent()
 * @method static JsonResponse unauthorized(int $code = 0, string $message = '未授权.')
 * @method static JsonResponse forbidden(int $code = 0, string $message = '请求权限不足.')
 * @method static JsonResponse notFound(int $code = 0, string $message = '请求资源不存在.')
 * @method static JsonResponse validateFail(int $code = 0, string $message = '请求参数错误.', $errors = null, $debug = [])
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Superwen\Response\Response::class;
    }
}
