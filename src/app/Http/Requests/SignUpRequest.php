<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() ==  'signup' || $this->path() == 'signup/complete')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email|string',
            'password' => 'required|min:8|max:20|string',
            'nickname' => 'max:20|string|nullable',
        ];
    }


    //バリデーションのエラー文はデフォルトで英語なので、日本語を設定しておく。
    public function messages()
    {
    return [
        'email.required' => 'メールアドレスは必ず入力して下さい。',
        'email.email'  => 'メールアドレスの形式で入力してください。',
        'email.unique'  => 'このメールアドレスは既に登録されています。',
        'password.required' => 'パスワードは必ず入力して下さい。',
        'password.min' => 'パスワードは8文字以上にして下さい。',
        'password.max' => 'パスワードは20文字以内にして下さい。',
        'nickname.max' => 'ニックネームは20文字以内にして下さい。',
    ];
    }
}
