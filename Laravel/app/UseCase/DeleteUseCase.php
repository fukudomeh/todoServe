<?php

namespace App\UseCase;

use App\Models\todolist;

class DeleteUsecase
{
    /**
     * idを昇順に並べる検索
     *
     *
     * 検索結果を返す
     */
    public function invoke($request)
    {
        $todo = new Todolist;
        //IDがあるか確認 
        if ($todo->where('id', $request->id)->exists()) {
            $todo->where('id', $request->id)->delete();
            return true;
        } else {
            return false;
        }
    }
}
