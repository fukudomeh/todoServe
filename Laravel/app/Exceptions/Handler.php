<?php

namespace App\Exceptions;


use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use  Illuminate\Database\QueryException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {
        //if (!$request->is('api/*')) {
        // API以外は何もしない
        //    return parent::render($request, $exception);
        //} else if ($exception instanceof ModelNotFoundException) {
        // Route Model Binding でデータが見つからない
        //    return response()->json(['error' => 'Not found'], 404);

        // Route が存在しない
        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                "status" => 404,
                "message" => "ページが存在しません",
                "date" => []
            ]);
        // Method が存在しない
        } else if ($exception instanceof MethodNotAllowedHttpException) {
            // 
            return response()->json([
                "status" => 405,
                "message" => "許可されていないメソッドタイプのリクエストを受けた。",
                "date" => []
            ]);
        //DB queryError系の場合
        } else if ($exception instanceof QueryException) {
            return response()->json([
                "status" => 503,
                "message" => "DBと通信に失敗しました。",
                "date" => []
            ]);
        } else {
            return parent::render($request, $exception);
        }
    }
}
