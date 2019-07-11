<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracticeRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'practice') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|practice',
        ];
    }

    public function messages() {

        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入してください。',
            'age.practice' => '入力は偶数のみ受け付けます。',
        ];
    }
}
