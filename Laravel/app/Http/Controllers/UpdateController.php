<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodolistRequest;
use App\UseCase\UpdateUseCase as UseCase;

class UpdateController extends Controller
{
    /**
     * 更新した内容をjsonで返す
     *
     * 
     * 
     */
    public function __invoke(TodolistRequest $request, UseCase $useCase)
    {
        $todo = $useCase->invoke($request);
        if ($todo !== null) {
            return response()->json([
                "status" => 200,
                "message" => "",
                "data" => [
                    $todo
                ]
            ]);
        } else {
            return response()->json([
                "status" => 503,
                "message" => "入力されたidが見つかりませんでした",
                "date" => []
            ]);
        }
    }
}
