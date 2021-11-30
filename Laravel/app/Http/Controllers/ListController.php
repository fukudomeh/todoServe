<?php

namespace App\Http\Controllers;

use App\UseCase\ListUseCase as UseCase;

class ListController extends Controller
{
    /**
     * id検索結果をjsonに変換
     *
     *
     * 
     */
    public function __invoke(UseCase $useCase)
    {
        $todo=$useCase->invoke();
        return response()->json([
            "status" => 200,
            "message" => "",
            "data" => [
                'TodoList' => $todo
            ]
        ]);
    }
}
