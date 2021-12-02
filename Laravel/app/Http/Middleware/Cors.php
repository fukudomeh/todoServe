<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
        // すべてのレスポンスに CORS 用のヘッダーを追加する必要はないので URL から判断する
        $paths = explode('/', \Request::getPathInfo());
        if ($paths[1] === 'api') {
            return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://localhost:3001')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type');
        }
        return $next($request);
    }
}