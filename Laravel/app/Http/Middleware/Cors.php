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
                ->header('Access-Control-Allow-Origin', 'localhost')
                ->header('Access-Control-Allow-Methods', 'GET, POST,PUT,DELETE')
                // ->header('Access-Control-Allow-Headers', 'Accept, X-Requested-With, Origin, Content-Type');
                ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type');
        }
        return $next($request);
    }
}