<?php

namespace App\UseCase;

use App\Models\todolist;

class UpdateUsecase
{
    /**
     * idに対応したデータを入力された値で更新
     *
     *
     * 
     */
    public function invoke($request)
    {
        $todo = todolist::find($request->id);
        //IDが存在するかcheck
        if (isset($todo)) {
            $todo->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'date' => $request->input('date'),
            ]);
            //idのデータを{id}から取得してjsonで返す
            $Updated_todo = todolist::find($request->id);
            return $Updated_todo;
        } else {
            return null;
        }
    }
}
