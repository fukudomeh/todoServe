<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodolistRequest;
use App\UseCase\CreateUseCase as UseCase;

class CreateController extends Controller
{
    /**
     * DBに追加した値をjsonで返す
     *
     * 
     * 
     */
    public function __invoke(TodolistRequest $request,UseCase $useCase)
    {
        $todo=$useCase->invoke($request);
        return response()->json([
            "status" => 200,
            "message" => "",
            "data" => [
                $todo
            ]
        ]);
    }
}
