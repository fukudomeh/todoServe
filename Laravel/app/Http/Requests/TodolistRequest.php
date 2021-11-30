<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class TodolistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *バリデーションルールを設定して、requestに適応させている
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'date' => ['required', 'date'],
            'id' => ['nullable', 'int']

        ];
    }


    /**
     * errormessage
     * 指定したバリデーションと違った場合出力
     * @return array
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "status"=> 415,
                "message" => "フォーマットが正しくありません。",
                "date"=>[]
            ])
        );
    }
}
