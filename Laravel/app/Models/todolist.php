<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;
    //データベースに自動入力されるcreated_at,updated_atをpublic $timestamps = falseで削除
    //※削除しないとcreated_at,updated_atカラムがないDBに書き込むときにエラーになる
    public $timestamps = false;
    protected $guarded = ['id'];
    
}
