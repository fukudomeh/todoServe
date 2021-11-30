<?php

namespace App\UseCase;

use App\Models\todolist;

class CreateUsecase
{
    /**
     * idを昇順に並べる検索
     *
     *
     * 検索結果を返す
     */
    public function invoke($request)
    {
        $todo = new todolist();
        //受け取った値入力
        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->date = $request->input('date');
        $todo->save();
        //今入力したidのデータをDBから取得
        $created_todo = todolist::find($todo->id);
        return $created_todo;
    }
}
