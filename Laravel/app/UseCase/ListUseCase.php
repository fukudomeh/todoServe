<?php

namespace App\UseCase;

use App\Models\todolist;

class ListUsecase
{
    /**
     * idを昇順に並べる検索
     *
     *
     * 検索結果を返す
     */
    public function invoke()
    {
        $todo = todolist::orderBy('id', 'asc')->get();
        return $todo;
    }
}
