<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodolistRequest;
use App\UseCase\DeleteUseCase as UseCase;

class DeleteController extends Controller
{
    /**
     * URLから送られたidを消す
     *
     * 
     * 
     */
    public function __invoke(TodolistRequest $request, UseCase $useCase)
    {
        $todo = $useCase->invoke($request);
        
        if ($todo === true) {
            return response()->json([
                "status" => 200,
                "message" => "",
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
